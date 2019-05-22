<?php
/**
 * Bitss back compat functionality
 *
 * Prevents Bitss from running on WordPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.7.
 *
 * @package WordPress
 * @subpackage Bitss
 * @since Bitss 1.0
 */

/**
 * Prevent switching to Bitss on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Bitss 1.0
 */
function bitss_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'bitss_upgrade_notice' );
}
add_action( 'after_switch_theme', 'bitss_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Bitss on WordPress versions prior to 4.7.
 *
 * @since Bitss 1.0
 *
 * @global string $wp_version WordPress version.
 */
function bitss_upgrade_notice() {
	$message = sprintf( __( 'Bitss requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'bitss' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
 *
 * @since Bitss 1.0
 *
 * @global string $wp_version WordPress version.
 */
function bitss_customize() {
	wp_die( sprintf( __( 'Bitss requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'bitss' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'bitss_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
 *
 * @since Bitss 1.0
 *
 * @global string $wp_version WordPress version.
 */
function bitss_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Bitss requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'bitss' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'bitss_preview' );
