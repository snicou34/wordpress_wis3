<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#fff"/>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

</head>

<body id="body" <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="app">

    <a class="skip-link screen-reader-text visually-hidden" href="#content">
        <?php esc_html_e('Skip to content', 'arceis'); ?>
    </a>