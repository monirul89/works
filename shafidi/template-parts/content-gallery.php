<?php
/**
 * Template part for displaying gallery posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Shafidi
 * @since 1.0
 * @version 1.2
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-12">
                <?php require 'slider-two.php'; ?>
            </div>
        </div>
    </div>
    <h2 class="title"><?php the_title(); ?></h2>
    <div class="lightbox-img">
        <?php
        $args = array(
            'post_type' => array('gallery', 'post', 'export_product', 'import_product'),
            'posts_per_page' => 100
        );
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();
            $featured_img_url = get_the_post_thumbnail_url();
            ?>

            <div class="col-sm-3 gallery-box">
                <div class="row">
                    <a class="example-image-link" href="<?php echo $featured_img_url; ?>" data-lightbox="example-set" data-title="">
                        <?php the_post_thumbnail('thumb-gallery'); ?></a>
                    <p class="hide"><?php the_title(); ?></p>
                </div>
            </div>

        <?php endwhile; ?>
    </div>
</article><!-- #post-## -->
