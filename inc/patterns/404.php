<?php
/**
 * 404
 * Inserter: no
 *
 * @since TailwindFSE 1.0
 * @package TailwindFSE
 */

return array(
	'title'      => __( '404', 'tailwindfse' ),
	'categories' => array( 'responsive_fse_theme' ),
	'keywords'   => array( '404', 'Business' ),
	'inserter'   => false,
	'content'    => '<!-- wp:group {"style":{"spacing":{"margin":{"top":"50px","bottom":"50px"}}}} -->
    <div class="wp-block-group" style="margin-top:50px;margin-bottom:50px"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"huge"} -->
        <p class="has-text-align-center has-huge-font-size"><strong>' . __( '404 — Fancy meeting you here!', 'tailwindfse' ) . '</strong></p>
        <!-- /wp:paragraph -->
        
        <!-- wp:spacer {"height":"34px"} -->
        <div style="height:34px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
        
        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center">' . __( "Don't panic, we'll get through this together. Let's explore our options here.", 'tailwindfse' ) . '</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:spacer {"height":"10px"} -->
        <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
        
        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><strong>' . __( 'You can return ', 'tailwindfse' ) . '</strong><a href="/">← Home</a><strong>' . __( ' or search for the page you were looking for.', 'tailwindfse' ) . '</strong></p>
        <!-- /wp:paragraph -->
        
        <!-- wp:spacer {"height":"21px"} -->
        <div style="height:21px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
        
        <!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search here...","width":25,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"align":"center","backgroundColor":"primary"} /--></div>
        <!-- /wp:group -->',
);
