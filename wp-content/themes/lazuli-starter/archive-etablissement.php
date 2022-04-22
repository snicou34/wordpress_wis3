<?php get_header(); ?>

<?php $query = new WP_Query(array(
    'post_type' => 'etablissement',
    'posts_per_page' => 10
));
?>
    <section id="etablissement-grid">
        <?php if ($query->have_posts()): ?>
    <?php while ($query->have_posts()) : $query->the_post(); ?>
        <div class="row row-cols-1 row-cols-md-3 g-4 mx-auto">
            <div class="col">
                <div class="card shadow-sm" style="margin: 20px; border-radius: 5px">
                    <?php if ($image = get_field('image_etablissement')) : ?>
                        <div class="image-etablissement img-fluid">
                            <?php echo wp_get_attachment_image($image['id'], 'large'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="<?php get_template_part('template-parts/etablissement'); ?>" class="btn btn-primary">Voir la boutique</a>
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
