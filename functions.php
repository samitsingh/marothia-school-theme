<?php
/**
 * Marothia School Premium Theme
 *
 * @package MarothiaSchool
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme setup
 */
function marothia_theme_setup() {

	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'align-wide' );

}
add_action( 'after_setup_theme', 'marothia_theme_setup' );

/**
 * Enqueue frontend assets
 */
function marothia_enqueue_assets() {

	wp_enqueue_style(
		'marothia-style',
		get_template_directory_uri() . '/assets/css/style.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_script(
		'marothia-script',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

}
add_action( 'wp_enqueue_scripts', 'marothia_enqueue_assets' );
