<?php
/**
 * Hero Food Blog
 *
 * @since TailwindFSE 1.0
 * @package TailwindFSE
 */

return array(
	'title'      => __( 'Hero Food Blog', 'tailwindfse' ),
	'categories' => array( 'responsive_fse_theme' ),
	'keywords'   => array( 'Hero Food Blog', 'Hero', 'Food', 'Blog', 'Food Blog' ),
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/images/home-banner.jpg' ) ) . '","id":1925,"dimRatio":0} -->
    <div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1925" alt="" src="' . esc_url( get_theme_file_uri( 'assets/images/home-banner.jpg' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical","justifyContent":"center"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group" style="margin-bottom:10px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"50px"}}} -->
    <h2 class="has-text-align-center" style="font-size:50px">' . __( 'Bring spice to your life', 'tailwindfse' ) . '</h2>
    <!-- /wp:heading --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"20px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group" style="margin-bottom:20px"><!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">' . __( 'The food reflects emotion! Here are some classic recipes from all over the world.', 'tailwindfse' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group"><!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"align":"center","style":{"border":{"radius":"4px"}},"className":"is-style-outline","fontSize":"normal"} -->
    <div class="wp-block-button aligncenter has-custom-font-size is-style-outline has-normal-font-size"><a class="wp-block-button__link" style="border-radius:4px">' . __( 'Read More', 'tailwindfse' ) . '</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div></div>
    <!-- /wp:cover -->',
);
