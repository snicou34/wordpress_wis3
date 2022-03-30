<?php

function donuteat_custom_post_types() {
	$cpt = array(
		'labels'              => array(
			'name'          => __( 'Etablissements', 'donuteat' ),
			'singular_name' => __( 'Etablissement', 'donuteat' ),
		),
		'show_ui'             => true,
		'show_admin_column'   => true,
		'show_in_rest'        => true,
		'hierarchical'        => true,
		'public'              => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'rewrite'             => array( 'slug' => 'etablissements', 'with_front' => true ),
		'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'excerpt' ),
		'menu_icon'           => 'dashicons-store',
	);

	register_post_type( 'etablissement', $cpt );

    $cpt = array(
    'labels'              => array(
        'name'          => __( 'Recrutements', 'donuteat' ),
        'singular_name' => __( 'Recrutement', 'donuteat' ),
    ),
        'show_ui'             => true,
        'show_admin_column'   => true,
        'show_in_rest'        => true,
        'hierarchical'        => true,
        'public'              => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'rewrite'             => array( 'slug' => 'recrutement', 'with_front' => true ),
        'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'excerpt' ),
        'menu_icon'           => 'dashicons-businessman',
    );

    register_post_type( 'recrutement', $cpt );
}

add_action( 'init', 'donuteat_custom_post_types' );
