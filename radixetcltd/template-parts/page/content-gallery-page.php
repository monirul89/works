
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="col-sm-12">
        <h2 class="title">Gallery</h2>
        <div class="row clearfix">
            <div class="columns">

                <div class="owl-carousel owl-theme">
                    <?php
                    $args = array(
                        'post_type' => array('post', 'gallery', 'real-product'),
                        'posts_per_page' => 100
                    );
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post();
                        $postImage = get_template_directory_uri();
                        if (get_the_post_thumbnail()) {
                            ?>
                            <div class="col-sm-3 gallery-image">
                                <div class="row">
                                    <?php the_post_thumbnail('radixetcltd-thumbnail-250'); ?>
                                </div>
                            </div><?php
                        } else {
                            if (get_field('product_image')) {
                                ?> 
                                <div class = "gallery-image col-sm-3">
                                    <div class="row">
                                        <img src = "<?php the_field('product_image'); ?>" alt = "<?php the_title(); ?>" width = "100%"/>
                                        <!--<img src = "<?php //echo $postImage;     ?>/assets/images/no-thumbnail.jpg" alt = "<?php // the_title();     ?>" width = "100%"/>-->
                                    </div>
                                </div> <?php
                            } else {
                                ?>
                                <div class="gallery-image col-sm-3">
                                    <div class="row">
                                        <img src = "<?php echo $postImage; ?>/assets/images/no-thumbnail.jpg" alt = "<?php the_title(); ?>" width = "100%"/>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    endwhile;
                    ?>
                </div>

            </div>
        </div>
    </div>

</article>
