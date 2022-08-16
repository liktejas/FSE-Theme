<?php
/**
 * About Doctor
 *
 * @since Responsive FSE 1.0
 * @package Responsive FSE
 */

return array(
	'title'      => __( 'About Doctor', 'responsive-fse' ),
	'categories' => array( 'responsive_fse_theme' ),
	'keywords'   => array( 'About Doctor', 'Doctor' ),
	'content'    => '<!-- wp:cover {"overlayColor":"white","isDark":false} -->
    <div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-white-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:media-text {"mediaId":2093,"mediaLink":"' . esc_url( get_theme_file_uri( 'assets/images/doctor-about-1-2.jpg' ) ) . '","mediaType":"image","mediaWidth":40} -->
    <div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:40% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( 'assets/images/doctor-about-1-2.jpg' ) ) . '" alt="doctor-image" class="wp-image-2093 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:columns {"verticalAlignment":null} -->
    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"typography":{"fontSize":"40px","lineHeight":"1.2","fontStyle":"normal","fontWeight":"600"},"color":{"text":"#2d6767"}}} -->
    <h2 class="has-text-color" style="color:#2d6767;font-size:40px;font-style:normal;font-weight:600;line-height:1.2">' . __( 'About Me', 'responsive-fse' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:image {"align":"left","id":2201,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
    <figure class="wp-block-image alignleft size-large is-style-default"><img src="' . esc_url( get_theme_file_uri( 'assets/images/border1.png' ) ) . '" alt="doctor-image" class="wp-image-2201"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:spacer {"height":"9px"} -->
    <div style="height:9px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.4"}},"fontSize":"normal"} -->
    <p class="has-normal-font-size" style="line-height:1.4">' . __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since.', 'responsive-fse' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:group {"style":{"spacing":{"margin":{"top":"25px","bottom":"25px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group" style="margin-top:25px;margin-bottom:25px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"24px","lineHeight":"1"},"color":{"text":"#2d6767"}}} -->
    <p class="has-text-color" style="color:#2d6767;font-size:24px;line-height:1">' . __( 'Education', 'responsive-fse' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->
    
    <!-- wp:paragraph -->
    <p>' . __( 'Medical School - University of Dulton Health Science Center.', 'responsive-fse' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph -->
    <p>' . __( 'Residency in Family Medicine - University of Dulton Health Science Center', 'responsive-fse' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:group {"style":{"spacing":{"margin":{"top":"25px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group" style="margin-top:25px"><!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"text":"#2d6767"}},"className":"is-style-outline"} -->
    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color" style="color:#2d6767">' . __( 'READ MORE', 'responsive-fse' ) . '</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div></div>
    <!-- /wp:media-text --></div></div>
    <!-- /wp:cover -->',
);
