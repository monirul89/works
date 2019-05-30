<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Radixetcltd
 * @since 1.0
 * @version 1.0
 */
get_header();
?>

<div class="wrap">

    <header class="page-header">
        <div class="container">
            <?php if (have_posts()) : ?>
                <h1 class="page-title"><?php printf(__('Search Results for: %s', 'radixetcltd'), '<span>' . get_search_query() . '</span>'); ?></h1>
            <?php else : ?>
                <h1 class="page-title"><?php _e('Nothing Found', 'radixetcltd'); ?></h1>
            <?php endif; ?>
        </div>
    </header><!-- .page-header -->

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="container">
                <div class="col-sm-9">
                    <?php
                    if (have_posts()) :
                        /* Start the Loop */
                        while (have_posts()) :
                            the_post();

                            /**
                             * Run the loop for the search to output the results.
                             * If you want to overload this in a child theme then include a file
                             * called content-search.php and that will be used instead.
                             */
                            get_template_part('template-parts/post/content', 'excerpt');

                        endwhile; // End of the loop.

                        the_posts_pagination(
                                array(
                                    'prev_text' => radixetcltd_get_svg(array('icon' => 'arrow-left')) . '<span class="screen-reader-text">' . __('Previous page', 'radixetcltd') . '</span>',
                                    'next_text' => '<span class="screen-reader-text">' . __('Next page', 'radixetcltd') . '</span>' . radixetcltd_get_svg(array('icon' => 'arrow-right')),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'radixetcltd') . ' </span>',
                                )
                        );

                    else :
                        ?>

                        <p><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'radixetcltd'); ?></p>
                        <?php
                        get_search_form();

                    endif;
                    ?>
                </div>
                <div class="col-sm-3">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

</div><!-- .wrap -->

<?php
get_footer();
