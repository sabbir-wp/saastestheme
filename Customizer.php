<?php
// Saas Customizer
function saas_customize_register( $wp_customize ) {

    // Add Panel
    $wp_customize->add_panel( 'saas_settings', array(
        'title'       => __( 'Saas Settings', 'textdomain' ),
        'description' => '<p>Include HTML tags such as.</p>',
        'priority'    => 10,
    ) );

    // Add Section
    $wp_customize->add_section( 'saas_colors', array(
        'title' => 'Colors',
        'panel' => 'saas_settings',
    ) );

    // Add Setting
    $wp_customize->add_setting( 'saas_nav_bg_color', array(
        'type'              => 'theme_mod', // or 'option'
        'capability'        => 'edit_theme_options',
        'default'           => 'linear-gradient(135deg, #084afd, #8275fa);',
        'transport'         => 'refresh', // or 'postMessage'
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    // Add Control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'saas_nav_bg_color', array(
        'label'   => __( 'Menu Background', 'textdomain' ),
        'section' => 'saas_colors',
        'type'    => 'color',
    ) ) );

     // Add Setting
     $wp_customize->add_setting( 'saas_bodybg_bg_color', array(
        'type'              => 'theme_mod', // or 'option'
        'capability'        => 'edit_theme_options',
        'default'           => 'linear-gradient(135deg, #084afd, #8275fa);',
        'transport'         => 'refresh', // or 'postMessage'
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    // Add Control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'saas_bodybg_bg_color', array(
        'label'   => __( 'body Background', 'textdomain' ),
        'section' => 'saas_colors',
        'type'    => 'color',
    ) ) );


  
        // Add Setting for Featured Box Title 1
        $wp_customize->add_setting( 'saas_featured_block_1', array(
            'type'              => 'option',
            'capability'        => 'edit_theme_options',
            'default'           => 'Home',
            'transport'         => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
    
        // Add Control for Featured Box Title 1
        $wp_customize->add_control('saas_featured_block_1', array(
            'label'   => __( 'Featured Box Title 1', 'WordPress' ),
            'section' => 'saas_text',
            'type'    => 'text',
        ));
    
        // Add Setting for Featured Box Title 2
        $wp_customize->add_setting( 'saas_featured_block_2', array(
            'type'              => 'option',
            'capability'        => 'edit_theme_options',
            'default'           => 'Menu 1',
            'transport'         => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
    
        // Add Control for Featured Box Title 2
        $wp_customize->add_control('saas_featured_block_2', array(
            'label'   => __( 'Featured Box Title 2', 'Categorized' ),
            'section' => 'saas_text',
            'type'    => 'text',
        ));
    
        // Add Setting for Featured Box Title 3
        $wp_customize->add_setting( 'saas_featured_block_3', array(
            'type'              => 'option',
            'capability'        => 'edit_theme_options',
            'default'           => 'Menu 2',
            'transport'         => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
    
        // Add Control for Featured Box Title 3
        $wp_customize->add_control('saas_featured_block_3', array(
            'label'   => __( 'Featured Box Title 3', 'Subscribers' ),
            'section' => 'saas_text',
            'type'    => 'text',
        ));
   

    
}

add_action( 'customize_register', 'saas_customize_register' );
