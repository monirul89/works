<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Shafidi
 * @since 1.0
 * @version 1.0
 */
get_header();
?>

<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="container">
                <div class="col-sm-8">
                    <?php if (have_posts()) : ?>

                        <header class="page-header">
                            <h1 class="page-title"><?php printf(__('Search Results for: %s', 'shafidi'), '<span>' . esc_html(get_search_query()) . '</span>'); ?></h1>
                        </header><!-- .page-header -->

                        <?php
                        // Start the loop.
                        while (have_posts()) : the_post();

                            /**
                             * Run the loop for the search to output the results.
                             * If you want to overload this in a child theme then include a file
                             * called content-search.php and that will be used instead.
                             */
                            get_template_part('template-parts/content', 'search');

                        // End the loop.
                        endwhile;

                        // Previous/next page navigation.
                        the_posts_pagination(array(
                            'prev_text' => __('Previous page', 'shafidi'),
                            'next_text' => __('Next page', 'shafidi'),
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'shafidi') . ' </span>',
                        ));

                    // If no content, include the "No posts found" template.
                    else :
                        get_template_part('template-parts/content', 'none');

                    endif;
                    ?>
                </div>
                <div class="col-sm-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

</div><!-- .wrap -->

<?php
get_footer();
