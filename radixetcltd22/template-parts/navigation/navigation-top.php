<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Radixetcltd
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'radixetcltd' ); ?>">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php
		echo radixetcltd_get_svg( array( 'icon' => 'bars' ) );
		echo radixetcltd_get_svg( array( 'icon' => 'close' ) );
		_e( 'Menu', 'radixetcltd' );
		?>
	</button>

	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'top',
			'menu_id'        => 'top-menu',
		)
	);
	?>

	<?php if ( ( radixetcltd_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo radixetcltd_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'radixetcltd' ); ?></span></a>
	<?php endif; ?>
</nav><!-- #site-navigation -->
