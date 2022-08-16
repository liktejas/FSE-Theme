<?php
/**
 * Hero Lifestyle
 *
 * @since Responsive FSE 1.0
 * @package Responsive FSE
 */

return array(
	'title'      => __( 'Hero - Lifestyle', 'responsive-fse' ),
	'categories' => array( 'responsive_fse_theme' ),
	'keywords'   => array( 'hero', 'lifestyle', 'hero lifestyle' ),
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/images/home-banner.png' ) ) . '","id":1858,"dimRatio":0,"overlayColor":"white","contentPosition":"center center","isDark":false,"className":"is-style-default"} -->
    <div class="wp-block-cover is-light is-style-default"><span aria-hidden="true" class="wp-block-cover__background has-white-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1858" alt="" src="' . esc_url( get_theme_file_uri( 'assets/images/home-banner.png' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":null} -->
    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":""} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"30px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group" style="margin-bottom:30px"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"800","fontSize":"80px","lineHeight":"1"},"color":{"text":"#0c0c0c"}}} -->
    <h2 class="has-text-color" style="color:#0c0c0c;font-size:80px;font-style:normal;font-weight:800;line-height:1;text-transform:uppercase">' . __( 'Latest', 'responsive-fse' ) . '</h2>
    <!-- /wp:heading --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"30px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group" style="margin-bottom:30px"><!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"uppercase","fontSize":"80px","lineHeight":"1","fontStyle":"normal","fontWeight":"500"},"color":{"text":"#0c0c0c"}}} -->
    <h2 class="has-text-align-left has-text-color" style="color:#0c0c0c;font-size:80px;font-style:normal;font-weight:500;line-height:1;text-transform:uppercase">' . __( 'trends', 'responsive-fse' ) . '</h2>
    <!-- /wp:heading --></div>
    <!-- /wp:group -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px"},"color":{"background":"#0c0c0c"}}} -->
    <div class="wp-block-button"><a class="wp-block-button__link has-background" style="border-radius:0px;background-color:#0c0c0c">' . __( 'READ MORE', 'responsive-fse' ) . '</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"top","width":"40%","layout":{"inherit":true}} -->
    <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40%"><!-- wp:group {"style":{"border":{"style":"solid","width":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group" style="border-style:solid;border-width:10px"><!-- wp:image {"align":"center","id":1871,"width":450,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0px"}},"className":"is-style-default"} -->
    <figure class="wp-block-image aligncenter size-full is-resized is-style-default" style="border-radius:0px"><img src="' . esc_url( get_theme_file_uri( 'assets/images/lifestyle-banner1.png' ) ) . '" alt="" class="wp-image-1871" width="450"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div></div>
    <!-- /wp:cover -->',
);
