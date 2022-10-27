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

	$version_string = is_string( THEME_VERSION ) ? THEME_VERSION : false;

	$script = 'block-variation.min.js';

	if ( defined( 'SCRIPT_DEBUG' ) && true === SCRIPT_DEBUG ) {
		$script = 'block-variation.js';
	}

	wp_enqueue_script(
		'responsive-fse-block-variations',
		get_template_directory_uri() . '/assets/js/' . $script,
		array( 'wp-blocks' ),
		$version_string,
		true
	);

	$header_variation_translation = array(
		'default_style' => __( 'Default header', 'plugin-domain' ),
		'sticky_header' => __( 'Sticky header', 'plugin-domain' ),
	);
	wp_localize_script( 'responsive-fse-block-variations', 'responsive_fse_translate', $header_variation_translation );
}

add_action( 'enqueue_block_editor_assets', 'responsive_fse_register_block_variation' );

