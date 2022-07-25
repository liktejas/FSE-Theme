<?php
/**
 * Call now button
 *
 * @since TailwindFSE 1.0
 * @package TailwindFSE
 */

return array(
	'title'      => __( 'Call Now Button', 'tailwindfse' ),
	'categories' => array( 'responsive_fse_theme' ),
	'keywords'   => array( 'Call', 'contact' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"5px"}}},"className":"is-style-align-full","layout":{"inherit":true}} -->
    <div class="wp-block-group is-style-align-full" style="padding-top:5px"><!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"textColor":"grey-20","style":{"typography":{"fontSize":"17px"},"color":{"background":"#10659c"}},"className":"is-style-call-now"} -->
    <div class="wp-block-button has-custom-font-size is-style-call-now" style="font-size:17px"><a class="wp-block-button__link has-grey-20-color has-text-color has-background wp-element-button" href="tel:+6281332767" style="background-color:#10659c">(+62) 81 332 767</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group -->',
);
