<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package Newsup
 */
$you_missed_enable = esc_attr(get_theme_mod('you_missed_enable','true'));
            if($you_missed_enable == true){
?>
  <div class="container-fluid mr-bot40 mg-posts-sec-inner">
        <div class="missed-inner">
        <div class="row">
            <?php $you_missed_title = get_theme_mod('you_missed_title', esc_html('You missed','newsup'));
            if($you_missed_title) { ?>
            <div class="col-md-12">
                <div class="mg-sec-title">
                    <!-- mg-sec-title -->
                    <h4><?php echo esc_html($you_missed_title); ?></h4>
                </div>
            </div>
            <?php } 
            $newsup_you_missed_loop = new WP_Query(array( 'post_type' => 'post', 'posts_per_page' => 4, 'order' => 'DESC',  'ignore_sticky_posts' => true));
            if ( $newsup_you_missed_loop->have_posts() ) :
            while ( $newsup_you_missed_loop->have_posts() ) : $newsup_you_missed_loop->the_post(); 
            $url = newsup_get_freatured_image_url($post->ID, 'newsup-featured'); 
              ?>
                <!--col-md-3-->
                <div class="col-md-3 col-sm-6 pulse animated">
               <div class="mg-blog-post-3 minh back-img" 
                            <?php if(has_post_thumbnail()) { ?>
                            style="background-image: url('<?php echo esc_url($url); ?>');" <?php } ?>>
                            <a class="link-div" href="<?php the_permalink(); ?>"></a>
                    <div class="mg-blog-inner">
                      <div class="mg-blog-category">
                      <?php newsup_post_categories(); ?>
                      </div>
                      <h4 class="title"> <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array('before' => 'Permalink to: ','after'  => '') ); ?>"> <?php the_title(); ?></a> </h4>
                      <?php newsup_post_meta(); ?>
                    </div>
                </div>
            </div>
            <!--/col-md-3-->
         <?php endwhile; endif; wp_reset_postdata(); ?>
            

                </div>
            </div>
        </div>
<?php } ?>
<!--==================== FOOTER AREA ====================-->
    <?php $newsup_footer_widget_background = get_theme_mod('newsup_footer_widget_background');
    $newsup_footer_overlay_color = get_theme_mod('newsup_footer_overlay_color'); 
   if($newsup_footer_widget_background != '') { ?>
    <footer style="background-image:url('<?php echo esc_url($newsup_footer_widget_background);?>');">
     <?php } else { ?>
    <footer> 
    <?php } ?>
        <div class="overlay" style="background-color: <?php echo esc_attr($newsup_footer_overlay_color);?>;">
                <!--Start mg-footer-widget-area-->
                 <?php if ( is_active_sidebar( 'footer_widget_area' ) ) { ?>
                <div class="mg-footer-widget-area">
                    <div class="container-fluid">
                        <div class="row">
                          <?php  dynamic_sidebar( 'footer_widget_area' ); ?>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/container-->
                </div>
                 <?php } ?>
                <!--End mg-footer-widget-area-->
                <!--Start mg-footer-widget-area-->
                <div class="mg-footer-bottom-area">
                    <div class="container-fluid">
                        <div class="divide-line"></div>
                        <div class="row align-items-center">
                            <!--col-md-4-->
                            <div class="col-md-6">
                                <div class="ds16-footer-left">
                                    <h4>Детский сад  №16 «Рябинушка</h4>
                        <p>Муниципальное бюджетное дошкольное образовательное учреждение

«Детский сад  №16 «Рябинушка» <br />города Шумерля Чувашской Республики</p>
                                </div>
                            </div>                       

                            <div class="col-md-6 text-right text-xs">
                                <div class="ds16-footer-right">
                                <h4>Наши контакты</h4>
                        <p>
                        429122, Чувашская Республика, г.Шумерля, ул. Советская, д. 18 <br />   
Тел.: 8(83536) 2-42-95<br />
e-mail: ds-16riabinyshka@mail.ru
                        </p>
                                </div>
                                </div>
                            </div>
                            <!--/col-md-4-->  
                            
                        </div>
                        <!--/row-->
                    </div>
                    <!--/container-->
                </div>
                <!--End mg-footer-widget-area-->

                <div class="mg-footer-copyright">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 text-xs">
                                <p>
                                <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'newsup' ) ); ?>">
								<?php
								/* translators: placeholder replaced with string */
								printf( esc_html__( 'Proudly powered by %s', 'newsup' ), 'WordPress' );
								?>
								</a>
								<span class="sep"> | </span>
								<?php
								/* translators: placeholder replaced with string */
								printf( esc_html__( 'Theme: %1$s by %2$s.', 'newsup' ), 'Newsup', '<a href="' . esc_url( __( 'https://themeansar.com/', 'newsup' ) ) . '" rel="designer">Themeansar</a>' );
								?>
								</p>
                            </div>
                            <div class="col-md-6 text-right text-xs">
                            <p>
                                <?php
								/* translators: placeholder replaced with string */
								printf( esc_html__( 'Создание и техническая поддержка сайта:', 'newsup' ));
								?>
                                <a href="<?php echo esc_url( __( 'https://vandraren.ru/', 'newsup' ) ); ?>">
								<?php
								/* translators: placeholder replaced with string */
								printf( esc_html__( '%s - Разработка web-проектов', 'newsup' ), 'VANDRAREN' );
								?>
								</a>
								
								
								</p>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/overlay-->
        </footer>
        <!--/footer-->
    </div>
    <!--/wrapper-->
    <!--Scroll To Top-->
    <a href="#" class="ta_upscr bounceInup animated"><i class="fa fa-angle-up"></i></a>
    <!--/Scroll To Top-->
<!-- /Scroll To Top -->
<?php wp_footer(); ?>
</body>
</html>