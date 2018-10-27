<?php 

// Use javascript's console.log() to debug PHP
function console_log($data) {
	echo '<script>';
	echo 'console.log('. json_encode( $data ) .')';
	echo '</script>';
}