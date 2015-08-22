<?php 
/**
 * The template for the 7by24 Home Page.
 * Template Name: PIN-LESS Page
 *
 * @package Simon WP Framework
 * @since Simon WP Framework 1.0
 */
get_header(); ?>

  <div class="inner_wrap">
    <div class="content-wrap">
        <div id="first-message"><?php the_field('first_message'); ?></div>
            <div id="second-message"><?php the_field('second_message'); ?></div>
        <div id="app">
            <div class="world-phone"></div>
        </div>
    <div id="right-banners">
            <ul class="app-features">
            <li><img class="app-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/no-wifi.png" /><span><?php the_field('pinless_feature_1'); ?></span></li>
            <li><img class="app-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/easily-access.png" /><span><?php the_field('pinless_feature_2'); ?></span></li>
            <li><img class="app-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/low-rates.png" /><span><?php the_field('pinless_feature_3'); ?></span></li>
            </ul>
        
        <div class="easy-123">
            <div class="easy-123-title"><?php the_field('easy_123_title'); ?></div>
                <table class="easy-123-steps">
                <tr>
                <td><?php the_field('easy_123_step_1'); ?></td><td><?php the_field('easy_123_step_1_text'); ?></td>
                </tr>
                <tr>
                <td><?php the_field('easy_123_step_2'); ?></td><td><?php the_field('easy_123_step_2_text'); ?></td>
                </tr>
                <tr>
                <td><?php the_field('easy_123_step_3'); ?></td><td><?php the_field('easy_123_step_3_text'); ?></td>
                </tr>
                </table>
            <div class="available"><?php the_field('easy_123_available'); ?></div>
            </div>
        </div>

    </div>
  </div>
</div>


<?php get_footer(); ?>

