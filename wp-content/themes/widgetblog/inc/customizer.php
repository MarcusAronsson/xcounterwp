<?php

/**
 * Register customizer
 *
 * @param $wp_customize WP_Customize_Manager
 */

function wibl_customizer_register( $wp_customize ) {

    /**
     * ----------------------------------------
     * GENERAL PANEL
     * ----------------------------------------
     */

    $wp_customize->add_panel( 'wibl_general_panel', array(
        'priority' => 1,
        'capability' => 'edit_theme_options',
        'title' => __( 'General Options', 'wibl' )
    ) );

    // Head section
    $wp_customize->add_section( 'wibl_general_head', array(
        'priority' => 1,
        'panel' => 'wibl_general_panel',
        'title' => __( 'Head', 'wibl' )
    ) );

    //Setting på section
    $wp_customize->add_setting( 'wibl_general_head_title', array(
        'sanitize_callback' => 'wibl_sanitize_text'
    ) );

    //Asigna en control till vår setting

    //Title
    $wp_customize->add_control( 'wibl_general_head_title', array(
        'label' => __( 'Title', 'wibl' ),
        'section' => 'wibl_general_head',
        'setting' => 'wibl_general_head_title'
    ) );

    //Subtitle - setting
    $wp_customize->add_setting( 'wibl_general_head_subtitle', array(
        'sanitize_callback' => 'wibl_sanitize_text'
    ) );

    //subtitle - control
    $wp_customize->add_control( 'wibl_general_head_subtitle', array(
        'label' => __( 'Subtitle', 'wibl' ),
        'section' => 'wibl_general_head',
        'setting' => 'wibl_general_head_subtitle'
    ) );

    //Head logo
    $wp_customize->add_setting( 'wibl_general_head_logo', array(
        'sanitize_callback'=> 'esc_url_raw'
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize ,
        'wibl_general_head_logo',
        array(
            'label' => __( 'Logo', 'wibl' ),
            'section' => 'wibl_general_head',
            'setting' => 'wibl_general_head_logo'
        )
    ) );


    /**
     * Social section
     */

    // Social section
    $wp_customize->add_section( 'wibl_general_social', array(
        'priority' => 1,
        'panel' => 'wibl_general_panel',
        'title' => __( 'Social', 'wibl' )
    ) );

    //facebook link
    $wp_customize->add_setting( 'wibl_general_social_facebook', array( 'sanitize_callback' => 'esc_url_raw', 'default' => '#' ) );
    $wp_customize->add_control( 'wibl_general_social_facebook', array(
        'label' => __( 'Facebook Link', 'wibl' ),
        'section' => 'wibl_general_social',
        'setting' => 'wibl_general_social_facebook'
    ) );

    //LinkedIn link
    $wp_customize->add_setting( 'wibl_general_social_linkedin', array( 'sanitize_callback' => 'esc_url_raw', 'default' => '#' ) );
    $wp_customize->add_control( 'wibl_general_social_linkedin', array(
        'label' => __( 'LinkedIn Link', 'wibl' ),
        'section' => 'wibl_general_social',
        'setting' => 'wibl_general_social_linkedin'
    ) );

    //Instagram link
    $wp_customize->add_setting( 'wibl_general_social_instagram', array( 'sanitize_callback' => 'esc_url_raw', 'default' => '#' ) );
    $wp_customize->add_control( 'wibl_general_social_instagram', array(
        'label' => __( 'Instagram Link', 'wibl' ),
        'section' => 'wibl_general_social',
        'setting' => 'wibl_general_social_instagram'
    ) );

    /**
     *----------------------------------------
     * CUSTOMERS PANEL
     *----------------------------------------
     */

    $wp_customize->add_panel( 'wibl_customers_panel', array(
        'priority' => 32,
        'capability' => 'edit_theme_options',
        'title' => __( 'Customers Section', 'wibl' )
    ) );

    $wp_customize->add_section( 'wibl_customers_content', array(
        'priority' => 1,
        'title' => __( 'Content', 'wibl' ),
        'panel' => 'wibl_customers_panel'
    ) );

    $wp_customize->add_setting( 'wibl_customers_content_title', array( 'sanitize_callback' => 'wibl_sanitize_text') );
    $wp_customize->add_control( 'wibl_customers_content_title', array(
        'label' => __( 'Title', 'wibl' ),
        'section' => 'wibl_customers_content',
        'setting' => 'wibl_customers_content_title'
    ) );

    $wp_customize->add_setting( 'wibl_customers_content_subtitle', array( 'sanitize_callback' => 'wibl_sanitize_text') );
    $wp_customize->add_control( 'wibl_customers_content_subtitle', array(
        'label' => __( 'Subtitle', 'wibl' ),
        'section' => 'wibl_customers_content',
        'setting' => 'wibl_customers_content_subtitle'
    ) );

}

add_action( 'customize_register', 'wibl_customizer_register' );

function wibl_sanitize_text ( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

function wibl_customize_enqueue_script() {
    wp_enqueue_script( 'wibl-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'jquery' ), 'v1', true );
}
add_action( 'customize_controls_enqueue_scripts', 'wibl_customize_enqueue_script' );