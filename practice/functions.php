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
    add_theme_support('custom-background');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_post_type_support('page', 'post-formats');
    add_theme_support('post-formats', array('aside', 'gallery'));
    
    register_nav_menu('primary', 'Top menu');
    register_nav_menu('footer-menu', 'Footer menu');
}
add_action('init', 'pactice_support');
