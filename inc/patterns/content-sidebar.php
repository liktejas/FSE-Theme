<?php
/**
 * Content Sidebar
 *
 * @since TailwindFSE 1.0
 * @package TailwindFSE
 */

return array(
	'title'      => __( 'Content Sidebar', 'tailwindfse' ),
	'categories' => array( 'responsive_fse_theme' ),
	'content'    => '<!-- wp:group {"className":"sidebar is-style-align-full"} -->
					<div class="wp-block-group sidebar is-style-align-full">
					<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search here ...","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /-->

					<!-- wp:columns -->
					<div class="wp-block-columns">
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
					
					<!-- wp:columns -->
					<div class="wp-block-columns">
						<!-- wp:column {"width":"100%"} -->
						<div class="wp-block-column" style="flex-basis:100%">
							<!-- wp:heading {"fontSize":"normal"} -->
							<h2 class="has-normal-font-size">RECENT COMMENTS</h2>
							<!-- /wp:heading -->
					
							<!-- wp:latest-comments {"displayAvatar":false,"displayDate":false,"displayExcerpt":false} /-->
						</div>
						<!-- /wp:column -->
					</div>
					<!-- /wp:columns -->
					
					<!-- wp:columns -->
					<div class="wp-block-columns">
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
					
					<!-- wp:columns -->
					<div class="wp-block-columns">
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
