<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
                <div class="col-sm-12">
                    <?php
                    // Start the loop.
                    while (have_posts()) : the_post();

                        // Include the single post content template.
                        get_template_part('template-parts/content', 'single');

                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) {
                            comments_template();
                        }
                    // End of the loop.
                    endwhile;
                    ?>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->    
</div><!-- .wrap -->

<?php
get_footer();
