<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @author         CyberChimps
 * @copyright      Copyright (c) 2021, CyberChimps
 * @license        license.txt
 * @package FSE
 * @since 1.0.0
 */

define( 'THEME_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Check if the WordPress version is 6.0 or higher, and if the PHP version is at least 7.4.
 * If not, do not activate.
 */
if ( version_compare( $GLOBALS['wp_version'], '6.0-RC4-53425', '<' ) || version_compare( PHP_VERSION_ID, '70400', '<' ) ) {
	// Backward compatibility.
	require get_template_directory() . '/inc/backward-compatibility.php';
	return;
}

/**
 * Get the output stylesheet
 *
 * @since tailwindfse 1.0
 * @return string
 */
function tailwindfse_get_stylesheet() {
	$stylesheet = 'output.min.css';

	if ( defined( 'SCRIPT_DEBUG' ) && true === SCRIPT_DEBUG ) {
		$stylesheet = 'output.css';
		return $stylesheet;
	}
	return $stylesheet;
}

if ( ! function_exists( 'tailwindfse_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since tailwindfse 1.0
	 *
	 * @return void
	 */
	function tailwindfse_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
		add_editor_style( get_template_directory_uri() . '/assets/css/output/' . tailwindfse_get_stylesheet() );
	}

endif;

add_action( 'after_setup_theme', 'tailwindfse_support' );


if ( ! function_exists( 'tailwindfse_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since tailwindfse 1.0
	 *
	 * @return void
	 */
	function tailwindfse_styles() {

		$version_string = is_string( THEME_VERSION ) ? THEME_VERSION : false;

		// register style.css stylesheet.
		wp_register_style(
			'tailwindcss_fse_output',
			get_template_directory_uri() . '/assets/css/output/' . tailwindfse_get_stylesheet(),
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'tailwindcss_fse_output' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'tailwindfse_styles' );

// Add block patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Enables customizer support.
add_action( 'customize_register', '__return_true' );

// Loads google fonts.
require get_template_directory() . '/inc/class-google-fonts-loader.php';

// Apply filters.
require get_template_directory() . '/inc/filters.php';
