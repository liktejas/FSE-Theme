<?php
/**
 * Search Title
 * Inserter: no
 *
 * @since Responsive FSE 1.2.0
 * @package Responsive FSE
 */

$search_result = '';
if ( isset( $_GET['s'] ) ) { //phpcs:ignore

	$search_term = sanitize_text_field( wp_unslash( $_GET['s'] ) ); //phpcs:ignore
	if ( isset( $search_term ) ) {
		/* translators: %s: Search term. */
		$search_result = sprintf( esc_html__( ' for "%s"', 'responsive-fse' ), esc_html( $search_term ) );
	} else {
		$search_result = '';
	}
}

return array(
	'title'      => __( 'Search Title', 'responsive-fse' ),
	'categories' => array( 'responsive_fse_theme' ),
	'inserter'   => false,
	'content'    => '<!-- wp:group {"style":{"spacing":{"margin":{"top":"20px"}}},"backgroundColor":"white"} -->
	<div class="wp-block-group has-white-background-color has-background" style="margin-top:20px"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":1.8}},"fontSize":"huge"} -->
	<p class="has-text-align-center has-huge-font-size" style="font-style:normal;font-weight:700;line-height:1.8">' . __( 'Search results' ) . $search_result . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->',
);
