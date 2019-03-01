<?php
/**
 * Template Name: About Page
 * 
 * The front page template file
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage The_Shoptd
 * @since 1.0
 * @version 1.0
 */
get_header();
?>


<!-- //banner -->

<div class="ads-grid">
    <?php
    // Show the selected front page content.
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            get_template_part('template-parts/page/content', 'about-page');
        endwhile;
    else :
        get_template_part('template-parts/post/content', 'none');
    endif;

    // Get each of our panels and show the post data.
    if (0 !== theshoptd_panel_count() || is_customize_preview()) : // If we have pages to show.

        /**
         * Filter number of front page sections in The Shoptd.
         *
         * @since The Shoptd 1.0
         *
         * @param int $num_sections Number of front page sections.
         */
        $num_sections = apply_filters('theshoptd_front_page_sections', 4);
        global $theshoptdcounter;

        // Create a setting and control for each of the sections available in the theme.
        for ($i = 1; $i < ( 1 + $num_sections ); $i++) {
            $theshoptdcounter = $i;
            theshoptd_front_page_section(null, $i);
        }

    endif; // The if ( 0 !== theshoptd_panel_count() ) ends here.
    ?>
</div>
<?php
get_footer();
