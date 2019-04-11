<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Shafidi
 * @since Shafidi 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <div class="post-thumbnail text-center post-single">
        <?php if(the_post_thumbnail()):  ?>
        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="Thumbnail" />
        <?php else: ?>
        
        <?php endif; ?>
    </div>
    
    <header class="entry-header">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>        
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
        the_content();
        ?>
    </div><!-- .entry-content -->
    <div class="entry-content">
        <?php the_comment(); ?>
    </div><!-- .entry-content -->

</article><!-- #post-## -->
