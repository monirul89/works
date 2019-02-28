<?php
/**
 * Template for displaying search forms in The Shoptd
 *
 * @package WordPress
 * @subpackage The_Shoptd
 * @since 1.0
 * @version 1.0
 */
?>

<?php $unique_id = esc_attr(theshoptd_unique_id('search-form-')); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label for="<?php echo $unique_id; ?>">
        <span class="screen-reader-text"><?php echo _x('Search for:', 'label', 'theshoptd'); ?></span>
    </label>
    <input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'theshoptd'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    <button type="submit" class="search-submit"><?php echo theshoptd_get_svg(array('icon' => 'search')); ?><span class="screen-reader-text"><?php echo _x('Search', 'submit button', 'theshoptd'); ?></span></button>
</form>
