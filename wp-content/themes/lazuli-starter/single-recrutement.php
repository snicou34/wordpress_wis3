<?php get_header(); ?>
    <main id="main" class="site-main" role="main">

        <h1><?php the_title(); ?></h1>

        <?php if ($image = get_field('image_recrutement')) : ?>
            <div class="image-recrutement"'>
            <?php echo wp_get_attachment_image($image['id'], 'large'); ?>
            </div>
        <?php endif; ?>

    </main><!-- #main -->
<?php get_footer();