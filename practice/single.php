
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
<div class="container">
    <?php comments_popup_link('hi ektao comment nai', 'ekta comment kora hylo.', '% ta comment kora hyche..') ?>
    <?php comments_template() ?>
</div><!-- /.container -->

<?php get_footer(); ?>