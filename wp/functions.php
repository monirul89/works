<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
add_theme_support('title-tag');

function theshoptd_scripts(){
//    For css
    wp_enqueue_style('bootstrap_css', get_theme_file_uri('/assets/css/bootstrap.css'), array(), 'v3.3.7');
    wp_enqueue_style('bootstrap_css', get_theme_file_uri('/assets/css/bootstrap.css'), array(), 'v3.3.7');
    wp_enqueue_style('style_css', get_theme_file_uri('/assets/css/style.css'), array(), 'v0.0.1');
    wp_enqueue_style('font_awesome', get_theme_file_uri('/assets/css/font-awesome.css'), array(), '4.7.0');
    wp_enqueue_style('popuo_box_css', get_theme_file_uri('/assets/css/popuo-box.css'), array(), 'v0.0.1');
    wp_enqueue_style('jquery_ui1_css', get_theme_file_uri('/assets/css/jquery-ui1.css'), array(), 'v0.0.1');
    
    wp_enqueue_style('stylesheet', get_stylesheet_uri());

    
//    For js
//    wp_enqueue_script('jquery_min', get_theme_file_uri('/assets/js/jquery-2.1.4.min.js'), array(), 'v2.1.4', true);
//    wp_enqueue_script('jquery_magnific_popup', get_theme_file_uri('/assets/js/jquery.magnific-popup.js'), array(), 'v0.9.9', true);
//    wp_enqueue_script('minicart_js', get_theme_file_uri('/assets/js/minicart.js'), array(), '3.0.6', true);
//    wp_enqueue_script('jquery_ui_js', get_theme_file_uri('/assets/js/jquery-ui.js'), array(), 'v1.9.2', true);
//    wp_enqueue_script('jquery_flexisel_js', get_theme_file_uri('/assets/js/jquery.flexisel.js'), array(), '1.0.0', true);
//    wp_enqueue_script('SmoothScroll_min', get_theme_file_uri('/assets/js/SmoothScroll.min.js'), array(), 'v1.2.1', true);
//    wp_enqueue_script('move_top', get_theme_file_uri('/assets/js/move-top.js'), array(), '1.2', true);
//    wp_enqueue_script('easing', get_theme_file_uri('/assets/js/easing.js'), array(), 'v1.1.2', true);
//    wp_enqueue_script('bootstrap_js', get_theme_file_uri('/assets/js/bootstrap.js'), array(), 'v3.3.7', true);
//    wp_enqueue_script('wp_embed_min', get_theme_file_uri('/assets/js/wp-embed.min.js'), array(), 'v3.3.7', true);
}
add_action('wp_enqueue_scripts', 'theshoptd_scripts');
