<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package radixetcltd
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    /**
     * Functions hooked in to radixetcltd_page add_action
     *
     * @hooked radixetcltd_page_header          - 10
     * @hooked radixetcltd_page_content         - 20
     */
    do_action('radixetcltd_page');
    ?>
</article><!-- #post-## -->
