<?php 
/* 
 * Template Name: Contact Us */  
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
                        // Include the page content template.
                        get_template_part('template-parts/content', 'contact');
                        
                        if (comments_open() || get_comments_number()) {
                            //comments_template();
                        }
                    // End of the loop.
                    endwhile;
                    ?>
                </div>
            </div>
    </div>
</div><!-- #main -->

<?php
get_footer();
