<?php 
/**
 * The template for the 7by24 Home Page.
 * Template Name: Retailers Page
 *
 * @package Simon WP Framework
 * @since Simon WP Framework 1.0
 */

$bloglang = get_bloginfo( 'language' );

get_header(); ?>

  <div class="inner_wrap">
    <div class="content-wrap">
        <div id="first-message"><?php the_field('first_message'); ?></div>
        <div id="second-message"><?php the_field('second_message'); ?></div>
        <div id="app">
            <div class="benefits">
                <a href="<?php the_field('benefits_pdf'); ?>" class="benefits-push"></a>
                <div class="benefits-line-1"><h2><?php the_field('benefits_line_1'); ?></h2></div>
                <div class="benefits-line-2"><?php the_field('benefits_line_2'); ?></div>
                <div class="benefits-line-3"><?php the_field('benefits_line_3'); ?></div>
            </div>
            <div class="retailers-login">
                <a href="<?php the_field('retailers_login_link'); ?>" class="login-push" target="_blank"></a>
                <div class="benefits-line-1"><h2><?php the_field('login_line_1'); ?></h2></div>
                <div class="login-line-2"><h2><?php the_field('login_line_2'); ?></h2></div>
            </div>
            <div class="retailers-instructions">
                <a href="<?php the_field('store_instructions_pdf'); ?>" class="instructions-push"></a>
                <div class="benefits-line-1"><h2><?php the_field('instructions_line_1'); ?></h2></div>
                <div class="benefits-line-2"><?php the_field('instructions_line_2'); ?></div>
                <div class="benefits-line-3"><?php the_field('instructions_line_3'); ?></div>
            </div>
                <?php if ($bloglang == 'en-US') { ?>
            <div class="acrobat-retailers"><a href="http://get.adobe.com/reader/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/acrobat-reader-button.png" /></a></div>
            <?php } else { ?>
             <div class="acrobat-retailers"><a href="http://get.adobe.com/reader/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/acrobat-reader-button-es.png" /></a></div>           
            <?php } ?>    
        </div>


    </div>
  </div>

</div>
<div class="clear"></div>
<div id="hand-phone"></div>
<?php get_footer(); ?>

