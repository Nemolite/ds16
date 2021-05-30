<?php
/**
 * Блок актуально на главной
 */
?>
<?php
 function newsup_front_page_banner_section()
 {
     if (is_front_page() || is_home()) {
     $newsup_enable_main_slider = newsup_get_option('show_main_news_section');
     $select_vertical_slider_news_category = newsup_get_option('select_vertical_slider_news_category');
     $vertical_slider_number_of_slides = newsup_get_option('vertical_slider_number_of_slides');
     $all_posts_vertical = newsup_get_posts($vertical_slider_number_of_slides, $select_vertical_slider_news_category);
     if ($newsup_enable_main_slider):  

         $main_banner_section_background_image = newsup_get_option('main_banner_section_background_image');
         $main_banner_section_background_image_url = wp_get_attachment_image_src($main_banner_section_background_image, 'full');
     if(!empty($main_banner_section_background_image)){ ?>
         <section class="mg-fea-area over" style="background-image:url('<?php echo esc_url($main_banner_section_background_image_url[0]); ?>');">
     <?php }else{ ?>
         <section class="mg-fea-area">
        
     <?php  } ?>
         <div class="overlay">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-md-8">
                     <div class="ds16-slider-block">
		<div class="mg-sec-title" id="ds16-mg-sec-title">
            <h4>Актуально</h4>
        </div>  
	<?php echo do_shortcode('[metaslider id="135"]'); ?>
	</div>  
                     </div> 
                     <?php do_action('newsup_action_banner_tabbed_posts');?>
                 </div>
             </div>
         </div>
     </section>
     <!--==/ Home Slider ==-->
     <?php endif; ?>
     <!-- end slider-section -->
     <?php }
 }
       
?>         