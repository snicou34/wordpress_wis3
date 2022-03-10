<?php

function etablissement_custom_post_types() {
	$cpt = array(
		'labels'              => array(
			'name'          => __( 'Etablissements', 'lazuli' ),
			'singular_name' => __( 'Etablissement', 'lazuli' ),
		),
		'show_ui'             => true,
		'show_admin_column'   => true,
		'show_in_rest'        => true,
		'hierarchical'        => true,
		'public'              => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'rewrite'             => array( 'slug' => 'etablissement', 'with_front' => true ),
		'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'excerpt' ),
		'menu_icon'           => 'dashicons-store',
	);

	register_post_type( 'etablissement', $cpt );
}

add_action( 'init', 'etablissement_custom_post_types' );

function recrutement_custom_post_types() {
    $cpt = array(
        'labels'              => array(
            'name'          => __( 'Recrutements', 'lazuli' ),
            'singular_name' => __( 'Recrutement', 'lazuli' ),
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

add_action( 'init', 'recrutement_custom_post_types' );
