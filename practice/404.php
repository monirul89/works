
<?php get_header(); ?>

<!-- Featured Products -->
<div class="container" style="height: 500px; background: url(<?php echo get_template_directory_uri(); ?>/images/not-found-img.jpg) no-repeat 23% center">
    <div class="col-sm-10 col-sm-offset-1">
        <div class="row" style="margin-top: 160px;">
            <div class="col-sm-6"></div>
            <div class="col-sm-6">
                <h1 style="font-weight: 600; color: #ea3131;">This Page Not Found</h1>
                <h3 style="color: #ca6a6a;">404 No Result Found</h3>
                <p>We couldn’t find the page you were looking for. It appears you may have taken a wrong turn.</p>
                <div class="search-404">
                    <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                        <input type="search" id="search-field" class="search-field" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" />
                        <button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x('Search', 'submit button', 'practice'); ?></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.container -->


<?php get_footer(); ?>

