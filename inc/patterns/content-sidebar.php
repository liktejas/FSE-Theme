<?php
/**
 * Content Sidebar
 *
 * @since TailwindFSE 1.0
 * @package TailwindFSE
 */

return array(
	'title'      => __( 'Sidebar', 'tailwindfse' ),
	'categories' => array( 'responsive_fse_theme' ),
	'content'    => '<!-- wp:group {"className":"sidebar is-style-align-full"} -->
					<div class="wp-block-group sidebar is-style-align-full">
						<!-- wp:template-part {"slug":"sidebar","theme":"tailwindfse"} /-->
					</div>
					<!-- /wp:group -->',
);
