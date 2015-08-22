<?php 
/**
 * The template for displaying Single Page.
 * Template Name: App Page
 * @package Simon WP Framework
 * @since Simon WP Framework 1.0
 */

$bloglang = get_bloginfo( 'language' );

$Android = false;

$iPhone = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");

if(stripos($_SERVER['HTTP_USER_AGENT'],"Android")) {
    $Android = true;
    } else {
    $Android = false;
    }

 get_header(); ?>

  <div class="inner_wrap">
    <div class="content-wrap">
        <div id="app">
            <div class="phones"></div>
            <div class="download-banner">
                <div class="download-text">
                    <?php the_field('download_text', 5); ?>
                    </div>
                <ul class="stores">
                    
        <?php if ($bloglang == 'en-US') {
            if( $iPad || $iPhone ){ ?>           
                    <li class="apple" style="margin: 0 auto; width: 185px;">
                        <FORM>
<INPUT Type="BUTTON" VALUE="" ONCLICK="window.location.href='https://itunes.apple.com/us/app/7by24/id677629605?mt=8'">
</FORM></li>
                <?php } else if ($Android == 'true') { ?>
                    <li class="android" style="margin: 0 auto; width: 185px;">
                        <INPUT Type="BUTTON" VALUE="" ONCLICK="window.location.href='https://play.google.com/store/apps/details?id=com.by24.voip&referrer=utm_source%3DAndroidPIT%26utm_medium%3DAndroidPIT%26utm_campaign%3DAndroidPIT'">
</FORM></li>
            <?php } else { ?>
    <li class="apple-small" style="float: left; width: 160px; margin-left: 25px;">
                        <FORM>
                            <INPUT Type="BUTTON" VALUE="" ONCLICK="window.location.href='https://itunes.apple.com/us/app/7by24/id677629605?mt=8'">
</FORM></li>

                    <li class="android-small" style="float: right; width: 160px; margin-right: 25px;">
                        <INPUT Type="BUTTON" VALUE="" ONCLICK="window.location.href='https://play.google.com/store/apps/details?id=com.by24.voip&referrer=utm_source%3DAndroidPIT%26utm_medium%3DAndroidPIT%26utm_campaign%3DAndroidPIT'">
</FORM></li>
      <?php } 
      
 } else { 
      
     if( $iPad || $iPhone ){ ?>           
                    <li class="apple-es" style="margin: 0 auto; width: 185px;">
                        <FORM>
<INPUT Type="BUTTON" VALUE="" ONCLICK="window.location.href='https://itunes.apple.com/us/app/7by24/id677629605?mt=8'">
</FORM></li>
                <?php } else if ($Android == 'true') { ?>
                    <li class="android-es" style="margin: 0 auto; width: 185px;">
                        <INPUT Type="BUTTON" VALUE="" ONCLICK="window.location.href='https://play.google.com/store/apps/details?id=com.by24.voip&referrer=utm_source%3DAndroidPIT%26utm_medium%3DAndroidPIT%26utm_campaign%3DAndroidPIT'">
</FORM></li>
            <?php } else { ?>
    <li class="apple-small-es" style="float: left; width: 160px; margin-left: 25px;">
                        <FORM>
                            <INPUT Type="BUTTON" VALUE="" ONCLICK="window.location.href='https://itunes.apple.com/us/app/7by24/id677629605?mt=8'">
</FORM></li>

                    <li class="android-small-es" style="float: right; width: 160px; margin-right: 25px;">
                        <INPUT Type="BUTTON" VALUE="" ONCLICK="window.location.href='https://play.google.com/store/apps/details?id=com.by24.voip&referrer=utm_source%3DAndroidPIT%26utm_medium%3DAndroidPIT%26utm_campaign%3DAndroidPIT'">
</FORM></li>
      <?php } 
     
 } ?>
                    </ul>
        </div>
    </div>
    
    <div id="right-banners">
        <div class="app-title"><?php the_field('app_features_title'); ?></div>
        <ul class="app-features">
<li><img class="app-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/app-icon-01.png" /><span><?php the_field('app_feature_1'); ?></span></li>
<li><img class="app-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/app-icon-02.png" /><span><?php the_field('app_feature_2'); ?></span></li>
<li><img class="app-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/app-icon-03.png" /><span><?php the_field('app_feature_3'); ?><a href="<?php the_field('low_rates_link'); ?>"><?php the_field('low_rates_details'); ?></a></span></li>
<li><img class="app-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/app-icon-04.png" /><span><?php the_field('app_feature_4'); ?></span></li>
<li><img class="app-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/app-icon-05.png" /><span><?php the_field('app_feature_5'); ?></span></li>
<li><img class="app-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/app-icon-06.png" /><span><?php the_field('app_feature_6'); ?></span></li>
<li><img class="app-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/app-icon-07.png" /><span><?php the_field('app_feature_7'); ?></span></li>
<li><img class="app-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/app-icon-08.png" /><span><?php the_field('app_feature_8'); ?></span></li>
<li><img class="app-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/app-icon-09.png" /><span><?php the_field('app_feature_9'); ?></span></li>
<li><img class="app-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/app-icon-10.png" /><span><?php the_field('app_feature_10'); ?></span></li>
<li><img class="app-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/app-icon-11.png" /><span><?php the_field('app_feature_11'); ?><a href="<?php the_field('pin-less_link'); ?>"><?php the_field('pin-less_details'); ?></a></span></li>
     <!--       <li><img class="app-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/app-icon-12.png" /><span><?php the_field('app_feature_12'); ?></span></li> -->
        </ul>
        <div class="asterisk">
            <p><?php the_field('asterisk'); ?></p>
        </div>
            <div class="user-guides">
                <a href="<?php the_field('user_guides_link'); ?>" class="manual-button"></a>
                <div id="user-guides-title"><a href="<?php the_field('user_guides_link'); ?>"><?php the_field('user_guides_title'); ?></a></div>
            </div>
        <ul class="manual-download">
            <li><a href="<?php the_field('ios_user_guides_pdf'); ?>" target="_blank"><img src="<?php the_field('ios_user_guides_button'); ?>" /></a></li>
            <li><a href="<?php the_field('android_user_guides_pdf'); ?>" target="_blank"><img src="<?php the_field('android_user_guides_button'); ?>" /></a></li>
            <?php if ($bloglang == 'en-US') { ?>
            <li><a href="<?php the_field('acrobat_reader_link'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/acrobat-reader-button.png" /></a></li>
            <?php } else { ?>
                        <li><a href="<?php the_field('acrobat_reader_link'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/acrobat-reader-button-es.png" /></a></li>
            <?php } ?>
            </ul>
        </div>
    </div>
</div>
<?php get_footer(); ?>
