<?php get_header(); ?>

    <style>
        .acf-map {
            width: 100%;
            height: 400px;
            border: #ccc solid 1px;
            margin: 20px 0;
        }

        /* Fixes potential theme css conflict. */
        .acf-map img {
            max-width: inherit !important;
        }
    </style>

    <main id="main" class="site-main" role="main">

        <div class="row">
            <div class="col-lg-8 mx-auto">

                <h1 class="card-title font-weight-bold mb-4 mt-4" style="color: #E4BE46"><?php the_title(); ?></h1>


                <div class="card mb-4 shadow-sm" style="border: none; padding: 15px; border-radius: 10px">
                    <div class="card-body">
                        <div>

                            <div class="row mt-3">
                                <?php if ($image = get_field('image_etablissement')) : ?>
                                <div class="image-etablissement img-fluid">
                                <?php echo wp_get_attachment_image($image['id'], 'large'); ?>
                            </div>
                            <?php endif; ?>

                            <div class="mb-3">
                                <li style="list-style-type: none; margin-top: 25px"><span
                                    <?php if ($text = get_field('texte')) : ?>
                                        <div class="texte">
                                            <?php echo gettext($text); ?>
                                        </div>
                                    <?php endif; ?>

                                    <span class="badge badge-dark mr-2"
                                          style="padding: 6px"> <?php if ($telephone = get_field('telephone')) : ?>
                                            <div class="telephone">
                                        <p> Numéro de téléphone de l'établissement: <?php echo gettext($telephone); ?></p>
                                        </div>
                                        <?php endif; ?>
                                        <span class="badge badge-dark mr-2"><?php if ($adresse = get_field('adresse-etablissement.php')) : ?>
                                                <div class="adresse">
                                        <p> Adresse: <?php echo gettext($adresse); ?> </p>
                                        </div>
                                            <?php endif; ?></span>

                                        <?php
                                        $location = get_field('maps');
                                        if ($location): ?>
                                            <div class="acf-map" data-zoom="16">
                                        <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>"
                                             data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
                                        </div>
                                        <?php endif; ?>
                                </li>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


    </main>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnQWW7IAZlnEgCffRa5Kr2DixRXgwgfqQ"></script>
    <script async type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            (function ($) {

                console.log('Test', $, jQuery);

                /**
                 * initMap
                 *
                 * Renders a Google Map onto the selected jQuery element
                 *
                 * @date    22/10/19
                 * @since   5.8.6
                 *
                 * @param   jQuery $el The jQuery element.
                 * @return  object The map instance.
                 */
                function initMap($el) {

                    // Find marker elements within map.
                    var $markers = $el.find('.marker');

                    // Create gerenic map.
                    var mapArgs = {
                        zoom: $el.data('zoom') || 16,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    var map = new google.maps.Map($el[0], mapArgs);

                    // Add markers.
                    map.markers = [];
                    $markers.each(function () {
                        initMarker($(this), map);
                    });

                    // Center map based on markers.
                    centerMap(map);

                    // Return map instance.
                    return map;
                }

                /**
                 * initMarker
                 *
                 * Creates a marker for the given jQuery element and map.
                 *
                 * @date    22/10/19
                 * @since   5.8.6
                 *
                 * @param   jQuery $el The jQuery element.
                 * @param   object The map instance.
                 * @return  object The marker instance.
                 */
                function initMarker($marker, map) {

                    // Get position from marker.
                    var lat = $marker.data('lat');
                    var lng = $marker.data('lng');
                    var latLng = {
                        lat: parseFloat(lat),
                        lng: parseFloat(lng)
                    };

                    // Create marker instance.
                    var marker = new google.maps.Marker({
                        position: latLng,
                        map: map
                    });

                    // Append to reference for later use.
                    map.markers.push(marker);

                    // If marker contains HTML, add it to an infoWindow.
                    if ($marker.html()) {

                        // Create info window.
                        var infowindow = new google.maps.InfoWindow({
                            content: $marker.html()
                        });

                        // Show info window when marker is clicked.
                        google.maps.event.addListener(marker, 'click', function () {
                            infowindow.open(map, marker);
                        });
                    }
                }

                /**
                 * centerMap
                 *
                 * Centers the map showing all markers in view.
                 *
                 * @date    22/10/19
                 * @since   5.8.6
                 *
                 * @param   object The map instance.
                 * @return  void
                 */
                function centerMap(map) {

                    // Create map boundaries from all map markers.
                    var bounds = new google.maps.LatLngBounds();
                    map.markers.forEach(function (marker) {
                        bounds.extend({
                            lat: marker.position.lat(),
                            lng: marker.position.lng()
                        });
                    });

                    // Case: Single marker.
                    if (map.markers.length == 1) {
                        map.setCenter(bounds.getCenter());

                        // Case: Multiple markers.
                    } else {
                        map.fitBounds(bounds);
                    }
                }

                // Render maps on page load.
                $(document).ready(function () {
                    $('.acf-map').each(function () {
                        var map = initMap($(this));
                    });
                });

            })(window.$);
        });
    </script>


<?php get_footer();