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




/**	
 * Для блока руководителя
 */

function ds16_register_documentation_left_widgets(){
	register_sidebar( array(
		'name' => 'Раздел руководителя',
		'id' => 'ds16_chif',
		'before_widget' => '',
		'after_widget' => '',
		'description' => 'Раздел руководителя',		
	) );
}
add_action( 'widgets_init', 'ds16_register_documentation_left_widgets' );



/**
 * Блок руководителя в сайтбаре
 */

function newsup_banner_tabbed_posts()
{
	?>
		<div class="col-md-4 top-right-area">
			<div class="ds16-tab-content">
				<?php dynamic_sidebar( 'ds16_chif' ); ?>
			</div>
		</div>
		
	<?php
}

/**
 * Банер Руководителя
 */

require 'inc/chif-baner.php';

?>
