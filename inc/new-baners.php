<?php
/**
 * Новые банеры
 */

defined( 'ABSPATH' ) || exit;

class NewBanersWidget extends WP_Widget { 

	function __construct() {
		parent::__construct(
			'newbaners', 
			'Банер', 
			array( 'description' => 'Новые банеры на главной' ) 
		);
	} 

	public function widget( $main_args, $new_param ) {
		?>
            <a class="ds16-link" href="<?php echo esc_url($new_param['url']);?>">
                <div class="ds16-new-baners">
		            <h5><?php echo esc_html($new_param['txt']);?></h5>
	            </div>			 
		    </a>

        <?php
	} 

	public function form( $new_param ) {
		        
        if ( isset( $new_param[ 'txt' ] ) ) {
			$txt = $new_param[ 'txt' ];
		}

        if ( isset( $new_param[ 'url' ] ) ) {
			$url = $new_param[ 'url' ];
		}
		?>

       
        <p>
			<label for="<?php echo $this->get_field_id( 'txt' ); ?>">Текст на банере</label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'txt' ); ?>" name="<?php echo $this->get_field_name( 'txt' ); ?>" type="text" value="<?php echo esc_attr( $txt ); ?>" />
		</p>

        <p>
			<label for="<?php echo $this->get_field_id( 'url' ); ?>">Ссылка с банера (url)</label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'url' ); ?>" name="<?php echo $this->get_field_name( 'url' ); ?>" type="url" value="<?php echo esc_attr( $url ); ?>" />
		</p>		
		<?php 
	} 
	
	public function update( $new_instance, $old_instance ) {
		$new_param = array();	
        $new_param['txt'] = ( ! empty( $new_instance['txt'] ) ) ? strip_tags( $new_instance['txt'] ) : '';
        $new_param['url'] = ( ! empty( $new_instance['url'] ) ) ? strip_tags( $new_instance['url'] ) : '';
		return $new_param;
	}
} 

function ds16_new_baners_widget_load() {
	register_widget( 'NewBanersWidget' );
}
add_action( 'widgets_init', 'ds16_new_baners_widget_load' );

?>