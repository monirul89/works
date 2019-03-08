<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Radixetcltd
 * @since 1.0
 * @version 1.2
 */
if ( has_nav_menu( 'primary' ) ) {
?>


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
        <a href="#content" class="menu-scroll-down"><?php echo radixetcltd_get_svg(array('icon' => 'arrow-right')); ?><span class="screen-reader-text"><?php _e('Scroll down to content', 'radixetcltd'); ?></span></a>
    <?php endif; ?>
</nav><!-- #site-navigation -->
<?php
}
else{ ?>
<div class="row navbar-container">
    <div id="plumber-nav" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li class="dropdown"><a href="#">Mineral Water Plant</a>
                <ul class="dropdown-menu services">
                    <li><a href="#">Mineral Water Plant</a></li>
                    <li><a href="#">Bottle Filling Machine</a></li>
                    <li><a href="#">Pouch Packing Machine</a></li>
                    <li><a href="#">Glass Packing Machine</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="#">Industrial Plant</a>
                <ul class="dropdown-menu services">
                    <li><a href="#">Effluent Water Treatment Plant</a></li>
                    <li><a href="#">Sewage Treatment Plant</a></li>
                    <li><a href="#">R.O.Plant</a></li>
                    <li><a href="#">Water Softening Plant</a></li>
                </ul>
            </li>
            <li><a href="#">Contact</a></li>
        </ul>
        <a href="javascript: void(0);" data-toggle="modal" data-target="#myModal2" class="get-appointment-btn"><span>Registration</span></a>

        <a href="javascript: void(0);" data-toggle="modal" data-target="#myModalReg" class="get-appointment-btn"><span>Login</span></a>

        <ul class="nav nav-pills header-social">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>

            <li><a href="#"><i class="fa fa-twitter"></i></a></li>

            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>

            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>

        </ul>

    </div>

</div>
    <?php
} ?>








