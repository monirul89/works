<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Radixetcltd
 * @since 1.0
 * @version 1.0
 */
get_header();
?>

<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="container">
                <div class="col-sm-3" style="overflow: hidden">
                    <?php get_sidebar(); ?>
                </div>
                <div class="col-sm-9">
                    <?php while (have_posts()) : ?>
                        <div class="col-sm-4">
                            <?php
                            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                            /* link thumbnail to full size image for use with lightbox*/
                            echo '<a href="'.esc_url($featured_img_url).'" rel="lightbox">'; 
                                the_post_thumbnail('thumbnail');
                                echo '</a>';?>
                        </div>
                        <div class="col-sm-8">
                            <?php
                            /* Start the Loop */
                            the_post();
                            get_template_part('template-parts/post/content', get_post_format());
                            ?>
                        </div>
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <?php
                                if (comments_open() || get_comments_number()) :
                                    comments_template();
                                endif;

                                the_post_navigation(
                                        array(
                                            'prev_text' => '<span class="screen-reader-text">' . __('Previous Post', 'radixetcltd') . '</span><span aria-hidden="true" class="nav-subtitle">' . __('Previous', 'radixetcltd') . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . radixetcltd_get_svg(array('icon' => 'arrow-left')) . '</span>%title</span>',
                                            'next_text' => '<span class="screen-reader-text">' . __('Next Post', 'radixetcltd') . '</span><span aria-hidden="true" class="nav-subtitle">' . __('Next', 'radixetcltd') . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . radixetcltd_get_svg(array('icon' => 'arrow-right')) . '</span></span>',
                                        )
                                );
                                ?>
                            </div>
                        </div>
                    <?php endwhile; // End of the loop.   ?>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
