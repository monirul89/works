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
    
    the_post_thumbnail( 'medium_large' );
    
    
    register_post_type('notice_board', array(
                'public'    => TRUE,
                'labels'    => array(
                    'name'      => 'Notice Board',
                    'all_items' => 'All Notice',
                    'add_new'   => 'Add New Notice',
                    'add_new_item'  => 'Add New Notice',
                ),
                'menu_icon'     => 'dashicons-align-none',
                'supports'      => array('title','thumbnail', 'editor', 'custom-fields')
    ));
    
    register_post_type('Softtechit-66', array(
            'public'    => TRUE,
            'labels'    =>array(
                'name'      => 'SoftTech IT 66',
                'all_items' => 'All Students',
                'add_new'   => 'Add New Students'
            ),
            'menu_icon'     => get_template_directory_uri().'/images/1902265-20.png'
    ));
}

add_action('init', 'pactice_support');


wp_enqueue_style('style', get_stylesheet_uri());
