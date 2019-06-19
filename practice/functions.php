<?php

require_once 'WPDocs_Walker_Nav.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function pactice_support() {
    
    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support('custom-header');
    add_theme_support('title-tag');
    add_theme_support('custom-background');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('post-formats', array('aside', 'gallery', 'audio', 'vedio', 'link', 'image', 'quote', 'status', 'chat'));
    add_post_type_support('page', 'post-formats');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
    register_nav_menu('primary_menu', 'Primary Menu');
    register_nav_menu('footer_menu', 'Footer Menu');

    the_post_thumbnail('medium_large');


    register_post_type('notice_board', array(
        'public' => TRUE,
        'labels' => array(
            'name' => 'Notice Board',
            'all_items' => 'All Notice',
            'add_new' => 'Add New Notice',
            'add_new_item' => 'Add New Notice',
            'featured_image' => 'Slider Image',
            'set_featured_image' => 'Set Slider Image'
        ),
        'menu_icon' => 'dashicons-align-none',
        'supports' => array('title', 'thumbnail', 'editor', 'custom-fields')
    ));

    register_post_type('Softtechit-66', array(
        'public' => TRUE,
        'labels' => array(
            'name' => 'SoftTech IT 66',
            'all_items' => 'All Students',
            'add_new' => 'Add New Students',
            'featured_image' => 'Slider Image',
            'set_featured_image' => 'Set Slider Image'
        ),
        'menu_icon' => get_template_directory_uri() . '/images/1902265-20.png'
    ));
    
    register_post_type('slider-1', array(
            'public'        => TRUE,
            'labels'        => array(
                'name'      => 'Slider',
                'all_items' => 'All Slide',
                'add_new'   => 'Add Slide',
                'add_new_item'=> 'add New Slide',
                'featured_image'=> 'Slide Image',
                'set_featured_image'=> 'Set Slide Image'
            ),
            'menu_icon'     => 'dashicons-welcome-learn-more',
            'supports'      =>array('title', 'editor', 'thumbnail')
    ));
    register_post_type('supper-quility', array(
        'public'        => true,
        'labels'        => array(
            'name'      => 'Super service',
            'all_items' => 'All Qly Service',
            'add_new'   => 'Add New Qly Service'
        ),
        'menu_icon'     => 'dashicons-welcome-learn-more',
        'supports'      => array('title', 'editor', 'thumbnail')
    ));
    
    register_post_type('gallery-1', array(
        'public'        => true,
        'labels'        =>array(
            'name'      => 'Gallery',
            'all_items' => 'All Image',
            'add_new'   => 'Add New Image',
            'add_new_item'  => 'Add New Image',
            'featured_image'=>  'Gallery Image',
            'set_featured_image'=>  'Set Gallery Image'
        ),
        'menu_icon'     =>'dashicons-images-alt2',
        'supports'      =>array('title', 'thumbnail')
    ));
    
    register_post_type('unparallal-service', array(
            'public'        => TRUE,
            'labels'        =>array(
                'name'      => 'Unparalal srv',
                'add_new'   => 'Add New service',
                'all_items' => 'All Service',
                'add_new_item'=> 'Add New Service'
            ),
            'supports'      => array('title', 'editor', 'thumbnail')
    ));
}

// 'after_setup_theme'  hosche hook

add_action('after_setup_theme', 'pactice_support');

function practice_file_enqueue_scripts(){
    wp_enqueue_style('bootstrap-min', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style('custome-css', get_template_directory_uri().'/css/custom.css' );
    wp_enqueue_style('style', get_stylesheet_uri());
    
    wp_enqueue_script('jQuery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js');
    wp_enqueue_script('viewport', get_template_directory_uri().'/js/ie10-viewport-bug-workaround.js');
}
add_action('wp_enqueue_scripts','practice_file_enqueue_scripts');