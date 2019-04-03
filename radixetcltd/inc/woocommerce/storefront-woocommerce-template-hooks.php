<?php
/**
 * radixetcltd WooCommerce hooks
 *
 * @package radixetcltd
 */

/**
 * Homepage
 *
 * @see  radixetcltd_product_categories()
 * @see  radixetcltd_recent_products()
 * @see  radixetcltd_featured_products()
 * @see  radixetcltd_popular_products()
 * @see  radixetcltd_on_sale_products()
 * @see  radixetcltd_best_selling_products()
 */
add_action( 'homepage', 'radixetcltd_product_categories', 20 );
add_action( 'homepage', 'radixetcltd_recent_products', 30 );
add_action( 'homepage', 'radixetcltd_featured_products', 40 );
add_action( 'homepage', 'radixetcltd_popular_products', 50 );
add_action( 'homepage', 'radixetcltd_on_sale_products', 60 );
add_action( 'homepage', 'radixetcltd_best_selling_products', 70 );

/**
 * Layout
 *
 * @see  radixetcltd_before_content()
 * @see  radixetcltd_after_content()
 * @see  woocommerce_breadcrumb()
 * @see  radixetcltd_shop_messages()
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
add_action( 'woocommerce_before_main_content', 'radixetcltd_before_content', 10 );
add_action( 'woocommerce_after_main_content', 'radixetcltd_after_content', 10 );
add_action( 'radixetcltd_content_top', 'radixetcltd_shop_messages', 15 );
add_action( 'radixetcltd_before_content', 'woocommerce_breadcrumb', 10 );

add_action( 'woocommerce_after_shop_loop', 'radixetcltd_sorting_wrapper', 9 );
add_action( 'woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', 10 );
add_action( 'woocommerce_after_shop_loop', 'woocommerce_result_count', 20 );
add_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 30 );
add_action( 'woocommerce_after_shop_loop', 'radixetcltd_sorting_wrapper_close', 31 );

add_action( 'woocommerce_before_shop_loop', 'radixetcltd_sorting_wrapper', 9 );
add_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 10 );
add_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
add_action( 'woocommerce_before_shop_loop', 'radixetcltd_woocommerce_pagination', 30 );
add_action( 'woocommerce_before_shop_loop', 'radixetcltd_sorting_wrapper_close', 31 );

add_action( 'radixetcltd_footer', 'radixetcltd_handheld_footer_bar', 999 );

// Legacy WooCommerce columns filter.
if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.3', '<' ) ) {
	add_filter( 'loop_shop_columns', 'radixetcltd_loop_columns' );
	add_action( 'woocommerce_before_shop_loop', 'radixetcltd_product_columns_wrapper', 40 );
	add_action( 'woocommerce_after_shop_loop', 'radixetcltd_product_columns_wrapper_close', 40 );
}

/**
 * Products
 *
 * @see radixetcltd_upsell_display()
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
add_action( 'woocommerce_after_single_product_summary', 'radixetcltd_upsell_display', 15 );

remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 6 );

add_action( 'woocommerce_after_single_product_summary', 'radixetcltd_single_product_pagination', 30 );
add_action( 'radixetcltd_after_footer', 'radixetcltd_sticky_single_add_to_cart', 999 );

/**
 * Header
 *
 * @see radixetcltd_product_search()
 * @see radixetcltd_header_cart()
 */
add_action( 'radixetcltd_header', 'radixetcltd_product_search', 40 );
add_action( 'radixetcltd_header', 'radixetcltd_header_cart', 60 );

/**
 * Cart fragment
 *
 * @see radixetcltd_cart_link_fragment()
 */
if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '2.3', '>=' ) ) {
	add_filter( 'woocommerce_add_to_cart_fragments', 'radixetcltd_cart_link_fragment' );
} else {
	add_filter( 'add_to_cart_fragments', 'radixetcltd_cart_link_fragment' );
}

/**
 * Integrations
 *
 * @see radixetcltd_woocommerce_brands_archive()
 * @see radixetcltd_woocommerce_brands_single()
 * @see radixetcltd_woocommerce_brands_homepage_section()
 */
if ( class_exists( 'WC_Brands' ) ) {
	add_action( 'woocommerce_archive_description', 'radixetcltd_woocommerce_brands_archive', 5 );
	add_action( 'woocommerce_single_product_summary', 'radixetcltd_woocommerce_brands_single', 4 );
	add_action( 'homepage', 'radixetcltd_woocommerce_brands_homepage_section', 80 );
}
