      
        <section id="demos">
            <div class="row">
                <div class="col-sm-12 columns">
                    <div class="owl-carousel owl-theme">
                        <?php
                        $args = array(
                            'post_type' => 'import_product',
                            'posts_per_page' => 32
                        );
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post();
                            ?>
                            <div class="col-sm-12 post-content item">

                                <div class="thumbnail-img single-img">
                                    <a class="post-thumbnail home-post-thum" href="<?php the_permalink(); ?>" aria-hidden="true">
                                    <?php if (has_post_thumbnail()) { the_post_thumbnail(); ?>
                                     </a>
                                   <?php }else{?>
                                        <a class="post-thumbnail home-post-thum" href="<?php the_permalink(); ?>" aria-hidden="true">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/s_b_02.png" alt="" width="" /> </a>
                                   <?php  } ?>
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
        </section>