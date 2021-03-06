<?php
/**
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 * @package Solon
 */
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        $args = array(
            'post_type' => array('post', 'post'),
            'posts_per_page' => 1
        );
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();
            ?>
            <div class="col-sm-12 post-content item">

                <div class="thumbnail-img">
                    <a class="post-thumbnail home-post-thum" href="<?php the_permalink(); ?>" aria-hidden="true">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail();
                            ?>
                        </a>
                    <?php } else { ?>
                        <a class="post-thumbnail home-post-thum" href="<?php the_permalink(); ?>" aria-hidden="true">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/s_b_02.png" alt="" width="" /> </a>
                    <?php } ?>
                </div>
                <div class="content-post">
                    <a class="post-thumbnail home-post-thum" href="<?php the_permalink(); ?>" aria-hidden="true">
                        <h3 class="title"><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                    </a>
                </div>
            </div>
        <?php endwhile; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if (get_theme_mod('slider_display')) : ?>
            <?php echo solon_slider_template(); ?>
        <?php endif; ?>

        <?php if (have_posts()) : ?>

            <?php /* Start the Loop */ ?>
            <?php while (have_posts()) : the_post(); ?>

                <?php
                /* Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part('content', get_post_format());
                ?>

            <?php endwhile; ?>

            <?php if (!function_exists('wp_pagenavi')) : ?>
                <?php solon_paging_nav(); ?>
            <?php else : ?>
                <?php wp_pagenavi(); ?>
            <?php endif; ?>

        <?php else : ?>

            <?php get_template_part('content', 'none'); ?>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
