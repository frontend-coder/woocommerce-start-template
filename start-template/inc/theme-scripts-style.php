<?php 
if ( ! defined( 'ABSPATH' ) ) {
	// Replace the version number of the theme on each release.
	exit;
}


/**
* Enqueue scripts and styles.
*/
function estor_styles() {
wp_enqueue_style( 'estor-style', get_stylesheet_uri(), array(), _S_VERSION );
wp_style_add_data( 'estor-style', 'rtl', 'replace' );

}

add_action( 'wp_enqueue_scripts', 'estor_styles' );





function estor_scripts() {

wp_enqueue_script( 'estor-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}

}
add_action( 'wp_enqueue_scripts', 'estor_scripts' );