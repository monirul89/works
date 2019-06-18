
<?php get_header(); ?>
<!-- Feature -->
<div class="jumbotron feature">
    <div class="container">
        <h1><span class="glyphicon glyphicon-equalizer"></span> Dramatically Engage</h1>
        <p>Objectively innovate empowered manufactured products whereas parallel platforms.</p>
        <p><a class="btn btn-primary" href="#">Engage Now</a></p>
    </div>
</div>

<!-- Featured Products -->
<div class="container">
    <div class="col-sm-12">
        <h1 class="text-center">World Class Products</h1>
        <div class="row">

            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
                'order' => 'DSC'
            );
            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                    ?>
                    <!-- Product 1 -->
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail featured-product">
                            <a href="<?php echo the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            <div class="caption">
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo wp_trim_words(get_the_content(), 10, FALSE); ?>
                                    <a class="readmore" href="<?php the_permalink(); ?>">Read more</a></p>
                            </div>
                        </div>
                    </div>

                    <?php
                endwhile;
            endif;
            ?>

        </div>
    </div>
</div><!-- /.container -->



<!-- Heading -->
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="text-center">Superior Quality</h1>
            <p class="text-center">Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing. Holistically pontificate installed base portals after maintainable products without collateral.</p>
        </div>
    </div>
</div>


<!-- Promos -->
<div class="container-fluid">
    <div class="row promo">
        <a href="#">
            <div class="col-md-4 promo-item item-1">
                <h3>
                    Unleash
                </h3>
            </div>
        </a>
        <a href="#">
            <div class="col-md-4 promo-item item-2">
                <h3>
                    Synergize
                </h3>
            </div>
        </a>

        <a href="#">
            <div class="col-md-4 promo-item item-3">
                <h3>
                    Procrastinate
                </h3>
            </div>
        </a>
    </div>
</div><!-- /.container-fluid -->

<div class="container text-center">
    <h1>Unparalleled Service</h1>
    <p class="">Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing. Holistically pontificate installed base portals after maintainable products without collateral.</p>
    <img class="img-responsive img-circle center-block" src="<?php echo get_template_directory_uri(); ?>/images/service.jpg" alt="">
</div><!--/.container-->




<?php get_footer(); ?>