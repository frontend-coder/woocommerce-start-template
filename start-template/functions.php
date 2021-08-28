<?php
/**
 * estorwoocommerce functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package estorwoocommerce
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	load_template( get_template_directory() . '/inc/carbon-fields/vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}

 add_action( 'carbon_fields_register_fields', 'estore_register_custom_fields' );
 function estore_register_custom_fields() {
	 require_once get_template_directory() . '/inc/custom-fields-options/theme-options.php';
	 require_once get_template_directory() . '/inc/custom-fields-options/metaboxes.php';


 }


require_once get_template_directory() . '/inc/theme-settings.php';
require_once get_template_directory() . '/inc/theme-widgets.php';
require_once get_template_directory() . '/inc/theme-scripts-style.php';
require_once get_template_directory() . '/inc/helpers.php';


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
	require get_template_directory() . '/woocommerce/wc-functions.php';
	require get_template_directory() . '/woocommerce/wc-functions-remove.php';
}