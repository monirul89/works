<?php

/*
 * Plugin Name: ACP Plugin
 * Plugin URI:  https://theshoptd.com
 * Description: Advanced Custom Post WordPress Plugin. Advanced custom Post is a free plugin that enables you to add custom to your new custom post.
 * Version:     0.1.0
 * Author:      Monir
 * Author URI:  https://theshoptd.com/me
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Domain Path: /languages
 */

function m4_item_custom_post() {

    register_post_type('item_custom_post', array(
        'labels' => array(
            'name' => 'Items',
            'singular_name' => 'Item',
            'all_items' => 'All Items',
            'add_new' => 'Add New Item',
            'add_new_item' => 'Add Item Post',
        ),
        'public' => true,
        'taxonomies'=> array('category', 'post_tag'),
        'supports' => array('title', 'editor', 'custom-fields', 'post-formats', 'author', 'thumbnail', 'thumbnail', 'excerpt', 'comments'),
    ));
}

add_action('init', 'm4_item_custom_post');

// add_shortcode( 'm4_item', 'm4_item_post' );

function m4_shortcode_init(){
    add_shortcode( 'm4_item', 'm4_shortcode_register' );
}

add_action('init', 'm4_shortcode_init');

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
                <h3><?php the_title() ?></h3>
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

// add_action('init', 'taxonomy_init_invoke' );

//     function taxonomy_init_invoke(){
//         register_taxonomy(
//             'm4_tax', 
//             'item_custom_post', 
//             array(
//                 'label' => __('Item Category'),
//                 // 'rewrite' => array('slug' => 'genre'),        
//                 'hierarchical' => true,
//             )
//         );
//     }


function m4_custom_taxonomy() {

    $labels = array(
        'name' => 'Item Category',
        'singular_name' => 'Item Category',
        'all_items' => 'All Category',
        'add_new_item' => 'Add New Category',
        'new_item_name' => 'New Category Name',
    );

    register_taxonomy('item_tax_post', 'item_custom_post', array(
        'label' => 'Item Category',
        'rewrite' => array('slug' => 'Item Category'),        
        'hierarchical' => true,
        'labels' => $labels,
        'taxonomies'=> array('category', 'post_tag'),
            )
    );
    $item_custom_tags = array(
        'name' => 'Item Tags',
        'singular_name' => 'Item Tag',
        'all_items' => 'All Item Tags',
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Edit Item Tag'),
        'update_item' => __('Update Item Tag'),
        'add_new_item' => __('Add New Item Tag'),
        'new_item_name' => __('New Item Tag Name'),
    );

    register_taxonomy('item_custom_post_tags', 'item_custom_post', array(
        'hierarchical' => false,
        'labels' => $item_custom_tags,
        'rewrite' => array('slug' => 'Item tags'),
    ));
}

add_action('init', 'm4_custom_taxonomy');


// get data




