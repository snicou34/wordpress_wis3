<?php get_header(); ?>
    <main id="main" class="site-main" role="main">

        <section class="section">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8 mx-auto">

                        <h1 class="card-title font-weight-bold mb-4 mt-4"><?php the_field('title-recrutement'); ?></h1>


                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <div>

                                    <div class="row mt-3">
                                        <?php if ($image = get_field('image-recrutement')) : ?>
                                            <div class="image-recrutement">
                                                <?php echo wp_get_attachment_image($image['id'], 'large'); ?>
                                            </div>
                                        <?php endif; ?>

                                        <div class="mb-3">
                                            <li class="job-type"><span <?php the_post_thumbnail(); ?>>Type de poste : <?php the_field('job-recrutement'); ?></span>, Bac+3
                                                <h5 class="mt-3 mb-2">Description du poste :</h5>
                                                <p><?php the_field('text-recrutement'); ?></p>
                                                <span class="badge badge-dark mr-2">Lieu du poste : <strong><?php the_field('city-recrutement');?></strong></span>
                                            </li>
                                        </div>
                                    </div>

                                    <a class="btn-bts" href="#">
                                        <div class="d-grid gap-2 col-6 mx-auto">

                                            <button class="btn btn-success" type="button">Postuler à cette offre</button>
                                        </div>
                                    </a>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </section>

    </main><!-- #main -->
<?php get_footer();