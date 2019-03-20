<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-70923883-1', 'auto');
            ga('send', 'pageview');

        </script>
        <?php do_action('storefront_before_site'); ?>

        <div id="page" class="hfeed site">
            <?php do_action('storefront_before_header'); ?>

            <header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">

                <?php
                /**
                 * Functions hooked into storefront_header action
                 *
                 * @hooked storefront_header_container                 - 0
                 * @hooked storefront_skip_links                       - 5
                 * @hooked storefront_social_icons                     - 10
                 * @hooked storefront_site_branding                    - 20
                 * @hooked storefront_secondary_navigation             - 30
                 * @hooked storefront_product_search                   - 40
                 * @hooked storefront_header_container_close           - 41
                 * @hooked storefront_primary_navigation_wrapper       - 42
                 * @hooked storefront_primary_navigation               - 50
                 * @hooked storefront_header_cart                      - 60
                 * @hooked storefront_primary_navigation_wrapper_close - 68
                 */
                do_action('storefront_header');
                ?>

            </header><!-- #masthead -->

            <?php
            /**
             * Functions hooked in to storefront_before_content
             *
             * @hooked storefront_header_widget_region - 10
             * @hooked woocommerce_breadcrumb - 10
             */
            do_action('storefront_before_content');
            ?>

            <div id="content" class="site-content" tabindex="-1">
                <div class="col-full">

                    <?php
                    do_action('storefront_content_top');
                    