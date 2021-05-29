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
 * Блок приветствия на главной
 */
require 'inc/welcome.php';

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

/**
 * Банеры в сайтбаре
 */
require 'inc/baners.php';

/**
 * Место для плагина слабовидящих
 */

function newsup_header_section()
{
?>
<div class="mg-head-detail hidden-xs">
    <div class="container-fluid">
        <div class="row">
            <?php
            $header_social_icon_enable = esc_attr(get_theme_mod('header_social_icon_enable','true'));
            $newsup_header_fb_link = get_theme_mod('newsup_header_fb_link');
            $newsup_header_fb_target = esc_attr(get_theme_mod('newsup_header_fb_target','true'));
            $newsup_header_twt_link = get_theme_mod('newsup_header_twt_link');
            $newsup_header_twt_target = esc_attr(get_theme_mod('newsup_header_twt_target','true'));
            $newsup_header_lnkd_link = get_theme_mod('newsup_header_lnkd_link');
            $newsup_header_lnkd_target = esc_attr(get_theme_mod('newsup_header_lnkd_target','true'));
            $newsup_header_insta_link = get_theme_mod('newsup_header_insta_link');
            $newsup_insta_insta_target = esc_attr(get_theme_mod('newsup_insta_insta_target','true'));
            $newsup_header_youtube_link = get_theme_mod('newsup_header_youtube_link');
            $newsup_header_youtube_target = esc_attr(get_theme_mod('newsup_header_youtube_target','true'));
            $newsup_header_pintrest_link = get_theme_mod('newsup_header_pintrest_link');
            $newsup_header_pintrest_target = esc_attr(get_theme_mod('newsup_header_pintrest_target','true'));
            $newsup_header_telegram_link = get_theme_mod('newsup_header_tele_link');
            $newsup_header_telegram_target = esc_attr(get_theme_mod('newsup_header_telegram_target','true'));
              ?>
            <div class="col-md-6 col-xs-12">
                <ul class="info-left">
                    <?php newsup_date_display_type(); ?>
                </ul>
            </div>
            <?php 
            if($header_social_icon_enable == true)
            {
            ?>
            <div class="col-md-6 col-xs-12">
                <ul class="mg-social info-right">
                    
                      <?php if($newsup_header_fb_link !=''){ ?>
                      <a <?php if($newsup_header_fb_target) { ?> target="_blank" <?php } ?>href="<?php echo esc_url($newsup_header_fb_link); ?>">
                      <li><span class="icon-soci facebook"><i class="fa fa-facebook"></i></span> </li></a>
                      <?php } ?>
                      <?php if($newsup_header_twt_link !=''){ ?>
                      <a <?php if($newsup_header_twt_target) { ?>target="_blank" <?php } ?>href="<?php echo esc_url($newsup_header_twt_link);?>">
                      <li><span class="icon-soci twitter"><i class="fa fa-twitter"></i></span></li></a>
                      <?php } ?>
                      <?php if($newsup_header_lnkd_link !=''){ ?>
                      <a <?php if($newsup_header_lnkd_target) { ?>target="_blank" <?php } ?> href="<?php echo esc_url($newsup_header_lnkd_link); ?>">
                      <li><span class="icon-soci linkedin"><i class="fa fa-linkedin"></i></span></li></a>
                      <?php } ?>
                      <?php if($newsup_header_insta_link !=''){ ?>
                      <a <?php if($newsup_insta_insta_target) { ?>target="_blank" <?php } ?> href="<?php echo esc_url($newsup_header_insta_link); ?>">
                      <li><span class="icon-soci instagram"><i class="fa fa-instagram"></i></span></li></a>
                      <?php } ?>
                      <?php if($newsup_header_youtube_link !=''){ ?>
                      <a <?php if($newsup_header_youtube_target) { ?>target="_blank" <?php } ?> href="<?php echo esc_url($newsup_header_youtube_link); ?>">
                      <li><span class="icon-soci youtube"><i class="fa fa-youtube"></i></span></li></a>
                      <?php } ?>
                       <?php if($newsup_header_pintrest_link !=''){ ?>
                      <a <?php if($newsup_header_pintrest_target) { ?>target="_blank" <?php } ?> href="<?php echo esc_url($newsup_header_pintrest_link); ?>">
                      <li><span class="icon-soci pinterest"><i class="fa fa-pinterest-p"></i></span></li></a>
                      <?php } ?> 
                      <?php if($newsup_header_telegram_link !=''){ ?>
                      <a <?php if($newsup_header_telegram_target) { ?>target="_blank" <?php } ?> href="<?php echo esc_url($newsup_header_telegram_link); ?>">
                      <li><span class="icon-soci telegram"><i class="fa fa-telegram"></i></span></li></a>
                      <?php } ?>
                </ul>
				<div class="ds16-plagin-viwe">
				<?php echo do_shortcode( '[bvi text="Версия для слабовидящих"]' ); ?>	
				</div>
            </div>
            <?php }?>
        </div>
    </div>
</div>
<?php 
}

/**
 * Секция Документация
 */

 function ds16_front_page_document_section() {
    get_template_part( 'inc/documents' ); 
 } 

 add_action('ds16_action_front_page_document_section', 'ds16_front_page_document_section', 10);

/**
 * Регистрация меню для раздела документации
 */

add_action( 'after_setup_theme', 'ds16_register_nav_menu' );
function ds16_register_nav_menu() {
	register_nav_menu( 'document_menu_left', 'Document Menu Left' );
    register_nav_menu( 'document_menu_center', 'Document Menu Center' );
	register_nav_menu( 'document_menu_right', 'Document Menu Right' );

	register_nav_menu( 'document_menu_sitebar', 'Document Menu Sitebar' );

}

