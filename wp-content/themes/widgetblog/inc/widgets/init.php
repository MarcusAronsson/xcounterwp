<?php

// Customer Widget
require get_template_directory() . '/inc/widgets/customers-widget.php';

// Services widget
require get_template_directory() . '/inc/widgets/services-widget.php';

function wibl_register_widgets() {

    register_widget ( 'Customers_Widget' );
    register_widget( 'Services_Widget' );

    $sidebars = array(
        'sidebar-customers-section' => __( 'Customers Section Widgets', 'wibl' ),
        'sidebar-services-section' => __( 'Services Section Widgets', 'wibl' ),
    );

    foreach ( $sidebars as $id => $name ) {
        register_sidebar( array(
            'name' => $name,
            'id' => $id,
            'before_widget' => '',
            'after_widget' => ''
        ) );
    }
}
add_action( 'widgets_init', 'wibl_register_widgets' );

function wibl_widget_scripts() {
    wp_enqueue_media();
    wp_enqueue_script( 'wibl-widget-js', get_template_directory_uri() . '/assets/js/widgets.js', array( 'jquery' ), '1', true );
}
add_action( 'admin_enqueue_scripts', 'wibl_widget_scripts' );