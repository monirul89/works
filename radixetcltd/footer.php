<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package radixetcltd
 */
?>

</div><!-- .col-full -->
</div><!-- #content -->

<?php do_action('radixetcltd_before_footer'); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="col-full">

        <?php
        /**
         * Functions hooked in to radixetcltd_footer action
         *
         * @hooked radixetcltd_footer_widgets - 10
         * @hooked radixetcltd_credit         - 20
         */
        do_action('radixetcltd_footer');
        ?>

    </div><!-- .col-full -->
</footer><!-- #colophon -->

<?php do_action('radixetcltd_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
