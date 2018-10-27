<?php

function cd_customizer_settings( $wp_customize ) {
    $wp_customize->add_section( 'cd_colors' , array(
        'title'      => 'Colors',
        'priority'   => 30,
    ));

    $wp_customize->add_setting( 'background_color' , array(
        'default'     => '#FFFFFF',
        'transport'   => 'postMessage',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
        'label'        => 'Background Color',
        'section'    => 'cd_colors',
        'settings'   => 'background_color',
    )));
}

add_action( 'customize_register', 'cd_customizer_settings' );

function cd_customizer() {
    wp_enqueue_script( 'cd_customizer', get_template_directory_uri() . '/js/customizer.js', 
            array( 'jquery', 'customize-preview' ), '', true );
}

add_action( 'customize_preview_init', 'cd_customizer' );