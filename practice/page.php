
<?php get_header(); ?>
<!-- Feature -->
<div class="jumbotron feature">
    <div class="container">
        <h1><span class="glyphicon glyphicon-equalizer"></span> Dramatically Engage</h1>
        <p>Objectively innovate empowered manufactured products whereas parallel platforms.</p>
        <p><a class="btn btn-primary" href="#">Engage Now</a></p>
    </div>
</div>

<div class="feature-product">
    <!-- Featured Products -->
    <div class="container">
        <div class="col-sm-12">
            <div class="row">

                <?php while (have_posts()): the_post(); ?>
                    <!-- Product 1 -->
                    <div class="col-sm-12">
                        <div class="">
                            <h2 class="single_title"><?php the_title(); ?></h2>
                            <?php the_post_thumbnail(); ?>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>

                <?php endwhile; ?>

            </div>
        </div>
    </div><!-- /.container -->
</div>
<?php get_footer(); ?>