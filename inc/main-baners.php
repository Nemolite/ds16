<?php
/**
 * Банеры на главной
 */

defined( 'ABSPATH' ) || exit;

class MainBanersWidget extends WP_Widget {
 
	/*
	 * создание виджета
	 */
	function __construct() {
		parent::__construct(
			'mainbaners', 
			'Банер', // заголовок виджета
			array( 'description' => 'Банеры на главной' ) // описание
		);
	}
 
	/*
	 * фронтэнд виджета
	 */
	public function widget( $main_args, $main_param ) {
		?>
     <div class="ds16-main-baners-sitebar">
		 <a href="<?php echo esc_url($main_param['url']);?>">
			 <img src="<?php echo esc_url($main_param['img']);?>" alt="">
		 </a>
	 </div>
       
        <?php
	}
 
	/*
	 * бэкэнд виджета
	 */
	public function form( $main_param ) {
		        
        if ( isset( $main_param[ 'img' ] ) ) {
			$img = $main_param[ 'img' ];
		}

        if ( isset( $main_param[ 'url' ] ) ) {
			$url = $main_param[ 'url' ];
		}
		?>

       
        <p>
			<label for="<?php echo $this->get_field_id( 'img' ); ?>">Ссылка на изображение 130x90 (url)</label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'img' ); ?>" name="<?php echo $this->get_field_name( 'img' ); ?>" type="url" value="<?php echo esc_attr( $img ); ?>" />
		</p>

        <p>
			<label for="<?php echo $this->get_field_id( 'url' ); ?>">Ссылка с банера (url)</label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'url' ); ?>" name="<?php echo $this->get_field_name( 'url' ); ?>" type="url" value="<?php echo esc_attr( $url ); ?>" />
		</p>		
		<?php 
	}
 
	/*
	 * сохранение настроек виджета
	 */
	public function update( $new_instance, $old_instance ) {
		$main_param = array();	
        $main_param['img'] = ( ! empty( $new_instance['img'] ) ) ? strip_tags( $new_instance['img'] ) : '';
        $main_param['url'] = ( ! empty( $new_instance['url'] ) ) ? strip_tags( $new_instance['url'] ) : '';
		return $main_param;
	}
}
 
/*
 * регистрация виджета
 */
function ds16_main_baners_widget_load() {
	register_widget( 'MainBanersWidget' );
}
add_action( 'widgets_init', 'ds16_main_baners_widget_load' );

?>