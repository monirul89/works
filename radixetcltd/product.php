<?php
/**
 * Template Name: Products Page
 * 
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Radixetcltd
 * @since 1.0
 * @version 1.0
 */
get_header();
?>

<div class="main-container">       
    <div class="container">            
        <div class="row"> 
            <?php
            // Show the selected front page content.
            if (have_posts()) :
                get_template_part('template-parts/page/content', 'products-page');
            else :
                get_template_part('template-parts/post/content', 'none');
            endif;
            ?>

        </div>
    </div><!-- #main -->
</div>

<?php
get_footer();
