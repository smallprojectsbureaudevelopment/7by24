<?php
/**
 * The template for Header.
 *
 * @package Simon WP Framework
 * @since Simon WP Framework 1.0
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title> 7by24<?php wp_title(); ?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">  -->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    
<?php wp_head(); ?>

<style>
body {
    background-image: url(<?php the_field('page_background'); ?>);
    background-size: cover;
    background-repeat: no-repeat;
}
</style>
    
<?php if(stripos($_SERVER['HTTP_USER_AGENT'],"Android")) {
     echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/css/android.css">';
 } else {
     echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/css/devices.css">';
 }
?>
    
</head>
<body <?php body_class(); ?>>
<div class="to-top-jquery"><a href="#" onclick="totop();"><img src="<?php bloginfo('template_directory') ?>/images/to-top-jquery@2x.png" width="30" height="30" /></a></div>
<div class="outer_wrap">
<div class="outer_header_wrap">
  <div class="inner_header_wrap">
    <div class="flex_100">
      <div id="header">
          <div id="lang-switch"><?php if ( function_exists( 'the_msls' ) ) the_msls(); ?></div>
          <div id="top-banner">
              <div id="banner-text">
             <p><?php the_field('top_banner'); ?></p>  
                </div>
            <?php if (is_front_page() OR is_page_template('pinless-page.php') OR is_page_template('rates-page.php')) { ?>
          <div id="f-f"><?php putRevSlider("friends-and-family") ?></div>
          <?php } ?>
          </div>

        <div class="flex_50">
            
         <div id="logo"><a href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/Logo-Main.png" /></a></div>
        </div>
        <div class="flex_50">
          <nav>
            <div id="navigation" class="flex_100 right">
            <a href="#" id="pull">MENU</a>
              <div class="clear"></div>
                            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            </div>
          </nav>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
</div>