/**	
 * Для раздела документации, для меню (левый, центральный, правый )
 */

function ds16_register_doc_left_widgets(){
	register_sidebar( array(
		'name' => 'Documentation Left',
		'id' => 'documentation-left',
		'before_widget' => '',
		'after_widget' => '',
		'description' => 'Документация (левый)',
	) );
}
add_action( 'widgets_init', 'ds16_register_doc_left_widgets' );

function ds16_register_doc_center_widgets(){
	register_sidebar( array(
		'name' => 'Documentation Center',
		'id' => 'documentation-center',
		'before_widget' => '',
		'after_widget' => '',
		'description' => 'Документация (центр)',
	) );
}
add_action( 'widgets_init', 'ds16_register_doc_center_widgets' );


function ds16_register_doc_right_widgets(){
	register_sidebar( array(
		'name' => 'Documentation Right',
		'id' => 'documentation-right',
		'before_widget' => '',
		'after_widget' => '',
		'description' => 'Документация (правый)',
	) );
}
add_action( 'widgets_init', 'ds16_register_doc_right_widgets' );

/**
 * Для блока информация и объявления
 */

add_action('init', 'ds16_top_section_info');
function ds16_top_section_info(){
	$labels = array(
		'name'               => 'Информация', 
		'singular_name'      => 'Информация', 
		'add_new'            => 'Добавить новую',
		'add_new_item'       => 'Добавить новую информацию',
		'edit_item'          => 'Редактировать информацию',
		'new_item'           => 'Новая информация',
		'view_item'          => 'Посмотреть информацию',
		'search_items'       => 'Найти информацию',
		'not_found'          => 'Информации не найдено',
		'not_found_in_trash' => 'В корзине информации не найдено',
		'parent_item_colon'  => '',
		'menu_name'          => 'Информация'
	  );
	 
	  $args = array(
		'labels' => $labels,
		'public' => true, 
		'show_ui' => true, 
		'has_archive' => true, 
		'menu_icon' => 'dashicons-media-document', 
		'menu_position' => 20, 
		'supports' => array( 'title', 'editor')
	);	
	register_post_type('top_section_info', $args  );
} 

/**
 * Блок слайдера
 */
function ds16_slider_block(){
	?>
	<div class="ds16-slider-block">
		<div class="mg-sec-title">
            <h4>Актуально</h4>
        </div>  
	<?php echo do_shortcode('[metaslider id="135"]'); ?>
	</div>

	<?
}
add_action( 'ds16_action_slider_block', 'ds16_slider_block' );

/**
 * Направление деятельности
 */
function ds16_front_page_direction_of_activity_section() {
    get_template_part( 'inc/direction','activity' ); 
 } 


add_action('ds16_action_front_page_direction_of_activity_section','ds16_front_page_direction_of_activity_section',10); 

/**	
 * Для раздела Направления деятельности, для меню (1, 2, 3, 4 )
 */

function ds16_register_direction_1(){
	register_sidebar( array(
		'name' => 'Direction-1',
		'id' => 'direction-1',
		'before_widget' => '',
		'after_widget' => '',
		'description' => 'Направление деятельности 1',
	) );
}
add_action( 'widgets_init', 'ds16_register_direction_1' );

function ds16_register_direction_2(){
	register_sidebar( array(
		'name' => 'Direction-2',
		'id' => 'direction-2',
		'before_widget' => '',
		'after_widget' => '',
		'description' => 'Направление деятельности 2',
	) );
}
add_action( 'widgets_init', 'ds16_register_direction_2' );


function ds16_register_direction_3(){
	register_sidebar( array(
		'name' => 'Direction-3',
		'id' => 'direction-3',
		'before_widget' => '',
		'after_widget' => '',
		'description' => 'Направление деятельности 3',
	) );
}
add_action( 'widgets_init', 'ds16_register_direction_3' );

function ds16_register_direction_4(){
	register_sidebar( array(
		'name' => 'Direction-4',
		'id' => 'direction-4',
		'before_widget' => '',
		'after_widget' => '',
		'description' => 'Направление деятельности 4',
	) );
}
add_action( 'widgets_init', 'ds16_register_direction_4' );


/**
 * Банеры в на главной
 */
require 'inc/main-baners.php';

/**
 * Важные направления
 */
function ds16_front_page_important_section() {
    get_template_part( 'inc/important' ); 
 } 


add_action('ds16_action_front_page_direction_of_activity_section','ds16_front_page_important_section',10); 

/**	
 * Для раздела Важные направления, для меню (1, 2, 3, 4 )
 */

function ds16_register_important_1(){
	register_sidebar( array(
		'name' => 'Important-1',
		'id' => 'important-1',
		'before_widget' => '',
		'after_widget' => '',
		'description' => 'Важные направления 1',
	) );
}
add_action( 'widgets_init', 'ds16_register_important_1' );

function ds16_register_important_2(){
	register_sidebar( array(
		'name' => 'Important-2',
		'id' => 'important-2',
		'before_widget' => '',
		'after_widget' => '',
		'description' => 'Важные направления 2',
	) );
}
add_action( 'widgets_init', 'ds16_register_important_2' );


function ds16_register_important_3(){
	register_sidebar( array(
		'name' => 'Important-3',
		'id' => 'important-3',
		'before_widget' => '',
		'after_widget' => '',
		'description' => 'Важные направления 3',
	) );
}
add_action( 'widgets_init', 'ds16_register_important_3' );

function ds16_register_important_4(){
	register_sidebar( array(
		'name' => 'Important-4',
		'id' => 'important-4',
		'before_widget' => '',
		'after_widget' => '',
		'description' => 'Важные направления 4',
	) );
}
add_action( 'widgets_init', 'ds16_register_important_4' );


?>
