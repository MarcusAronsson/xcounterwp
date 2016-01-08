<?php


function wibl_setup_theme() {
    register_nav_menus( array(
        'primary' => __( 'Primary menu', 'wibl' ),
        'footer' => __( 'Footer menu', 'wibl' )
    ) );

    add_theme_support( 'post-formats', array(
        'image', 'video', 'gallery'
    ) );

    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'title-tag' );

    add_theme_support( 'custom-background' );

}
add_action( 'after_setup_theme', 'wibl_setup_theme' );

function wibl_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Barside', 'wibl' ),
        'id' => 'sidebar-1'
    ) );
}
add_action( 'widgets_init', 'wibl_widgets_init' );

function wibl_enqueue_scrips() {

    //bootstrap css
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );

    //style.css
    wp_enqueue_style( 'default-style', get_stylesheet_uri() );

    //bootstrap.js
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap-min.js', array( 'jquery' ) );

}
add_action( 'wp_enqueue_scripts', 'wibl_enqueue_scrips' );

//Customizer
require get_template_directory() . '/inc/customizer.php';

// Widgets
require get_template_directory() . '/inc/widgets/init.php';