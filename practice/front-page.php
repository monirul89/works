
<?php get_header(); ?>
<!-- Feature -->

<?php
$slide = new WP_Query(array(
        'post_type' =>'slider-1',
        'posts_per_page' => 1
    ));
while ($slide->have_posts()):$slide->the_post()
    ?>

<div class="jumbotron feature" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>);">
        <div class="container">
            <h1><span class="glyphicon glyphicon-equalizer"></span> <?php the_title(); ?></h1>
            <p><?php echo wp_trim_words(get_the_content(),20,FALSE) ?></p>
            <p><a class="btn btn-primary" href="<?php the_permalink(); ?>">Engage Now</a></p>
        </div>
    </div>

<?php endwhile; ?>

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

        <!--<a href="#" style="background-image: url(<?php // echo wp_get_attachment_url(get_post_thumbnail_id($post->id));  ?>);"></a>-->

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

<?php 
$super_qlt = new WP_Query(array(
    'post_type' => 'supper-quility',
    'posts_per_page'=>1
));
while ($super_qlt->have_posts()):$super_qlt->the_post(); ?>

<!-- Heading -->
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="text-center"><?php the_title(); ?></h1>
            <p class="text-center"><?php echo wp_trim_words(get_the_content(), 45, FALSE) ?></p>
        </div>
    </div>
</div>

<?php endwhile; ?>

<!-- Promos -->
<div class="container-fluid">
    <div class="row promo">
        <?php
        $gallery = new WP_Query(array(
            'post_type' => 'gallery-1',
            'posts_per_page'=>3,
        ));
     while ($gallery->have_posts()):$gallery->the_post();
        ?>
        <a href="#">
            <div class="col-md-4 promo-item item-1" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
                <h3>
                    <?php the_title(); ?>
                </h3>
            </div>
        </a>
        <?php endwhile; ?>
    </div>
</div><!-- /.container-fluid -->

<?php 
$unparallal = new WP_Query(array(
    'post_type'     => 'unparallal-service',
    'posts_per_page'=>  1
));
while ($unparallal->have_posts()):$unparallal->the_post(); ?>

<div class="container text-center">
    <h1><?php the_title(); ?></h1>
    <p class=""><?php echo wp_trim_words(get_the_content(), 50, FALSE) ?></p>
    <img class="img-responsive img-circle center-block" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
</div><!--/.container-->

<?php endwhile; ?>



<?php get_footer(); ?>