<?php
/**
 * Contact Information.
 *
 * @since Responsive FSE 1.0
 * @package Responsive FSE
 */

return array(
	'title'       => esc_html__( 'Contact Information', 'responsive-fse' ),
	'categories'  => array( 'responsive_fse_theme' ),
	'keywords'    => array( 'template', 'contact', 'information' ),
	'description' => esc_html_x( 'A block with 3 columns that display contact information and social media links.', 'Block pattern description', 'responsive-fse' ),
	'content'     => '<!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center"><a href="mailto:#">' . __( 'example@example.com', 'responsive-fse' ) . '<br></a>123-456-7890</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">' . __( '123 Main Street<br>Cambridge, MA, 02139', 'responsive-fse' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:social-links {"align":"center","className":"is-style-default"} -->
    <ul class="wp-block-social-links aligncenter items-justified-center is-style-default"><!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /-->
    
    <!-- wp:social-link {"url":"https://www.facebook.com/WordPress/","service":"facebook"} /-->
    
    <!-- wp:social-link {"url":"https://twitter.com/WordPress","service":"twitter"} /-->
    
    <!-- wp:social-link {"service":"instagram"} /-->
    
    <!-- wp:social-link {"service":"linkedin"} /-->
    
    <!-- wp:social-link {"service":"youtube"} /-->
    
    <!-- wp:social-link {"url":"https://www.youtube.com/wordpress","service":"youtube"} /--></ul>
    <!-- /wp:social-links --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->',
);
