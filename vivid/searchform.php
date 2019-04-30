<form action="<?php echo home_url( '/' ); ?>" method="get" class="searchform" role="search">
    <fieldset>
        <input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="<?php _e('Search..', 'bluth'); ?>"/>
    </fieldset>
</form>