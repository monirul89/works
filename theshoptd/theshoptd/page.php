<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage The_Shoptd
 * @since 1.0
 * @version 1.0
 */
get_header();
?>

<!-- banner-2 -->
<div class="page-head_agile_info_w3l">

</div>
<!-- //banner-2 -->
<!-- page -->
<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
        <div class="container">
            <ul class="w3_short">
                <li>
                    <a href="index.html">Home</a>
                    <i>|</i>
                </li>
                <li>Faqs</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->
<!-- FAQ-help-page -->
<div class="faqs-w3l">
    <div class="container">
        <?php
        while (have_posts()) :
            the_post();

            get_template_part('template-parts/page/content', 'page');

            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
