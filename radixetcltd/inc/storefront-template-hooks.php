<?php

/**
 * radixetcltd hooks
 *
 * @package radixetcltd
 */
/**
 * General
 *
 * @see  radixetcltd_header_widget_region()
 * @see  radixetcltd_get_sidebar()
 */
add_action('radixetcltd_before_content', 'radixetcltd_header_widget_region', 10);
add_action('radixetcltd_sidebar', 'radixetcltd_get_sidebar', 10);

/**
 * Header
 *
 * @see  radixetcltd_skip_links()
 * @see  radixetcltd_secondary_navigation()
 * @see  radixetcltd_site_branding()
 * @see  radixetcltd_primary_navigation()
 */
add_action('radixetcltd_header', 'radixetcltd_header_container', 0);
add_action('radixetcltd_header', 'radixetcltd_skip_links', 5);
add_action('radixetcltd_header', 'radixetcltd_site_branding', 20);
add_action('radixetcltd_header', 'radixetcltd_secondary_navigation', 30);
add_action('radixetcltd_header', 'radixetcltd_header_container_close', 41);
add_action('radixetcltd_header', 'radixetcltd_primary_navigation_wrapper', 42);
add_action('radixetcltd_header', 'radixetcltd_primary_navigation', 50);
add_action('radixetcltd_header', 'radixetcltd_primary_navigation_wrapper_close', 68);

/**
 * Footer
 *
 * @see  radixetcltd_footer_widgets()
 * @see  radixetcltd_credit()
 */
add_action('radixetcltd_footer', 'radixetcltd_footer_widgets', 10);
add_action('radixetcltd_footer', 'radixetcltd_credit', 20);

/**
 * Homepage
 *
 * @see  radixetcltd_homepage_content()
 */
add_action('homepage', 'radixetcltd_homepage_content', 10);

/**
 * Posts
 *
 * @see  radixetcltd_post_header()
 * @see  radixetcltd_post_meta()
 * @see  radixetcltd_post_content()
 * @see  radixetcltd_paging_nav()
 * @see  radixetcltd_single_post_header()
 * @see  radixetcltd_post_nav()
 * @see  radixetcltd_display_comments()
 */
add_action('radixetcltd_loop_post', 'radixetcltd_post_header', 10);
add_action('radixetcltd_loop_post', 'radixetcltd_post_content', 30);
add_action('radixetcltd_loop_post', 'radixetcltd_post_taxonomy', 40);
add_action('radixetcltd_loop_after', 'radixetcltd_paging_nav', 10);
add_action('radixetcltd_single_post', 'radixetcltd_post_header', 10);
add_action('radixetcltd_single_post', 'radixetcltd_post_content', 30);
add_action('radixetcltd_single_post_bottom', 'radixetcltd_post_taxonomy', 5);
add_action('radixetcltd_single_post_bottom', 'radixetcltd_post_nav', 10);
add_action('radixetcltd_single_post_bottom', 'radixetcltd_display_comments', 20);
add_action('radixetcltd_post_header_before', 'radixetcltd_post_meta', 10);
add_action('radixetcltd_post_content_before', 'radixetcltd_post_thumbnail', 10);

/**
 * Pages
 *
 * @see  radixetcltd_page_header()
 * @see  radixetcltd_page_content()
 * @see  radixetcltd_display_comments()
 */
add_action('radixetcltd_page', 'radixetcltd_page_header', 10);
add_action('radixetcltd_page', 'radixetcltd_page_content', 20);
add_action('radixetcltd_page_after', 'radixetcltd_display_comments', 10);

/**
 * Homepage Page Template
 *
 * @see  radixetcltd_homepage_header()
 * @see  radixetcltd_page_content()
 */
add_action('radixetcltd_homepage', 'radixetcltd_homepage_header', 10);
add_action('radixetcltd_homepage', 'radixetcltd_page_content', 20);
