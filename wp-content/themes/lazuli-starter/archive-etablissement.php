<?php get_header(); ?>

<?php $query = new WP_Query(array(
    'post_type' => 'etablissement',
    'posts_per_page' => 10
)); ?>

    <section id="etablissement-grid">
        <div class="container">
            <?php if ($query->have_posts()): ?>
                <div class="row g-4">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="col-md-6 col-xl-4">
                            <?php get_template_part('template-parts/etablissement'); ?>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
                <?php get_template_part('template-parts/pagination'); ?>
            <?php endif; ?>

        </div>
    </section>

<?php get_footer();
