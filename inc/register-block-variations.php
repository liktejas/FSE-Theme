<?php
/**
 * Block Variations
 *
 * @package responsive-fse
 * @since 1.2.0
 */

/**
 * Create a sticky variations of the header and navigation block.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-variations/
 *
 * @since 1.2.0
 *
 * @return void
 */
function responsive_fse_register_block_variation() {
	wp_enqueue_script(
		'responsive-fse-block-variations',
		get_template_directory_uri() . '/assets/js/block-variation.js',
		array( 'wp-blocks' ),
		THEME_VERSION,
		true
	);
}

add_action( 'enqueue_block_editor_assets', 'responsive_fse_register_block_variation' );

