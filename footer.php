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
<?php 
/**
 * hock ds16_front_page_direction_of_activity_section -10
 * hock ds16_front_page_important_section - 20  
 */
do_action('ds16_action_front_page_direction_of_activity_section'); 
?>
 
<?php } ?>
<div class="ds16-yandex-map" id="ds16-yandex-map-block">
    <div class="container-fluid"> 
    <div class="ds16-mg-sec-title">
        <div class="mg-sec-title">
            <h4>Наш адрес</h4>
        </div> 
    </div> 
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa788300af158dcc1aaa609e177ee3130bbc08ce7867e396d25576a968142fa1a&amp;width=100%25&amp;height=350&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>
</div>
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