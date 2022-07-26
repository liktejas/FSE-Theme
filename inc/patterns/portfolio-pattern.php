<?php
/**
 * Portfolio Pattern
 *
 * @since TailwindFSE 1.0
 * @package TailwindFSE
 */

return array(
	'title'      => __( 'Portfolio', 'tailwindfse' ),
	'categories' => array( 'responsive_fse_theme' ),
	'keywords'   => array( 'portfolio' ),
	'content'    => '<!-- wp:cover {"overlayColor":"white","style":{"spacing":{"padding":{"top":"70px","bottom":"70px","right":"0px","left":"0px"}}}} -->
	<div class="wp-block-cover has-white-background-color has-background-dim"
		style="padding-top:70px;padding-right:0px;padding-bottom:70px;padding-left:0px">
		<div class="wp-block-cover__inner-container">
			<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#f9636b"},"typography":{"lineHeight":"1.6"}},"fontSize":"normal"} -->
			<p class="has-text-align-center has-text-color has-normal-font-size" style="color:#f9636b;line-height:1.6">
				Portfolio</p>
			<!-- /wp:paragraph -->
	
			<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"50px","fontWeight":"600","lineHeight":"1"}},"textColor":"dark"} -->
			<h2 class="has-text-align-center has-dark-color has-text-color"
				style="font-size:50px;font-weight:600;line-height:1">Latest Work</h2>
			<!-- /wp:heading -->
	
			<!-- wp:spacer {"height":20} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
	
			<!-- wp:gallery {"ids":[100,101,102,103,105,106],"linkTo":"file"} -->
			<figure class="wp-block-gallery columns-3 is-cropped">
				<ul class="blocks-gallery-grid">
					<li class="blocks-gallery-item">
						<figure><a href="' . esc_url( get_theme_file_uri( 'images/portfolio1.jpg' ) ) . '"><img
									src="' . esc_url( get_theme_file_uri( 'images/portfolio1.jpg' ) ) . '" alt=""
									data-id="100"
									data-full-url="' . esc_url( get_theme_file_uri( 'images/portfolio1.jpg' ) ) . '"
									data-link="http://one.wordpress.test/sample-page/portfolio1/"
									class="wp-image-100" /></a></figure>
					</li>
					<li class="blocks-gallery-item">
						<figure><a href="' . esc_url( get_theme_file_uri( 'images/portfolio2.jpg' ) ) . '"><img
									src="' . esc_url( get_theme_file_uri( 'images/portfolio2.jpg' ) ) . '" alt=""
									data-id="101"
									data-full-url="' . esc_url( get_theme_file_uri( 'images/portfolio2.jpg' ) ) . '"
									data-link="http://one.wordpress.test/sample-page/portfolio2/"
									class="wp-image-101" /></a></figure>
					</li>
					<li class="blocks-gallery-item">
						<figure><a href="' . esc_url( get_theme_file_uri( 'images/portfolio3.jpg' ) ) . '"><img
									src="' . esc_url( get_theme_file_uri( 'images/portfolio3.jpg' ) ) . '" alt=""
									data-id="102"
									data-full-url="' . esc_url( get_theme_file_uri( 'images/portfolio3.jpg' ) ) . '"
									data-link="http://one.wordpress.test/sample-page/portfolio3/"
									class="wp-image-102" /></a></figure>
					</li>
					<li class="blocks-gallery-item">
						<figure><a href="' . esc_url( get_theme_file_uri( 'images/portfolio4.jpg' ) ) . '"><img
									src="' . esc_url( get_theme_file_uri( 'images/portfolio4.jpg' ) ) . '" alt=""
									data-id="103"
									data-full-url="' . esc_url( get_theme_file_uri( 'images/portfolio4.jpg' ) ) . '"
									data-link="http://one.wordpress.test/sample-page/portfolio4/"
									class="wp-image-103" /></a></figure>
					</li>
					<li class="blocks-gallery-item">
						<figure><a href="' . esc_url( get_theme_file_uri( 'images/portfolio5.jpg' ) ) . '"><img
									src="' . esc_url( get_theme_file_uri( 'images/portfolio5.jpg' ) ) . '" alt=""
									data-id="105"
									data-full-url="' . esc_url( get_theme_file_uri( 'images/portfolio5.jpg' ) ) . '"
									data-link="http://one.wordpress.test/sample-page/portfolio5/"
									class="wp-image-105" /></a></figure>
					</li>
					<li class="blocks-gallery-item">
						<figure><a href="' . esc_url( get_theme_file_uri( 'images/portfolio6.jpg' ) ) . '"><img
									src="' . esc_url( get_theme_file_uri( 'images/portfolio6.jpg' ) ) . '" alt=""
									data-id="106"
									data-full-url="' . esc_url( get_theme_file_uri( 'images/portfolio6.jpg' ) ) . '"
									data-link="http://one.wordpress.test/sample-page/portfolio6/"
									class="wp-image-106" /></a></figure>
					</li>
				</ul>
			</figure>
			<!-- /wp:gallery -->
		</div>
	</div>
	<!-- /wp:cover -->',
);
