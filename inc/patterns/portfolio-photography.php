<?php
/**
 * Portfolio Photography
 *
 * @since Responsive FSE 1.0
 * @package Responsive FSE
 */

return array(
	'title'      => __( 'Portfolio Photography', 'responsive-fse' ),
	'categories' => array( 'responsive_fse_theme' ),
	'keywords'   => array( 'Portfolio Photography', 'Portfolio', 'Photography' ),
	'content'    => '<!-- wp:cover {"overlayColor":"black","minHeight":430,"minHeightUnit":"px"} -->
    <div class="wp-block-cover" style="min-height:430px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"style":{"typography":{"fontSize":"50px"}}} -->
    <h2 style="font-size:50px">' . __( 'Portfolio', 'responsive-fse' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"id":1971,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
    <figure class="wp-block-image size-full" style="border-radius:8px"><img src="' . esc_url( get_theme_file_uri( 'assets/images/portfolio.png' ) ) . '" alt="portfolio" class="wp-image-1971"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"id":1972,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
    <figure class="wp-block-image size-full" style="border-radius:8px"><img src="' . esc_url( get_theme_file_uri( 'assets/images/portfolio1.png' ) ) . '" alt="portfolio1" class="wp-image-1972"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"id":1973,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
    <figure class="wp-block-image size-full" style="border-radius:8px"><img src="' . esc_url( get_theme_file_uri( 'assets/images/portfolio2.png' ) ) . '" alt="portfolio2" class="wp-image-1973"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"id":1974,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
    <figure class="wp-block-image size-full" style="border-radius:8px"><img src="' . esc_url( get_theme_file_uri( 'assets/images/portfolio3.png' ) ) . '" alt="portfolio3" class="wp-image-1974"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:paragraph -->
    <p><a href="#">' . __( 'Browse All', 'responsive-fse' ) . '</a></p>
    <!-- /wp:paragraph --></div></div>
    <!-- /wp:cover -->',
);
