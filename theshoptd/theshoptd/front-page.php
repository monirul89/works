<?php
/**
 * Template Name: Front Page
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

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Big
                        <span>Save</span>
                    </h3>
                    <p>Get flat
                        <span>10%</span> Cashback</p>
                    <a class="button2" href="product.html">Shop Now </a>
                </div>
            </div>
        </div>
        <div class="item item2">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Healthy
                        <span>Saving</span>
                    </h3>
                    <p>Get Upto
                        <span>30%</span> Off</p>
                    <a class="button2" href="product.html">Shop Now </a>
                </div>
            </div>
        </div>
        <div class="item item3">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Big
                        <span>Deal</span>
                    </h3>
                    <p>Get Best Offer Upto
                        <span>20%</span>
                    </p>
                    <a class="button2" href="product.html">Shop Now </a>
                </div>
            </div>
        </div>
        <div class="item item4">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Today
                        <span>Discount</span>
                    </h3>
                    <p>Get Now
                        <span>40%</span> Discount</p>
                    <a class="button2" href="product.html">Shop Now </a>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- //banner -->

<div class="ads-grid">
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
