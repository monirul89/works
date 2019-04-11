
<div class="container">
    <div class="col-sm-9">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5
        );
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();
            ?>
        <article class="frontp">
                <h3><a class="post-thumbnail home-post-thum" href="<?php the_permalink(); ?>" aria-hidden="true">
                        <?php the_title(); ?></a>
                </h3>

        <!--            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="col-sm-4">
                        <img src="<?php //echo get_template_directory_uri();    ?>/images/s_b_02.png" alt="" />                    
                    </div> .post-thumbnail 
                    <div class="col-sm-8">
                        <h3><?php //the_title();    ?></h3> 
                        <p><?php // the_excerpt();    ?></p> 
                        <a href="<?php //echo '#';    ?>" class="btn btn-theme">Learn More</a>
                    </div>
                </article>-->

                <?php if (has_post_thumbnail()) { ?>

                    <div class="col-md-4 thumbnail-img">
                        <a class="post-thumbnail home-post-thum" href="<?php the_permalink(); ?>" aria-hidden="true">
                            <?php the_post_thumbnail('thumb-home', array('alt' => the_title_attribute('echo=0'))); ?>
                        </a>
                    </div>
                    <div class="col-md-8">
                        <?php
                    } else {
                        echo '<div class="col-md-12">';
                    }
                    ?>
                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div><!-- .entry-content -->
                </div>
            </article>
        <?php endwhile; ?>

    </div>
    <div class="col-sm-3">
        <?php get_sidebar(); ?>
    </div>
</div>
