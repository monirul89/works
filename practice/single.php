
<?php get_header(); ?>
<!-- Featured Products -->
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <div class="row">

                <?php while (have_posts()): the_post(); ?>
                    <!-- Product 1 -->
                    <div class="col-sm-12">
                        <div class="single-content">
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
    <?php comments_popup_link('hi ektao comment nai', 'ekta comment kora hylo.', '% ta comment kora hyche..'); ?>
    <?php comments_template(); ?>
</div><!-- /.container -->

<?php get_footer(); ?>