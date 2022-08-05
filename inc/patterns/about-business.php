<?php
/**
 * About Business
 *
 * @since TailwindFSE 1.0
 * @package TailwindFSE
 */

return array(
	'title'      => __( 'About Business', 'tailwindfse' ),
	'categories' => array( 'responsive_fse_theme' ),
	'keywords'   => array( 'About Business', 'Business' ),
	'content'    => '<!-- wp:cover {"overlayColor":"white","contentPosition":"center center","isDark":false} -->
    <div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-white-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:media-text {"mediaId":2055,"mediaLink":"' . esc_url( get_theme_file_uri( 'assets/images/service-abt.png' ) ) . '","mediaType":"image","mediaWidth":40,"mediaSizeSlug":"full"} -->
    <div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:40% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( 'assets/images/service-abt.png' ) ) . '" alt="about-us" class="wp-image-2055 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"align":"wide","style":{"typography":{"lineHeight":"1.1"},"color":{"text":"#166dd5"}},"fontSize":"large"} -->
    <h2 class="alignwide has-text-color has-large-font-size" id="we-re-a-studio-in-berlin-with-an-international-practice-in-architecture-urban-planning-and-interior-design-we-believe-in-sharing-knowledge-and-promoting-dialogue-to-increase-the-creative-potential-of-collaboration" style="color:#166dd5;line-height:1.1">About Us</h2>
    <!-- /wp:heading -->
    
    <!-- wp:heading {"style":{"color":{"text":"#071e57"}}} -->
    <h2 class="has-text-color" style="color:#071e57">Entrepreneur solutions</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"color":{"text":"#748494"},"typography":{"lineHeight":"1.8"}}} -->
    <p class="has-text-color" style="color:#748494;line-height:1.8">We are a boutique consulting firm owned and operated by MBA candidates at CU Boulder. Whether your business is a growing startup or an established firm, our customized solutions and contemporary skills deliver results.</p>
    <!-- /wp:paragraph --></div></div>
    <!-- /wp:media-text --></div></div>
    <!-- /wp:cover -->',
);
