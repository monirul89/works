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
 * @subpackage Radixetcltd
 * @since 1.0
 * @version 1.0
 */
get_header();
?>

<div class="wrap">
    <?php if (is_home() && !is_front_page()) : ?>
        <header class="page-header">
            <h1 class="page-title"><?php single_post_title(); ?></h1>
        </header>
    <?php else : ?>
        <header class="page-header">
            <h2 class="page-title"><?php _e('Posts', 'radixetcltd'); ?></h2>
        </header>
    <?php endif; ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="container">
                <?php
                if (have_posts()) :

                    /* Start the Loop */
                    while (have_posts()) :
                        the_post();
                        get_template_part('template-parts/post/content', get_post_format());

                    endwhile;

                    the_posts_pagination(
                            array(
                                'prev_text' => radixetcltd_get_svg(array('icon' => 'arrow-left')) . '<span class="screen-reader-text">' . __('Previous page', 'radixetcltd') . '</span>',
                                'next_text' => '<span class="screen-reader-text">' . __('Next page', 'radixetcltd') . '</span>' . radixetcltd_get_svg(array('icon' => 'arrow-right')),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'radixetcltd') . ' </span>',
                            )
                    );

                else :

                    get_template_part('template-parts/post/content', 'none');

                endif;
                ?>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
    <?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php
get_footer();
