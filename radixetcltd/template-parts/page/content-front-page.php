
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="col-sm-12">
        <h2 class="title">PRODUCTS</h2>
        <div class="row clearfix">
            <div class="columns">

                <div class="owl-carousel owl-theme">
                    <?php
                    $args = array(
                        'post_type' => array('post', 'real-product'),
                        'posts_per_page' => 4
                    );
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post();
                        ?>
                        <div class="col-sm-3 post-content item">

                            <div class="thumbnail-img">
                                <a class="post-thumbnail home-post-thum" href="<?php the_permalink(); ?>" aria-hidden="true">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('radixetcltd-thumbnail-250');
                                        ?>
                                    </a>
                                <?php } else { ?>
                                    <a class="post-thumbnail home-post-thum" href="<?php the_permalink(); ?>" aria-hidden="true">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/no-thumbnail.jpg" alt="" width="" /> </a>
                                <?php } ?>
                            </div>
                            <div class="content-post">
                                <!--<a class="post-thumbnail home-post-thum" href="<?php // the_permalink();    ?>" aria-hidden="true"></a>-->
                                <h3 class="title"><?php the_title(); ?></h3> 
                                
                                <p>
                                    <strong>Model : <?php the_field('product_model'); ?></strong><br>
                                    
                                    <strong>Price : </strong><del><?php the_field('product_price_before'); ?> Tk/-</del>
                                    <strong><?php the_field('product_price'); ?> Tk/-</strong>
                                </p>
                                <p><?php the_excerpt(); ?></p>
                                <!--<p><a class="post-thumbnail home-post-thum" href="<?php //the_permalink();    ?>" aria-hidden="true">Read more</a></p>-->
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>

            </div>
        </div>
    </div>

</article>
