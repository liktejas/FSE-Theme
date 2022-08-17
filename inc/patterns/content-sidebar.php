<?php
/**
 * Content Sidebar
 *
 * @since Responsive FSE 1.0
 * @package Responsive FSE
 */

return array(
	'title'      => __( 'Content Sidebar', 'responsive-fse' ),
	'categories' => array( 'responsive_fse_theme' ),
	'inserter'   => false,
	'content'    => '<!-- wp:group {"style":{"spacing":{"margin":{"top":"40px","bottom":"40px"}}},"className":"sidebar is-style-align-full","layout":{"inherit":false}} -->
	<div class="wp-block-group sidebar is-style-align-full" style="margin-top:40px;margin-bottom:40px">
		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"20px"}}},"backgroundColor":"white"} -->
		<div class="wp-block-group has-white-background-color has-background" style="margin-bottom:20px">
			<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search here ...","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"backgroundColor":"primary"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"20px"}}},"backgroundColor":"white"} -->
		<div class="wp-block-columns has-white-background-color has-background" style="margin-bottom:20px">
			<!-- wp:column {"width":"100%"} -->
			<div class="wp-block-column" style="flex-basis:100%">
				<!-- wp:heading {"fontSize":"normal"} -->
				<h2 class="has-normal-font-size">RECENT POSTS</h2>
				<!-- /wp:heading -->

				<!-- wp:latest-posts {"className":"latest_posts"} /-->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"20px"}}},"backgroundColor":"white"} -->
		<div class="wp-block-columns has-white-background-color has-background" style="margin-bottom:20px">
			<!-- wp:column {"width":"100%"} -->
			<div class="wp-block-column" style="flex-basis:100%">
				<!-- wp:heading {"fontSize":"normal"} -->
				<h2 class="has-normal-font-size">RECENT COMMENTS</h2>
				<!-- /wp:heading -->

				<!-- wp:latest-comments {"displayAvatar":false,"displayExcerpt":false} /-->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"20px"}}},"backgroundColor":"white"} -->
		<div class="wp-block-columns has-white-background-color has-background" style="margin-bottom:20px">
			<!-- wp:column {"width":"100%"} -->
			<div class="wp-block-column" style="flex-basis:100%">
				<!-- wp:heading {"fontSize":"normal"} -->
				<h2 class="has-normal-font-size">ARCHIVES</h2>
				<!-- /wp:heading -->

				<!-- wp:archives /-->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"backgroundColor":"white"} -->
		<div class="wp-block-columns has-white-background-color has-background">
			<!-- wp:column {"width":"100%"} -->
			<div class="wp-block-column" style="flex-basis:100%">
				<!-- wp:heading {"fontSize":"normal"} -->
				<h2 class="has-normal-font-size">CATEGORIES</h2>
				<!-- /wp:heading -->

				<!-- wp:categories /-->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->',
);
