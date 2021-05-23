<?php
/**
 * Дочерняя тема для темы newsup  
 * 
 */

defined( 'ABSPATH' ) || exit;

/**
 * Helper
 */
function show($param){
	echo "<pre>";
	print_r($param);
	echo "</per>";
}

function ds16_scripts_style() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'ds16-style', get_stylesheet_directory_uri() .'/assets/css/ds16.css' );
	wp_enqueue_script( 'ds16-script', get_stylesheet_directory_uri() . '/assets/js/ds16.js', array(), $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'ds16_scripts_style' );



?>
