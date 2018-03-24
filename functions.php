<?php
/**
 * Ambuz functions and definitions
 *
 *
 * @package Ambuz
 * @since 1.0
 */

/**
 * Enqueue scripts and styles.
 */
function ambuz_scripts() {
	$asset_version = '1.1';
	// Add google font.
	wp_enqueue_style( 'ambus-font', 'https://fonts.googleapis.com/css?family=Roboto:300i,400,700', array(), null );

	// Theme stylesheet.
	wp_enqueue_style( 'ambuz-style', get_stylesheet_uri(), array(), $asset_version );

	
	wp_enqueue_script( 'ambuz-main', get_theme_file_uri( '/js/main.js' ), array(), $asset_version, true );

}
add_action( 'wp_enqueue_scripts', 'ambuz_scripts' );
