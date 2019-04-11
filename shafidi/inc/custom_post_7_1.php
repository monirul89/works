<?php 

function morderna_custom_post(){
    register_post_type('gallery', array(
    'public' => TRUE,
    'label' => 'gallery',
    'labels' => array(
        'name'=>'Gallery',
        'singular_name'=>'gallery',
        'add_new'=>'Add New'
    ), 'supports'=>array('title','editor','thumbnail')
    ));
//    
//    register_post_type('service', array(
//    'public' => TRUE,
//    'label' => 'service',    
//    'labels' => array(
//        'name'=>'Services',
//        'singular_name'=>'Service',
//        'add_new'=>'Add New'
//    ), 'supports'=>array('title','editor','excerpt','custom-fields')
//    ));
//    
//    register_post_type('protfolio', array(
//    'public' => TRUE,
//    'label' => 'Protfolio',    
//    'labels' => array(
//        'name'=>'Protfolio',
//        'singular_name'=>'protfolio',
//        'add_new'=>'Add New'
//    ), 'supports'=>array('title','editor','excerpt','thumbnail')
//    ));
//    
//    register_post_type('typoservice', array(
//    'public' => TRUE,
//    'label' => 'typography',    
//    'labels' => array(
//        'name'=>'Typographys',
//        'singular_name'=>'Typography',
//        'add_new'=>'Add New'
//    ), 'supports'=>array('title','editor','excerpt','thumbnail')
//    ));
//    
//    register_post_type('typoservice2', array(
//    'public' => TRUE,
//    'label' => 'Typoservice2',    
//    'labels' => array(
//        'name'=>'Typoservice2s',
//        'singular_name'=>'Typoservice2',
//        'add_new'=>'Add New'
//    ), 'supports'=>array('title','editor','excerpt','thumbnail')
//    ));
//    
//    register_post_type('orderlist', array(
//    'public' => TRUE,
//    'label' => 'Orderlist',    
//    'labels' => array(
//        'name'=>'Orderlists',
//        'singular_name'=>'Orderlist',
//        'add_new'=>'Add New'
//    ), 'supports'=>array('title','editor','excerpt','thumbnail')
//    ));
}
add_action('init','morderna_custom_post');





?>
