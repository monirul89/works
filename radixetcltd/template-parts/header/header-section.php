<?php
/**
 * Displays header section
 *
 * @package WordPress
 * @subpackage Radixetcltd
 * @since 1.0
 * @version 1.0
 */
?>
<div class="site-branding">
    <div class="wrap">

        <?php the_custom_logo(); ?>

        <div class="site-branding-text">
            <?php if (is_front_page()) : ?>
                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
            <?php else : ?>
                <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
            <?php endif; ?>

            <?php
            $description = get_bloginfo('description', 'display');

            if ($description || is_customize_preview()) :
                ?>
                <p class="site-description"><?php echo $description; ?></p>
            <?php endif; ?>
        </div><!-- .site-branding-text -->

        <?php if (( radixetcltd_is_frontpage() || ( is_home() && is_front_page() ) ) && !has_nav_menu('top')) : ?>
            <a href="#content" class="menu-scroll-down"><?php echo radixetcltd_get_svg(array('icon' => 'arrow-right')); ?><span class="screen-reader-text"><?php _e('Scroll down to content', 'radixetcltd'); ?></span></a>
        <?php endif; ?>

    </div><!-- .wrap -->
</div><!-- .site-branding -->
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e('Top Menu', 'radixetcltd'); ?>">
    <button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
        <?php
        echo radixetcltd_get_svg(array('icon' => 'bars'));
        echo radixetcltd_get_svg(array('icon' => 'close'));
        _e('Menu', 'radixetcltd');
        ?>
    </button>

    <?php
    wp_nav_menu(
            array(
                'theme_location' => 'top',
                'menu_id' => 'top-menu',
            )
    );
    ?>

    <?php if (( radixetcltd_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header()) : ?>
        <a href="#content" class="menu-scroll-down">
            <?php echo radixetcltd_get_svg(array('icon' => 'arrow-right')); ?>
            <span class="screen-reader-text">
                <?php _e('Scroll down to content', 'radixetcltd'); ?>
            </span>
        </a>
    <?php endif; ?>
</nav><!-- #site-navigation -->