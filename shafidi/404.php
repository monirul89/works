<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
                <section class="error-404 not-found">
                    <header class="page-header">
                        <h1 class="page-title"><?php _e('Oops! That page can&rsquo;t be found.', 'shafidi'); ?></h1>
                    </header><!-- .page-header -->
                    <div class="page-content">
                        <p><?php _e('It looks like nothing was found at this location. Maybe try a search?', 'shafidi'); ?></p>

                    </div><!-- .page-content -->
                </section><!-- .error-404 -->
                
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                        <?php require 'template-parts/slider-two.php'; ?>
                        </div>
                     </div>
                </div>
                
                <div class="col-sm-12">
                    <div class="row">
                        <?php require 'template-parts/four-slide.php'; ?>
                     </div>
                </div>
                
                <div class="col-sm-12">
                    <h2 class="title">LATEST PRODUCTS</h2>
                    <div class="row clearfix">
                        <div class="columns">
                            <div class="owl-carousel owl-theme">
                        <?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 15
                            );
                            $loop = new WP_Query($args);
                            while ($loop->have_posts()) : $loop->the_post();
                                ?>
                                <div class="col-sm-12 post-content item">

                                    <div class="thumbnail-img">
                                        <a class="post-thumbnail home-post-thum" href="<?php the_permalink(); ?>" aria-hidden="true">
                                        <?php if (has_post_thumbnail()) { the_post_thumbnail(); ?>
                                         </a>
                                       <?php }else{?>
                                            <a class="post-thumbnail home-post-thum" href="<?php the_permalink(); ?>" aria-hidden="true">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/s_b_02.png" alt="" width="" /> </a>
                                       <?php  } ?>
                                    </div>
                                    <div class="content-post">
                                        <a class="post-thumbnail home-post-thum" href="<?php the_permalink(); ?>" aria-hidden="true">
                                            <h3 class="title"><?php the_title(); ?></h3>
                                            <p><?php the_excerpt(); ?></p>
                                        </a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            </div>
                            <script>
                                var owl = $('.owl-carousel');
                                owl.owlCarousel({
                                    items: 3,
                                    loop: true,
                                    margin: 10,
                                    autoplay: true,
                                    autoplayTimeout: 1500,
                                    autoplayHoverPause: true
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
