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
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;

		$stylesheet = 'output.min.css';

		if ( defined( 'SCRIPT_DEBUG' ) && true === SCRIPT_DEBUG ) {
			$stylesheet = 'output.css';
		}

		wp_register_style(
			'tailwindcss_fse_output',
			get_template_directory_uri() . '/assets/css/output/' . $stylesheet,
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

add_action( 'customize_register', '__return_true' );
