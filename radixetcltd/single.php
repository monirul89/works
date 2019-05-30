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
                <div class="col-sm-2" style="overflow: hidden">
                    <?php get_sidebar(); ?>
                </div>
                <div class="col-sm-10">
                    <?php while (have_posts()) : ?>
                        <div class="col-sm-6">
                            <?php
//                            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
//                            /* link thumbnail to full size image for use with lightbox */
//                            echo '<a href="' . esc_url($featured_img_url) . '" rel="lightbox">';
//                            the_post_thumbnail('thumbnail');
//                            echo '</a>';
                            ?>
                            <!-- default start -->
                            <section id="default" class="padding-top0">
                                <div class="row">
                                    <div class="large-5 column">
                                        <div class="xzoom-container">

                                            <img class="xzoom" id="xzoom-default" src="<?php the_field('product_image'); ?>" xoriginal="<?php the_field('product_image'); ?>" />
                                            <div class="xzoom-thumbs">
                                                <a href="<?php the_field('product_image'); ?>"><img class="xzoom-gallery" width="80" src="<?php the_field('product_image');?>" xpreview="<?php the_field('product_image');?>"></a>
                                                <a href="<?php the_field('image_1'); ?>"><img class="xzoom-gallery" width="80" src="<?php the_field('image_1');?>"></a>
                                                <?php if (get_field('product_image')) { ?>
                                                    <a href="<?php the_field('product_image'); ?>"><img class="xzoom-gallery" width="80" src="<?php the_field('product_image');?>"></a>
                                                <?php } ?>
                                                <?php if (get_field('product_image')) { ?>
                                                    <a href="<?php the_field('product_image'); ?>"><img class="xzoom-gallery" width="80" src="<?php the_field('product_image');?>"></a>
                                                <?php } ?>
                                            </div>
                                        </div>        
                                    </div>
                                    <div class="large-7 column"></div>
                                </div>
                            </section>
                            <!-- default end -->

                        </div>
                        <div class="col-sm-6">
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
                    <?php endwhile; // End of the loop.     ?>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
