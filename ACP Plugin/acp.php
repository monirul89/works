<?php

/*
 * Plugin Name: ACP Plugin
 * Plugin URI:  https://theshoptd.com
 * Description: Advanced Custom Post (ACP) WordPress Plugin. Advanced custom Post is a free plugin that enables you to add custom to your new custom post.
 * Version:     0.1.0
 * Author:      Monir
 * Author URI:  https://theshoptd.com/me
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Domain Path: /languages
 */

/**********Custom post type init function*******************/

function m4_item_custom_post() {
    
    register_post_type('item_custom_post', array(  // Custom post type Register
        'labels' => array(
            'name' => 'Items',
            'singular_name' => 'Item',
            'all_items' => 'All Items',
            'add_new' => 'Add New Item',
            'add_new_item' => 'Add Item Post',
        ),
        'public' => true,
        // 'taxonomies'=> array('category', 'post_tag'), // Custom post type Category and tag show
        'supports' => array('title', 'editor', 'custom-fields', 'post-formats', 'author', 'thumbnail', 'thumbnail', 'excerpt', 'comments'),
    ));
}

add_action('init', 'm4_item_custom_post');

/************************add_shortcode***********************/
// add_shortcode( 'm4_item', 'm4_item_post' ); 


/********************add shortcode init function*************/

function m4_shortcode_init(){
    add_shortcode( 'm4_item', 'm4_shortcode_register' );
}

add_action('init', 'm4_shortcode_init');



/********shortcode register function with get data query******/

function m4_shortcode_register(){
        // get Item data
    $args = array(
        'post_type' => 'item_custom_post'
    );

    $itempostloop = new WP_Query($args);
    if($itempostloop->have_posts()){

        while($itempostloop->have_posts()){
            $itempostloop->the_post();
            ?>
                <h3><?php the_title(); ?></h3>
                <?php the_post_thumbnail() ?>
                <p><?php the_excerpt(); ?></p>
            <?php
        }
        wp_reset_postdata();

    }
    else {
        # code...
        echo "Nothing found in this post type";
    }
}





/***hook into the init action and call m4_create_item_taxonomies when it fires ****/

add_action( 'init', 'm4_create_item_taxonomies', 0 );


/*********create two taxonomies, Items and tag for the post type "Items"**********/

function m4_create_item_taxonomies() { // Add new taxonomy, make it hierarchical (like categories)
	
	$labels = array(
		'name'              => _x( 'Category Items', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Category Item', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Item', 'textdomain' ),
		'all_items'         => __( 'All Item', 'textdomain' ),
		'parent_item'       => __( 'Parent Item', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Item:', 'textdomain' ),
		'edit_item'         => __( 'Edit Item', 'textdomain' ),
		'update_item'       => __( 'Update Item', 'textdomain' ),
		'add_new_item'      => __( 'Add New Item', 'textdomain' ),
		'new_item_name'     => __( 'New Item Name', 'textdomain' ),
		'menu_name'         => __( 'Category Items', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'item' ),
	);

	register_taxonomy( 'item', array( 'item_custom_post' ), $args );

    // Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Tag Items', 'taxonomy general name', 'textdomain' ),
		'singular_name'              => _x( 'Tag Item', 'taxonomy singular name', 'textdomain' ),
		'search_items'               => __( 'Search Tag Items', 'textdomain' ),
		'popular_items'              => __( 'Popular Tag Items', 'textdomain' ),
		'all_items'                  => __( 'All Tag Items', 'textdomain' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Tag Item', 'textdomain' ),
		'update_item'                => __( 'Update Tag Item', 'textdomain' ),
		'add_new_item'               => __( 'Add New Tag Item', 'textdomain' ),
		'new_item_name'              => __( 'New Tag Item Name', 'textdomain' ),
		'separate_items_with_commas' => __( 'Separate tag item with commas', 'textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove Tag Items', 'textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used tag items', 'textdomain' ),
		'not_found'                  => __( 'No tag items found.', 'textdomain' ),
		'menu_name'                  => __( 'Tag Items', 'textdomain' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'tag items' ),
	);

	register_taxonomy( 'tag-item', 'item_custom_post', $args );
}






/************************Apply this only on a specific post type ***********************/

function m4_filter_item_by_taxonomies( $post_type, $which ) {

	// Apply this only on a specific post type
	if ( 'item_custom_post' !== $post_type )
		return;

	// A list of taxonomy slugs to filter by
	$taxonomies = array( 'item', 'tag-item' );

	foreach ( $taxonomies as $taxonomy_slug ) {

		// Retrieve taxonomy data
		$taxonomy_obj = get_taxonomy( $taxonomy_slug );
		$taxonomy_name = $taxonomy_obj->labels->name;

		// Retrieve taxonomy terms
		$terms = get_terms( $taxonomy_slug );

		// Display filter HTML
		echo "<select name='{$taxonomy_slug}' id='{$taxonomy_slug}' class='postform'>";
		echo '<option value="">' . sprintf( esc_html__( 'Show All %s', 'text_domain' ), $taxonomy_name ) . '</option>';
		foreach ( $terms as $term ) {
			printf(
				'<option value="%1$s" %2$s>%3$s (%4$s)</option>',
				$term->slug,
				( ( isset( $_GET[$taxonomy_slug] ) && ( $_GET[$taxonomy_slug] == $term->slug ) ) ? ' selected="selected"' : '' ),
				$term->name,
				$term->count
			);
		}
		echo '</select>';
	}

}
add_action( 'restrict_manage_posts', 'm4_filter_item_by_taxonomies' , 10, 2);