<?php
/**
 * Template used to display post content on single pages.
 *
 * @package radixetcltd
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	do_action( 'radixetcltd_single_post_top' );

	/**
	 * Functions hooked into radixetcltd_single_post add_action
	 *
	 * @hooked radixetcltd_post_header          - 10
	 * @hooked radixetcltd_post_content         - 30
	 */
	do_action( 'radixetcltd_single_post' );

	/**
	 * Functions hooked in to radixetcltd_single_post_bottom action
	 *
	 * @hooked radixetcltd_post_nav         - 10
	 * @hooked radixetcltd_display_comments - 20
	 */
	do_action( 'radixetcltd_single_post_bottom' );
	?>

</article><!-- #post-## -->
