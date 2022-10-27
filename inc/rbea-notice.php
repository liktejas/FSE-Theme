<?php
/**
 * Notice for Responsive Gutenberg Blocks Library Plugin
 *
 * @package responsive-fse
 * @since 1.2.0
 */

if ( ! class_exists( 'Responsive_Block_Editor_Addons' ) ) {

	require get_template_directory() . '/inc/class-helper.php';
	/**
	 * Displays notice if Responsive Gutenberg Blocks Library plugin is not installed
	 *
	 * @since responsive-fse 1.2.0
	 */
	function get_rbea_notice() {

		global $pagenow;
		$file_path         = 'responsive-block-editor-addons/responsive-block-editor-addons.php';
		$installed_plugins = get_plugins();
		$show_notice_on    = array( 'themes.php', 'index.php', 'plugins.php' );

		if ( in_array( $pagenow, $show_notice_on, true ) ) {

			if ( isset( $installed_plugins[ $file_path ] ) ) {
				if ( ! current_user_can( 'activate_plugins' ) ) {
					return;
				}
				$rbea_activation_url = wp_nonce_url( 'plugins.php?action=activate&amp;plugin=' . $file_path . '&amp;plugin_status=all&amp;paged=1&amp;s', 'activate-plugin_' . $file_path );

				$message = sprintf(
					/* translators: Name of plugin */
					esc_html__( 'Please Activate %1$s.', 'responsive-fse' ),
					'<strong>' . esc_html__( 'Responsive Gutenberg Blocks Library', 'responsive-fse' ) . '</strong>'
				);

				$message .= '<p>' . sprintf( '<a href="%s" class="button-primary">%s</a>', $rbea_activation_url, __( 'Activate Now', 'responsive-fse' ) ) . '</p>';

				printf(
					'<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>',
					wp_kses(
						$message,
						Helper::get_allowed_tags()
					)
				);
			} else {
				if ( ! current_user_can( 'install_plugins' ) ) {
					return;
				}

				$rbea_install_url = wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=responsive-block-editor-addons' ), 'install-plugin_responsive-block-editor-addons' );
				$message          = sprintf(
					/* translators: Name of plugin */
					esc_html__( 'In order to experience dynamic blocks, please install the %1$s.', 'responsive-fse' ),
					'<strong>' . esc_html__( 'Responsive Gutenberg Blocks Library', 'responsive-fse' ) . '</strong>'
				);

				$message .= '<p>' . sprintf( '<a href="%s" class="button-primary">%s</a>', $rbea_install_url, __( 'Install Now', 'responsive-fse' ) ) . '</p>';

				printf(
					'<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>',
					wp_kses(
						$message,
						Helper::get_allowed_tags()
					)
				);
			}
		}
	}
} else {
	return false;
}

add_action( 'admin_notices', 'get_rbea_notice' );
