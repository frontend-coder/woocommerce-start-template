<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Field\Complex_Field;

// Default options page
$basic_options_container = Container::make( 'theme_options', __( 'Основные настройки' ) )
    ->add_fields( array(
        Field::make( 'header_scripts', 'crb_header_script', __( 'Header Script' ) ),
        Field::make( 'footer_scripts', 'crb_footer_script', __( 'Footer Script' ) ),
    ) );

// Add second options page under 'Basic Options'
Container::make( 'theme_options', __( 'Social Links' ) )
    ->set_page_parent( $basic_options_container ) // reference to a top level container
    ->add_fields( array(
        Field::make( 'text', 'crb_facebook_link', __( 'Facebook Link' ) ),
        Field::make( 'text', 'crb_twitter_link', __( 'Twitter Link' ) ),
    ) );

// Add third options page under "Appearance"
// Container::make( 'theme_options', __( 'Customize Background' ) )
//     ->set_page_parent( 'themes.php' ) // identificator of the "Appearance" admin section
//     ->add_fields( array(
//         Field::make( 'color', 'crb_background_color', __( 'Background Color' ) ),
//         Field::make( 'image', 'crb_background_image', __( 'Background Image' ) ),
//     ) );