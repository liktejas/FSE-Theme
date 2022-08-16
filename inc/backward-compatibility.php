<?php
/**
 * Responsive FSE: Backward compatibility
 *
 * @package Responsive FSE
 * @since Responsive FSE 1.2.0
 * @author         CyberChimps
 * @copyright      Copyright (c) 2021, CyberChimps
 * @license        license.txt
 */

/**
 * Prevent switching to the theme on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since 1.2.0
 * @return void
 */
function responsive_fse_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] ); // phpcs:ignore
	add_action( 'admin_notices', 'responsive_fse_upgrade_notice' );
}
add_action( 'after_switch_theme', 'responsive_fse_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to the theme.
 *
 * @since 1.2.0
 *
 * @global string $wp_version WordPress version.
 * @return void
 */
function responsive_fse_upgrade_notice() {
	/* translators: %1$s: WordPress version. %2$s PHP version.*/
	$message = sprintf( esc_html__( 'This theme requires at least WordPress version 6.0 and PHP version 7.4. You are running WordPress version %1$s and PHP version %2$s. Please upgrade and try again.', 'responsive-fse' ), $GLOBALS['wp_version'], PHP_VERSION );
	printf( '<div class="error"><p>%s</p></div>', $message ); // phpcs:ignore WordPress.Security.EscapeOutput
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 5.5.
 *
 * @since 1.2.0
 *
 * @global string $wp_version WordPress version.
 * @return void
 */
function responsive_fse_customize() {
	wp_die(
		sprintf(
			/* translators: %1$s: WordPress version. %2$s PHP version.*/
			esc_html__( 'This theme requires at least WordPress version 6.0 and PHP version 7.4. You are running WordPress version %1$s and PHP version %2$s. Please upgrade and try again.', 'responsive-fse' ),
			esc_html( $GLOBALS['wp_version'] ),
			esc_html( PHP_VERSION )
		),
		'',
		array( 'back_link' => true )
	);
}
add_action( 'load-customize.php', 'responsive_fse_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 5.5.
 *
 * @since 1.2.0
 *
 * @global string $wp_version WordPress version.
 * @return void
 */
function responsive_fse_preview() {
	if ( isset( $_GET['preview'] ) ) { // phpcs:ignore
		wp_die(
			sprintf(
				/* translators: %1$s: WordPress version. %2$s PHP version.*/
				esc_html__( 'This theme requires at least WordPress version 6.0 and PHP version 7.4. You are running WordPress version %1$s and PHP version %2$s. Please upgrade and try again.', 'responsive-fse' ),
				esc_html( $GLOBALS['wp_version'] ),
				esc_html( PHP_VERSION )
			)
		);
	}
}
add_action( 'template_redirect', 'responsive_fse_preview' );
