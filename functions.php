<?php

// STYLES
function kda_enqueue_styles() 
{
	wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.4.1/slick.min.css');
	wp_enqueue_style('slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.4.1/slick-theme.min.css');
	wp_enqueue_style('slick-lightbox-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-lightbox/0.2.12/slick-lightbox.css');
	wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome-css', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css');
	wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'kda_enqueue_styles');

// SCRIPTS
function kda_enqueue_scripts() 
{
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js');

	wp_enqueue_script('bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
	wp_enqueue_script('jquery.easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js');
	wp_enqueue_script('jquery.magnific-popup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js');

	wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.4.1/slick.min.js');
	wp_enqueue_script('slick-lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/slick-lightbox/0.2.12/slick-lightbox.min.js');

	wp_enqueue_script('app', get_template_directory_uri() . '/js/app.js', array(), '1.0', true );
	wp_enqueue_script('contact', get_template_directory_uri() . '/js/contact_me.js');
	wp_enqueue_script('jqBootstrapValidation', get_template_directory_uri() . '/js/jqBootstrapValidation.js');
}

add_action('wp_enqueue_scripts', 'kda_enqueue_scripts');

// MENU
function register_my_menu() 
{
    register_nav_menu('my-menu', __('My Menu'));
}

add_action('init', 'register_my_menu');

// OTHER
require get_template_directory() . '/lib/class-wp-bootstrap-navwalker.php';

require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/helpers.php';