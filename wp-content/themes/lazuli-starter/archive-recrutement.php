<?php get_header(); ?>

<?php $query = new WP_Query(array(
    'post_type' => 'recrutement',
    'posts_per_page' => 10
));
?>
    <section id="recrutement-grid">
        <?php if ($query->have_posts()): ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="row row-cols-1 row-cols-md-3 g-4 mx-auto">
                    <div class="col">
                        <div class="card shadow-sm" style="margin: 20px; border-radius: 5px">
                            <?php if ($image = get_field('image-recrutement')) : ?>
                                <div class="image-recrutement img-fluid">
                                    <?php echo wp_get_attachment_image($image['id'], 'large'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"><?php the_field('texte-recrutement', get_the_ID()); ?> </p>
                                <div class="btn btn-primary">
                                    <a href="<?php get_template_part('template-parts/recrutement');?>"> Voir l'offre</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>

            <?php get_template_part('template-parts/pagination'); ?>
        <?php endif; ?>

    </section>

<?php get_footer();
