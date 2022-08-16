<?php
/**
 * Team Pattern
 *
 * @since TailwindFSE 1.0
 * @package TailwindFSE
 */

return array(
	'title'      => __( 'Team', 'tailwindfse' ),
	'categories' => array( 'responsive_fse_theme' ),
	'keywords'   => array( 'team' ),
	'content'    => '<!-- wp:cover {"overlayColor":"white","style":{"spacing":{"padding":{"top":"70px","bottom":"70px","right":"0px","left":"0px"}}}} -->
	<div class="wp-block-cover has-white-background-color has-background-dim"
		style="padding-top:70px;padding-right:0px;padding-bottom:70px;padding-left:0px">
		<div class="wp-block-cover__inner-container">
			<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#f9636b"},"typography":{"lineHeight":"1.6"}},"fontSize":"normal"} -->
			<p class="has-text-align-center has-text-color has-normal-font-size" style="color:#f9636b;line-height:1.6">' . __( 'Who
			we are', 'tailwindfse' ) . '</p>
			<!-- /wp:paragraph -->
	
			<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"50px","fontWeight":"600","lineHeight":"1"}},"textColor":"dark"} -->
			<h2 class="has-text-align-center has-dark-color has-text-color"
				style="font-size:50px;font-weight:600;line-height:1">' . __( 'Our Team', 'tailwindfse' ) . '</h2>
			<!-- /wp:heading -->
	
			<!-- wp:spacer {"height":50} -->
			<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
	
			<!-- wp:columns {"verticalAlignment":"top"} -->
			<div class="wp-block-columns are-vertically-aligned-top">
				<!-- wp:column {"verticalAlignment":"top"} -->
				<div class="wp-block-column is-vertically-aligned-top">
					<!-- wp:image {"align":"center","id":108,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
					<div class="wp-block-image is-style-rounded">
						<figure class="aligncenter size-full"><img
								src="' . esc_url( get_theme_file_uri( 'assets/images/team1.jpg' ) ) . '" alt=""
								class="wp-image-108" /></figure>
					</div>
					<!-- /wp:image -->
	
					<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"500","lineHeight":"1"},"color":{"text":"#333333"}},"fontSize":"normal"} -->
					<h2 class="has-text-align-center has-text-color has-normal-font-size"
						style="color:#333333;font-weight:500;line-height:1">' . __( 'JOHN DOE', 'tailwindfse' ) . '</h2>
					<!-- /wp:heading -->
	
					<!-- wp:spacer {"height":20} -->
					<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
	
					<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"500","lineHeight":"1"},"color":{"text":"#7a7a7a"}},"fontSize":"normal"} -->
					<h2 class="has-text-align-center has-text-color has-normal-font-size"
						style="color:#7a7a7a;font-weight:500;line-height:1">' . __( 'Web Developer', 'tailwindfse' ) . '</h2>
					<!-- /wp:heading -->
	
					<!-- wp:social-links {"customIconColor":"#73ac52","iconColorValue":"#73ac52","size":"has-normal-icon-size","align":"center","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
					<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color is-style-logos-only">
						<!-- wp:social-link {"url":"#","service":"facebook"} /-->
	
						<!-- wp:social-link {"url":"#","service":"twitter"} /-->
	
						<!-- wp:social-link {"url":"#","service":"mail"} /-->
					</ul>
					<!-- /wp:social-links -->
				</div>
				<!-- /wp:column -->
	
				<!-- wp:column {"verticalAlignment":"top"} -->
				<div class="wp-block-column is-vertically-aligned-top">
					<!-- wp:image {"align":"center","id":109,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
					<div class="wp-block-image is-style-rounded">
						<figure class="aligncenter size-full"><img
								src="' . esc_url( get_theme_file_uri( 'assets/images/team2.jpg' ) ) . '" alt=""
								class="wp-image-109" /></figure>
					</div>
					<!-- /wp:image -->
	
					<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"500","lineHeight":"1"},"color":{"text":"#333333"}},"fontSize":"normal"} -->
					<h2 class="has-text-align-center has-text-color has-normal-font-size"
						style="color:#333333;font-weight:500;line-height:1">' . __( 'JANE DOE', 'tailwindfse' ) . '</h2>
					<!-- /wp:heading -->
	
					<!-- wp:spacer {"height":20} -->
					<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
	
					<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"500","lineHeight":"1"},"color":{"text":"#7a7a7a"}},"fontSize":"normal"} -->
					<h2 class="has-text-align-center has-text-color has-normal-font-size"
						style="color:#7a7a7a;font-weight:500;line-height:1">' . __( 'Sr. Tester', 'tailwindfse' ) . '</h2>
					<!-- /wp:heading -->
	
					<!-- wp:social-links {"customIconColor":"#73ac52","iconColorValue":"#73ac52","size":"has-normal-icon-size","align":"center","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
					<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color is-style-logos-only">
						<!-- wp:social-link {"url":"#","service":"facebook"} /-->
	
						<!-- wp:social-link {"url":"#","service":"twitter"} /-->
	
						<!-- wp:social-link {"url":"#","service":"mail"} /-->
					</ul>
					<!-- /wp:social-links -->
				</div>
				<!-- /wp:column -->
	
				<!-- wp:column {"verticalAlignment":"top"} -->
				<div class="wp-block-column is-vertically-aligned-top">
					<!-- wp:image {"align":"center","id":110,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
					<div class="wp-block-image is-style-rounded">
						<figure class="aligncenter size-full"><img
								src="' . esc_url( get_theme_file_uri( 'assets/images/team3.jpg' ) ) . '" alt=""
								class="wp-image-110" /></figure>
					</div>
					<!-- /wp:image -->
	
					<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"500","lineHeight":"1"},"color":{"text":"#333333"}},"fontSize":"normal"} -->
					<h2 class="has-text-align-center has-text-color has-normal-font-size"
						style="color:#333333;font-weight:500;line-height:1">' . __( 'RICHARD SMITH', 'tailwindfse' ) . '</h2>
					<!-- /wp:heading -->
	
					<!-- wp:spacer {"height":20} -->
					<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
	
					<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"500","lineHeight":"1"},"color":{"text":"#7a7a7a"}},"fontSize":"normal"} -->
					<h2 class="has-text-align-center has-text-color has-normal-font-size"
						style="color:#7a7a7a;font-weight:500;line-height:1">' . __( 'Marketing Executive', 'tailwindfse' ) . '</h2>
					<!-- /wp:heading -->
	
					<!-- wp:social-links {"customIconColor":"#73ac52","iconColorValue":"#73ac52","size":"has-normal-icon-size","align":"center","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
					<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color is-style-logos-only">
						<!-- wp:social-link {"url":"#","service":"facebook"} /-->
	
						<!-- wp:social-link {"url":"#","service":"twitter"} /-->
	
						<!-- wp:social-link {"url":"#","service":"mail"} /-->
					</ul>
					<!-- /wp:social-links -->
				</div>
				<!-- /wp:column -->
	
				<!-- wp:column {"verticalAlignment":"top"} -->
				<div class="wp-block-column is-vertically-aligned-top">
					<!-- wp:image {"align":"center","id":111,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
					<div class="wp-block-image is-style-rounded">
						<figure class="aligncenter size-full"><img
								src="' . esc_url( get_theme_file_uri( 'assets/images/team4.jpg' ) ) . '" alt=""
								class="wp-image-111" /></figure>
					</div>
					<!-- /wp:image -->
	
					<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"500","lineHeight":"1"},"color":{"text":"#333333"}},"fontSize":"normal"} -->
					<h2 class="has-text-align-center has-text-color has-normal-font-size"
						style="color:#333333;font-weight:500;line-height:1">' . __( 'REAL JONES', 'tailwindfse' ) . '</h2>
					<!-- /wp:heading -->
	
					<!-- wp:spacer {"height":20} -->
					<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
	
					<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"500","lineHeight":"1"},"color":{"text":"#7a7a7a"}},"fontSize":"normal"} -->
					<h2 class="has-text-align-center has-text-color has-normal-font-size"
						style="color:#7a7a7a;font-weight:500;line-height:1">' . __( 'Team Leader', 'tailwindfse' ) . '</h2>
					<!-- /wp:heading -->
	
					<!-- wp:social-links {"customIconColor":"#73ac52","iconColorValue":"#73ac52","size":"has-normal-icon-size","align":"center","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
					<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color is-style-logos-only">
						<!-- wp:social-link {"url":"#","service":"facebook"} /-->
	
						<!-- wp:social-link {"url":"#","service":"twitter"} /-->
	
						<!-- wp:social-link {"url":"#","service":"mail"} /-->
					</ul>
					<!-- /wp:social-links -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
	</div>
	<!-- /wp:cover -->',
);


