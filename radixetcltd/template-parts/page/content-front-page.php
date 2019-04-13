
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="col-sm-12">
        <h2 class="title">PRODUCTS</h2>
        <div class="row clearfix">
            <div class="columns">
                <div class="owl-carousel owl-theme">
                    <?php
                    $args = array(
                        'post_type' => array('post', 'real-product'),
                        'posts_per_page' => 24
                    );
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post();
                        ?>
                        <div class="col-sm-12 post-content item">

                            <div class="thumbnail-img">
                                <a class="post-thumbnail home-post-thum" href="<?php the_permalink(); ?>" aria-hidden="true">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail();
                                        ?>
                                    </a>
                                <?php } else { ?>
                                    <a class="post-thumbnail home-post-thum" href="<?php the_permalink(); ?>" aria-hidden="true">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/s_b_02.png" alt="" width="" /> </a>
                                <?php } ?>
                            </div>
                            <div class="content-post">
                                <a class="post-thumbnail home-post-thum" href="<?php the_permalink(); ?>" aria-hidden="true">
                                    <h3 class="title"><?php the_title(); ?></h3>
                                    <p><?php the_excerpt(); ?></p>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <script>
                    var owl = $('.owl-carousel');
                    owl.owlCarousel({
                        items: 4,
                        loop: true,
                        margin: 10,
                        autoplay: true,
                        autoplayTimeout: 1500,
                        autoplayHoverPause: true
                    });
                </script>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="row">
            <h2 class="title">IMPORT PRODUCTS</h2>
            <?php require 'four-slide.php'; ?>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-12">
                <?php require 'slider-two.php'; ?>
            </div>
        </div>
    </div>

</article>
