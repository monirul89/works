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
        <h2 class="title">Contact us</h2>
        <div class="clearfix">
            <div class="columns">
                <div class="owl-carousel owl-theme">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 5
                    );
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post();
                        ?>
                        <div class="col-sm-12 contact-content item">
                            <div class="contact-profile col-sm-6">
                            <a class="post-thumbnail home-post-thum" href="<?php the_permalink(); ?>" aria-hidden="true">
                             <img src="<?php echo get_template_directory_uri(); ?>/images/profile-icon.png" alt="" width="" /> 
                            </a>
                            </div>
                            <div class="col-sm-6">
                                <div class="contact-profile-ditails">
                                    <h3 class="title">SHAFIDI BD (SBJEI)</h3>
                                    <h3 style="margin: 0; padding: 15px 0">CORPORATE OFFICE ADDRESS:</h3>
                                    <p>159/1 MALIBUG BAZAR ROAD, 1ST FLOOR, FLAT-2/A, DHAKA-1217, <br> BANGLADESH.</p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <script>
                    var owl = $('.owl-carousel');
                    owl.owlCarousel({
                        items: 1,
                        loop: true,
                        margin: 4,
                        autoplay: true,
                        autoplayTimeout: 5000,
                        autoplayHoverPause: true
                    });
                </script>
            </div>
        </div>
    </div>
</article><!-- #post-## -->


