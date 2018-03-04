<?php

add_action( 'wp_enqueue_scripts', 'theme_photo_style' );
add_action( 'wp_enqueue_scripts', 'theme_photo_scripts' );

function theme_photo_style() {

	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css');
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

function theme_photo_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script('mainjs', get_template_directory_uri() . '/assets/js/main.js', array("jquery"), null, true);
	wp_enqueue_script('viewport', get_template_directory_uri() . '/assets/js/jquery.viewportchecker.min.js', array("jquery"), null, true);
	wp_enqueue_script('mansory', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', array("jquery"), null, true);
}

add_theme_support( 'custom-logo', array(
	'height'      => 250,
	'width'       => 250,
	'flex-width'  => true,
	'flex-height' => true,
) );
add_theme_support( 'post-thumbnails' );

add_filter( 'document_title_separator', function(){ return ' | '; } );


