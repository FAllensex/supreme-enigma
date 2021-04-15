<?php

function kilex_setup(){

//title tag 
add_theme_support( 'title-tag' );
//post Thumbnails 
add_theme_support( 'post-thumbnails' );
//post Format
add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
//html5 support
add_theme_support( 'html5' );
//automatic feed links
add_theme_support( 'automatic-feed-links' );
//custom background
add_theme_support( 'custom-background',$custom_bg_def);
//custom header
add_theme_support( 'custom-header',$custom_header_def );
//custom logo
add_theme_support( 'custom-logo' );
//widgets
add_theme_support( 'customize-selective-refresh-widgets' );
//starter content
add_theme_support( 'starter-content' );
// Dashboard widget
function admin_dashboard_widget(){
    wp_add_dashboard_widget(
        'admin_dashboard_widget',
        'Kilex Theme',
        'admin_dashboard_widget_callback'

    );
}
add_action('wp_dashboard_setup','admin_dashboard_widget');

function admin_dashboard_widget_callback(){
    echo ' Please consider Donating us to help us improve our themes!';
    echo ' and please review us!';
 }

 register_nav_menus(array(
    'top' => __('Top Menu','kilex'),
    'main' => __('Main Menu', 'kilex'),
    'footer' => __('Footer Menu','kilex')
 ));

//custom Header setup

$custom_header_def = array(

    'width' => 1300,
    'height' => 500,
    'flex-width' => true,
    'default-image' => esc_url( get_template_directory_uri() .'/assets/images/header.jpg'),
    'default-text-color' => '000'
    );

$custom_bg_def = array(
    'default-color' => '',
    );

    //enqueue Styles




//close of setup
}
//temis setup
add_action('after_setup_theme','kilex_setup');


// BOOTSTRAP 4.0    
function my_scripts() {
    wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
    wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.3.1.slim.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ),'',true );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

function styles_kilex(){
    wp_enqueue_style('main-css',get_stylesheet_directory_uri().'/style.css',[],time(),'all');


}
add_action('wp_enqueue_scripts','styles_kilex');
    
