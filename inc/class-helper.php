<?php
/**
 * Helper File
 *
 * @package responsive-fse
 * @since 1.2.0
 */

/**
 * Helper Class
 */
class Helper {

	/**
	 * List of tags and their attributes.
	 *
	 * @return array
	 */
	public static function get_allowed_tags() {
		return array(
			'a'       => array(
				'href'  => array(),
				'title' => array(),
				'class' => array(),
				'rel'   => array(),
				'id'    => array(),
				'style' => array(),
			),
			'q'       => array(
				'cite'  => array(),
				'class' => array(),
				'id'    => array(),
			),
			'img'     => array(
				'src'    => array(),
				'alt'    => array(),
				'height' => array(),
				'width'  => array(),
				'class'  => array(),
				'id'     => array(),
				'style'  => array(),
			),
			'span'    => array(
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
			'dfn'     => array(
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
			'time'    => array(
				'datetime' => array(),
				'class'    => array(),
				'id'       => array(),
				'style'    => array(),
			),
			'cite'    => array(
				'title' => array(),
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
			'hr'      => array(
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
			'b'       => array(
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
			'p'       => array(
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
			'i'       => array(
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
			'u'       => array(
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
			's'       => array(
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
			'br'      => array(),
			'em'      => array(
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
			'code'    => array(
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
			'mark'    => array(
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
			'small'   => array(
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
			'abbr'    => array(
				'title' => array(),
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
			'strong'  => array(
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
			'del'     => array(
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
			'ins'     => array(
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
			'sub'     => array(
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
			'sup'     => array(
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
			'div'     => array(
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
			'strike'  => array(
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
			'acronym' => array(),
			'h1'      => array(
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
			'h2'      => array(
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
			'h3'      => array(
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
			'h4'      => array(
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
			'h5'      => array(
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
			'h6'      => array(
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
			'button'  => array(
				'class' => array(),
				'id'    => array(),
				'style' => array(),
			),
		);
	}

	/**
	 * Allows the html tags to be used as it is using wp_kses function.
	 *
	 * @param string $content Keeps the content wrapped or not wrapped in html tags.
	 */
	public static function strip_tags_keeping_allowed_tags( $content ) {
		return wp_kses( $content, self::get_allowed_tags() );
	}

}


