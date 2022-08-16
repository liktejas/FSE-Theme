<?php
/**
 * TailwindFSE: Filters
 *
 * @since TailwindFSE 1.0
 * @author         CyberChimps
 * @copyright      Copyright (c) 2021, CyberChimps
 * @license        license.txt
 * @package TailwindFSE
 */

/**
 * Show '(No title)' if a post has no title.
 *
 * @since 1.0.0
 *
 * @return string
 */
add_filter(
	'the_title',
	function( $title ) {
		if ( ! is_admin() && empty( $title ) ) {
			$title = _x( '(No title)', 'Used if post or pages has no title', 'tailwindfse' );
		}

		return $title;
	}
);

/**
 * Replace the default [...] excerpt more with an elipsis.
 *
 * @since 1.0.0
 *
 * @return string
*/
add_filter(
	'excerpt_more',
	function( $more ) {
		return '&hellip;';
	}
);
