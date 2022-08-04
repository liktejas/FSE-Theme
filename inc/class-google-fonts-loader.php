<?php
/**
 * Google Fonts Support
 *
 * @package TailwindFSE
 * @license https://opensource.org/licenses/MIT
 */

if ( ! class_exists( 'Google_Fonts_Loader' ) ) {
	/**
	 * Google Fonts Support
	 */
	class Google_Fonts_Loader {

		/**
		 * Base URL of google fonts.
		 */

		const FONT_BASE_URL = 'https://fonts.googleapis.com/css2?family=';
		/**
		 * Display query of google fonts.
		 */
		const FONT_BASE_URL_QUERY = '&display=swap';

		/**
		 * Slug and URL of fonts
		 *
		 * @var $fonts Contains font slug and url
		 */
		protected $fonts = array(
			array(
				'slug' => 'tailwindfse_roboto',
				'url'  => 'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900',
			),
			array(
				'slug' => 'tailwindfse_monteserrat',
				'url'  => 'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
			),
			array(
				'slug' => 'tailwindfse_open_sans',
				'url'  => 'Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800',
			),
			array(
				'slug' => 'tailwindfse_lato',
				'url'  => 'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900',
			),
			array(
				'slug' => 'tailwindfse_oswald',
				'url'  => 'Oswald:wght@200;300;400;500;600;700',
			),
			array(
				'slug' => 'tailwindfse_source_sans_pro',
				'url'  => 'Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900',
			),
			array(
				'slug' => 'tailwindfse_raleway',
				'url'  => 'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
			),
			array(
				'slug' => 'tailwindfse_pt_sans',
				'url'  => 'PT+Sans:ital,wght@0,400;0,700;1,400;1,700',
			),
			array(
				'slug' => 'tailwindfse_merriweather',
				'url'  => 'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900',
			),
			array(
				'slug' => 'tailwindfse_noto_sans',
				'url'  => 'Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
			),
		);

		/**
		 * Load google fonts.
		 */
		public function tailwindfse_load_fonts() {
			add_action(
				'wp_head',
				function() {
					foreach ( $this->fonts as $font ) {
						wp_enqueue_style( $font['slug'], self::FONT_BASE_URL . $font['url'] . self::FONT_BASE_URL_QUERY, array(), THEME_VERSION );
					}
				}
			);
		}

	}
}

$fonts = new Google_Fonts_Loader();
$fonts->tailwindfse_load_fonts();
