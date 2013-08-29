<?php

// CSS
add_action('wp_enqueue_scripts', 'fed_styles');
function fed_styles() {
    wp_register_style( 'main-style', get_stylesheet_directory_uri() . '/css/main.css', array(), '1.0', 'all' );
	wp_register_style( 'wp-style', get_stylesheet_directory_uri() . '/css/wp.css', array(), '1.0', 'all' );
    
	wp_enqueue_style( 'main-style' );
	wp_enqueue_style( 'wp-style' );
}

// Favicon
add_action( 'wp_head', 'fed_favicon' );
function fed_favicon() {
    echo '<link rel="shortcut icon" href="'.get_stylesheet_directory_uri().'/img/favicon.ico">' . "\n";
}

// JS
add_action( 'wp_enqueue_scripts', 'fed_js' );
function fed_js() {
	wp_register_script( 'modernizr', get_stylesheet_directory_uri() . '/js/vendor/modernizr.custom.80453.js', array('jquery'), '1.0', false );
	wp_register_script( 'fed-main', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), '1.0', true );
	wp_register_script( 'fed-plugins', get_stylesheet_directory_uri() . '/js/plugins.js', array('jquery'), '1.0', true );
	 
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'fed-main' );
	wp_enqueue_script( 'fed-plugins' );
}