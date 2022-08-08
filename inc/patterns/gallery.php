<?php
/**
 * Gallery
 *
 * @since TailwindFSE 1.0
 * @package TailwindFSE
 */

return array(
	'title'      => __( 'Gallery', 'tailwindfse' ),
	'categories' => array( 'responsive_fse_theme' ),
	'keywords'   => array( 'Gallery' ),
	'content'    => '<!-- wp:cover {"overlayColor":"white","isDark":false} -->
    <div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-white-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group" style="margin-top:20px;margin-bottom:20px"><!-- wp:heading {"textAlign":"center"} -->
    <h2 class="has-text-align-center">Gallery</h2>
    <!-- /wp:heading --></div>
    <!-- /wp:group -->
    
    <!-- wp:gallery {"linkTo":"none"} -->
    <figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"id":1838,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . esc_url( get_theme_file_uri( 'assets/images/blog10.jpg' ) ) . '" alt="blog10" class="wp-image-1838"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:image {"id":1837,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . esc_url( get_theme_file_uri( 'assets/images/blog9.jpg' ) ) . '" alt="blog9" class="wp-image-1837"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:image {"id":1836,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . esc_url( get_theme_file_uri( 'assets/images/blog8.jpg' ) ) . '" alt="blog8" class="wp-image-1836"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:image {"id":1835,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . esc_url( get_theme_file_uri( 'assets/images/blog6.jpg' ) ) . '" alt="blog6" class="wp-image-1835"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:image {"id":1834,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . esc_url( get_theme_file_uri( 'assets/images/blog4.jpg' ) ) . '" alt="blog4" class="wp-image-1834"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:image {"id":1833,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . esc_url( get_theme_file_uri( 'assets/images/blog3.jpg' ) ) . '" alt="blog3" class="wp-image-1833"/></figure>
    <!-- /wp:image --></figure>
    <!-- /wp:gallery --></div></div>
    <!-- /wp:cover -->',
);
