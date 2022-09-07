<?php
/**
 * Responsive FSE: Block Patterns
 *
 * @since Responsive FSE 1.0
 * @author         CyberChimps
 * @copyright      Copyright (c) 2021, CyberChimps
 * @license        license.txt
 * @package Responsive FSE
 */

/**
 * Registers block patterns and categories.
 *
 * @since Responsive FSE 1.0
 *
 * @return void
 */
function responsive_fse_register_block_patterns() {
	$block_pattern_categories = array(
		'responsive_fse_theme' => array( 'label' => __( 'Responsive-FSE - Theme', 'responsive-fse' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Responsive FSE 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'responsive_fse_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		'contact-info',
		'call-now-button',
		'service-pattern',
		'video-text-button',
		'team-pattern',
		'portfolio-pattern',
		'portfolio-photography',
		'testimonial',
		'about-business',
		'about-doctor',
		'gallery',
		'hero-lifestyle',
		'hero-food-blog',
		'simple-footer',
		'footer-restaurant',
		'404',
		'main-footer',
		'search-title',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Responsive FSE 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'responsive_fse_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'responsive-fse/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'responsive_fse_register_block_patterns', 9 );
