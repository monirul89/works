	
<?php /* Template Name: Gallert */ ?>
<?php
/**
 * 
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Shafidi
 * @since 1.0
 * @version 1.0
 */
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="container">

            <?php
            // Show the selected frontpage content.
            if (have_posts()) :
                while (have_posts()) : the_post();
                    get_template_part('template-parts/content', 'gallery');
                endwhile;
                // Previous/next page navigation.			
                the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => __('Previous page', 'shafidi'),
                    'next_text' => __('Next page', 'shafidi'),
                ));
            else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
                get_template_part('template-parts/content', 'none');
            endif;
            ?>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();

