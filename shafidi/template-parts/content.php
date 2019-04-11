<?php
/**
 * Template part for displaying posts
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
    <header class="entry-header">
        <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
        ?>
    </header><!-- .entry-header -->

    <?php if (is_singular()) :
        ?>

        <div class="post-thumbnail">
            <?php the_post_thumbnail('thumb-home'); ?>
        </div><!-- .post-thumbnail -->
        <div class="entry-content">
            <?php
            /* translators: %s: Name of current post */
            the_content(sprintf(
                            __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'shafidi'), get_the_title()
            ));
            ?>
        </div><!-- .entry-content -->

    <?php else : ?>
        <div class="row">
            <?php if (has_post_thumbnail()) { ?>
                <div class="col-md-4 thumbnail-img">
                    <a class="post-thumbnail home-post-thum" href="<?php the_permalink(); ?>" aria-hidden="true">
                        <?php the_post_thumbnail('thumb-home', array('alt' => the_title_attribute('echo=0'))); ?>
                    </a>
                </div>
                <div class="col-md-8">
                    <?php
                } else {
                    echo '<div class="col-md-12">';
                }
                ?>
                <div class="entry-content">
                    <?php the_excerpt(); ?>
                </div><!-- .entry-content -->
            </div>
        <?php endif; // End is_singular() 
        ?>
    </div>
</article><!-- #post-## -->

