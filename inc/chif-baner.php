<?php
/**
 * Widgets for chif
 */

defined( 'ABSPATH' ) || exit;

class chifWidget extends WP_Widget {
 
	/*
	 * создание виджета
	 */
	function __construct() {
		parent::__construct(
			'baner', 
			'Руководитель', // заголовок виджета
			array( 'description' => 'Банер для Руководителя' ) // описание
		);
	}
 
	/*
	 * фронтэнд виджета
	 */
	public function widget( $args, $instance ) {
        ?>
		<div class="ds16-first-post">        
				<div class="mg-sec-title">
                    <h4>Руководитель</h4>
                </div> 
				<img class="ds16-img-chif" src="<?php echo esc_url($instance['img']);?>" class="attachment-colormag-featured-post-medium size-colormag-featured-post-medium wp-post-image" alt="<?php echo __( $instance['title'], 'school2');?>" loading="lazy" title="<?php echo __( $instance['title'], 'school2');?>">
					<h3 class="ds16-entry-title-chif"><?php echo __( $instance['title'], 'school2');?></h3>	
			</div>
        <?php
	}
 
	/*
	 * бэкэнд виджета
	 */
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
        
        if ( isset( $instance[ 'img' ] ) ) {
			$img = $instance[ 'img' ];
		}
       
		?>

        <p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Руководитель</label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
        <p>
			<label for="<?php echo $this->get_field_id( 'img' ); ?>">Ссылка на изображение 200x200 (url)</label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'img' ); ?>" name="<?php echo $this->get_field_name( 'img' ); ?>" type="url" value="<?php echo esc_attr( $img ); ?>" />
		</p>

       		
		<?php 
	}
 
	/*
	 * сохранение настроек виджета
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';	
        $instance['img'] = ( ! empty( $new_instance['img'] ) ) ? strip_tags( $new_instance['img'] ) : '';       
		return $instance;
	}
}
 
/*
 * регистрация виджета
 */
function ds16_chif_baner_widget_load() {
	register_widget( 'chifWidget' );
}
add_action( 'widgets_init', 'ds16_chif_baner_widget_load' );

?>