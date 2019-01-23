<?php

function kda_customize_register($wp_customize)
{

    /* Site title and description */
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';

    /* Color */
    $wp_customize->add_section('colors', array(
        'title' => 'Colors',
        'priority' => 30,
    ));
    $wp_customize->add_setting('background_color', array(
        'default' => '#FFFFFF',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_color', array(
        'label' => 'Background Color',
        'section' => 'colors',
        'settings' => 'background_color',
    )));

    /* About me */
    $wp_customize->add_section('about_me', array(
        'title' => 'Over mij',
        'priority' => 30,
    ));
    $wp_customize->add_setting('about_me_image', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_me_image', array(
        'label' => 'Foto',
        'section' => 'about_me',
        'settings' => 'about_me_image',
    )));
    $wp_customize->add_setting('left_column', array(
        'default' => 'placeholder',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('left_column_control', array(
        'label' => 'Linker kolom',
        'type' => 'textarea',
        'section' => 'about_me',
        'settings' => 'left_column',
    ));
    $wp_customize->add_setting('right_column', array(
        'default' => 'placeholder',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('right_column_control', array(
        'label' => 'Rechter kolom',
        'type' => 'textarea',
        'section' => 'about_me',
        'settings' => 'right_column',
    ));
}

add_action('customize_register', 'kda_customize_register');

function cd_customizer()
{
    wp_enqueue_script('cd_customizer', get_template_directory_uri() . '/js/customizer.js',
        array('jquery', 'customize-preview'), '', true);
}

add_action('customize_preview_init', 'cd_customizer');
