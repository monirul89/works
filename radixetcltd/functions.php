<?php

/**
 * radixetcltd engine room
 *
 * @package radixetcltd
 */
/**
 * Assign the radixetcltd version to a var
 */
$theme = wp_get_theme('radixetcltd');
$radixetcltd_version = $theme['Version'];

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if (!isset($content_width)) {
    $content_width = 980; /* pixels */
}

$radixetcltd = (object) array(
            'version' => $radixetcltd_version,
            /**
             * Initialize all the things.
             */
            'main' => require 'inc/class-radixetcltd.php',
            'customizer' => require 'inc/customizer/class-radixetcltd-customizer.php',
);

require 'inc/radixetcltd-functions.php';
require 'inc/radixetcltd-template-hooks.php';
require 'inc/radixetcltd-template-functions.php';

if (class_exists('Jetpack')) {
    $radixetcltd->jetpack = require 'inc/jetpack/class-radixetcltd-jetpack.php';
}

if (radixetcltd_is_woocommerce_activated()) {
    $radixetcltd->woocommerce = require 'inc/woocommerce/class-radixetcltd-woocommerce.php';
    $radixetcltd->woocommerce_customizer = require 'inc/woocommerce/class-radixetcltd-woocommerce-customizer.php';

    require 'inc/woocommerce/class-radixetcltd-woocommerce-adjacent-products.php';

    require 'inc/woocommerce/radixetcltd-woocommerce-template-hooks.php';
    require 'inc/woocommerce/radixetcltd-woocommerce-template-functions.php';
    require 'inc/woocommerce/radixetcltd-woocommerce-functions.php';
}

if (is_admin()) {
    $radixetcltd->admin = require 'inc/admin/class-radixetcltd-admin.php';

    require 'inc/admin/class-radixetcltd-plugin-install.php';
}

/**
 * NUX
 * Only load if wp version is 4.7.3 or above because of this issue;
 * https://core.trac.wordpress.org/ticket/39610?cversion=1&cnum_hist=2
 */
if (version_compare(get_bloginfo('version'), '4.7.3', '>=') && ( is_admin() || is_customize_preview() )) {
    require 'inc/nux/class-radixetcltd-nux-admin.php';
    require 'inc/nux/class-radixetcltd-nux-guided-tour.php';

    if (defined('WC_VERSION') && version_compare(WC_VERSION, '3.0.0', '>=')) {
        require 'inc/nux/class-radixetcltd-nux-starter-content.php';
    }
}

/**
 * Note: Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woocommerce/theme-customisations
 */
