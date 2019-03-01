<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
        <?php if (is_home() && !is_front_page()) : ?>
            <header class="page-header">
                <h1 class="page-title"><?php single_post_title(); ?></h1>
            </header>
        <?php else : ?>
            <header class="page-header">
                <h2 class="page-title"><?php _e('Posts', 'theshoptd'); ?></h2>
            </header>
        <?php endif; ?>

        <?php
        if (have_posts()) :

            /* Start the Loop */
            while (have_posts()) :
                the_post();

                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part('template-parts/post/content', get_post_format());

            endwhile;

            the_posts_pagination(
                    array(
                        'prev_text' => theshoptd_get_svg(array('icon' => 'arrow-left')) . '<span class="screen-reader-text">' . __('Previous page', 'theshoptd') . '</span>',
                        'next_text' => '<span class="screen-reader-text">' . __('Next page', 'theshoptd') . '</span>' . theshoptd_get_svg(array('icon' => 'arrow-right')),
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'theshoptd') . ' </span>',
                    )
            );

        else :

            get_template_part('template-parts/post/content', 'none');

        endif;
        ?>
    </div><!-- #primary -->
    <?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php
get_footer();
