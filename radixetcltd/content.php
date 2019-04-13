<?php
/**
 * Template used to display post content.
 *
 * @package radixetcltd
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	/**
	 * Functions hooked in to radixetcltd_loop_post action.
	 *
	 * @hooked radixetcltd_post_header          - 10
	 * @hooked radixetcltd_post_content         - 30
	 */
	do_action( 'radixetcltd_loop_post' );
	?>

</article><!-- #post-## -->
