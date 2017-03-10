<?php

if ( ! isset( $content_width ) ) $content_width = 1000;

function custom_theme_setup() {
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('custom-background');
	add_theme_support('custom-header', array('width' => 1000, 'height' => 400));
	
}
add_action('after_setup_theme', 'custom_theme_setup');


function add_library() {
	wp_enqueue_script(
		'custom-script',
		get_stylesheet_directory_uri() . '/js/app.js',
		array( 'jquery' )
	);
}

add_action( 'wp_enqueue_scripts', 'add_library' );


?>