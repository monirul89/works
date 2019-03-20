<?php
/**
 * The front page template file
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

<section>    
    <div class="site-section">        
        <div class="container">            
            <div class="row">                
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <?php
                    // Show the selected front page content.
                    if (have_posts()) :
                        while (have_posts()) :
                            the_post();
                            get_template_part('template-parts/page/content', 'front-page');
                        endwhile;
                    else :
                        get_template_part('template-parts/post/content', 'none');
                    endif;
                    ?>

                    <?php
                    // Get each of our panels and show the post data.
                    if (0 !== radixetcltd_panel_count() || is_customize_preview()) : // If we have pages to show.

                        /**
                         * Filter number of front page sections in Radixetcltd.
                         *
                         * @since Radixetcltd 1.0
                         *
                         * @param int $num_sections Number of front page sections.
                         */
                        $num_sections = apply_filters('radixetcltd_front_page_sections', 4);
                        global $radixetcltdcounter;

                        // Create a setting and control for each of the sections available in the theme.
                        for ($i = 1; $i < ( 1 + $num_sections ); $i++) {
                            $radixetcltdcounter = $i;
                            radixetcltd_front_page_section(null, $i);
                        }

                    endif; // The if ( 0 !== radixetcltd_panel_count() ) ends here.
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
