<?php
/**
 * The template for displaying the content.
 * @package Newsup
 */
?>
<?php // do_action('ds16_action_slider_block');?>
    <div class="ds16-mg-sec-title" id="ds16-news-block">
        <div class="mg-sec-title">
            <h4>Новости</h4>
        </div> 
    </div>  
<div id="grid" class="row" >
    
     <?php while(have_posts()){ the_post();  
     $newsup_content_layout = esc_attr(get_theme_mod('newsup_content_layout','align-content-right')); ?>
    <div id="post-<?php the_ID(); ?>" <?php if($newsup_content_layout == "grid-fullwidth") { echo post_class('col-md-4'); } else { echo post_class('col-md-6'); } ?>>
       <!-- mg-posts-sec mg-posts-modul-6 -->
            <div class="mg-blog-post-box"> 
                 <?php newsup_post_image_display_type($post); ?>
                <article class="small">
                    <div class="mg-blog-category">
                            <?php newsup_post_categories(); ?> 
                    </div>
                    <h4 class="entry-title title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                    <?php newsup_post_meta(); ?>
                    <p><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
                </article>
            </div>
        </div>
        <?php } ?>
        <div class="col-md-12 text-center d-md-flex justify-content-center">
            <?php //Previous / next page navigation
                    the_posts_pagination( array(
                    'prev_text'          => '<i class="fa fa-angle-left"></i>',
                    'next_text'          => '<i class="fa fa-angle-right"></i>',
                    ) ); 
            ?>
        </div>
</div>