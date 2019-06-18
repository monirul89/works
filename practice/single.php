
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
<!-- Featured Products -->
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <div class="row">

                <?php while (have_posts()): the_post(); ?>
                    <!-- Product 1 -->
                    <div class="col-sm-12">
                        <div class="">
                            <h2 class="single_title"><?php the_title(); ?></h2>
                            <p>[By: <?php the_author(); ?> <?php the_time('D d M Y g:i a'); ?>]</p>
                            <?php the_post_thumbnail(); ?>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>

                <?php endwhile; ?>

            </div>
        </div>
        <div class="col-sm-2">
            <div class="row">
                <div class="sidebar">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.container -->

<div class="container">
    <hr />
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

<div class="container">
    <div class="row">
        <h2 class="text-center">Find Us</h2>
        <!-- Map -->
        <div class="footer-map"></div>
        <div class="col-sm-12 footer-info-item text-center">
            <h2>Contact Us</h2>
            <p class=""> 31 Spooner Street, Quahog, Rhode Island </p>

            <p class=""><span class="glyphicon glyphicon-phone-alt"></span> +1(23) 456 7890<br>
                info@example.com</p>
        </div>
    </div>
</div>



<?php get_footer(); ?>