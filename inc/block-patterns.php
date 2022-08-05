<?php
/**
 * TailwindFSE: Block Patterns
 *
 * @since TailwindFSE 1.0
 * @author         CyberChimps
 * @copyright      Copyright (c) 2021, CyberChimps
 * @license        license.txt
 * @package TailwindFSE
 */

/**
 * Registers block patterns and categories.
 *
 * @since TailwindFSE 1.0
 *
 * @return void
 */
function tailwindfse_register_block_patterns() {
	$block_pattern_categories = array(
		'responsive_fse_theme' => array( 'label' => __( 'Responsive-FSE - Theme', 'tailwindfse' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since TailwindFSE 1.0
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
	$block_pattern_categories = apply_filters( 'tailwindfse_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		'content-sidebar',
		'contact-info',
		'call-now-button',
		'service-pattern',
		'video-text-button',
		'team-pattern',
		'portfolio-pattern',
		'about-business',
		'about-doctor',
		'large-footer',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since TailwindFSE 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'tailwindfse_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'tailwindfse/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'tailwindfse_register_block_patterns', 9 );
