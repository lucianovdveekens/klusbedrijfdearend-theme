<?php 

function widget_scripts() {
	wp_enqueue_script('mediaUpload', get_template_directory_uri() . '/inc/media-upload.js');
	wp_enqueue_style('widgetStyle', get_template_directory_uri() . '/inc/widgets.css');
}

add_action('admin_enqueue_scripts', 'widget_scripts');

// Use javascript's console.log() to debug PHP
function console_log($data) 
{
	echo '<script>';
	echo 'console.log('. json_encode( $data ) .')';
	echo '</script>';
}