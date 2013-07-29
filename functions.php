<?php
if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'home-blog-teaser', 100, false );
	add_image_size( 'home-slider', 807, false );
}

function get_catID($slug) {
$idObj = get_category_by_slug($slug); 
return $id = $idObj->term_id;
}

function p($objoect) {
	?><pre><?php
	print_r($objoect);
	?></pre><?php
}

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'home-slider',
		array(
			'labels' => array(
				'name' => __( 'Home Slider' ),
				'singular_name' => __( 'Home Slider Frame' )
			),
		'public' => true,
		'has_archive' => false,
		'rewrite' => array('slug' => 'home-slider'),
		'taxonomies' => array('category'), // this is IMPORTANT
		'supports' => array('title','thumbnail')
		)
	);
}


?>