<?php
/**
 * Portfolio back compat functionality
 *
 * Prevents Portfolio from running on WordPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.7.
 *
 * @package WordPress
 * @subpackage Portfolio
 * @since Portfolio 1.0.0
 */

/**
 * Prevent switching to Portfolio on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Portfolio 1.0.0
 */
function wp5default_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'wp5default_upgrade_notice' );
}
add_action( 'after_switch_theme', 'wp5default_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Portfolio on WordPress versions prior to 4.7.
 *
 * @since Portfolio 1.0.0
 *
 * @global string $wp_version WordPress version.
 */
function wp5default_upgrade_notice() {
	$message = sprintf( __( 'Portfolio requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'wp5default' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
 *
 * @since Portfolio 1.0.0
 *
 * @global string $wp_version WordPress version.
 */
function wp5default_customize() {
	wp_die(
		sprintf(
			__( 'Portfolio requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'wp5default' ),
			$GLOBALS['wp_version']
		),
		'',
		array(
			'back_link' => true,
		)
	);
}
add_action( 'load-customize.php', 'wp5default_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
 *
 * @since Portfolio 1.0.0
 *
 * @global string $wp_version WordPress version.
 */
function wp5default_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Portfolio requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'wp5default' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'wp5default_preview' );
