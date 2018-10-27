<?php

require get_template_directory() . '/widgets/kda-header.php';
require get_template_directory() . '/widgets/kda-about.php';

function kda_widgets_init() {
	register_widget('Kda_Header_Widget');
	register_widget('Kda_About_Widget');
}

add_action('widgets_init', 'kda_widgets_init');

function custom_widget_scripts() {
	wp_enqueue_script('widgetScript', get_template_directory_uri() . '/js/widget.js');
	wp_enqueue_style('widgetStyle', get_template_directory_uri() . '/css/widget.css');
}

add_action('admin_enqueue_scripts', 'custom_widget_scripts');