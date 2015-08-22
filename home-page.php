<?php 
/**
 * The template for the 7by24 Home Page.
 * Template Name: Home Page
 *
 * @package Simon WP Framework
 * @since Simon WP Framework 1.0
 */

$Android = false;

$iPhone = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");

if(stripos($_SERVER['HTTP_USER_AGENT'],"Android")) {
    $Android = true;
    } else {
    $Android = false;
    }

$bloglang = get_bloginfo( 'language' );


$samplerates = null;
$countryarray = array();
$new_country = null;
$aslow = get_field ('sample_rates_text_1');
$perminute = get_field ('sample_rates_text_2');
$desde = get_field('from');
$porminuto = get_field('per_minute');
$sample_rates_text_1 = get_field ('sample_rates_text_1');
$sample_rates_text_2 = get_field ('sample_rates_text_2');

error_reporting(E_ALL ^ E_NOTICE);
require_once (TEMPLATEPATH . '/excel_reader2.php');
if ($bloglang == 'en-US') {
    $samplerates = new Spreadsheet_Excel_Reader('rates_eng.xls');
    $rates = new Spreadsheet_Excel_Reader('rates_full_eng.xls', false,'UTF-8');
} else {
    $samplerates = new Spreadsheet_Excel_Reader('rates_esp.xls', false,'UTF-8');
    $rates = new Spreadsheet_Excel_Reader('rates_full_esp.xls', false,'UTF-8');
}

$countryname = $samplerates->val(2,1);
$flag = rtrim ( $countryname );
$flag = str_replace(" ", "-", $flag);

$rates_rows = $rates->rowcount($sheet_index=0);
$row = $rates->rowcount($sheet_index=0);

get_header(); ?>

<script>
    function run() {
    var desde = "<?php echo $desde ?>";
    var porminuto = "<?php echo $porminuto ?>";

    var div = document.getElementById("srt");
    div.textContent = "";
        
    var count = parseInt(document.getElementById("country-rates").value);
    var rows = parseInt(<?php echo $rates_rows ?>) ;    
        
    var newcountry = Jcountryarray[count][0];
    var country = Jcountryarray[count][0];
    var rate = Jcountryarray[count][2];
    
    while (newcountry === country && count< rows) {
 
    if (rate > Jcountryarray[count][2]) {
        rate = Jcountryarray[count][2];
    }
    count = count + 1;  
    newcountry = Jcountryarray[count][0];
    
    }
        

    div.textContent =  desde + " " + rate + " ¢ " + porminuto;
    }
</script>

  <div class="inner_wrap">
    <div class="content-wrap">
        <div id="app">
            <div id="first-message"><?php the_field('first_message'); ?></div>
            <div id="second-message"><?php the_field('second_message'); ?></div>
            <div id="app-banner"><?php putRevSlider("app-features") ?></div>
            <div id="banner-shadow"></div>
            <div id="downloads">
                <div class="download-title"><?php the_field('download_text'); ?></div>
                    <ul class="stores">
                        
    <?php if ($bloglang == 'en-US') {               
                        
             if( $iPad || $iPhone ){  ?>    
                    <li class="apple" style="margin: 0 auto; width: 200px">
                        <FORM>
<INPUT Type="BUTTON" VALUE="" ONCLICK="window.location.href='https://itunes.apple.com/us/app/7by24/id677629605?mt=8'">
</FORM></li>
                <?php } else if ($Android == 'true') { ?>
                    <li class="android" style="margin: 0 auto; width: 200px">
                        <INPUT Type="BUTTON" VALUE="" ONCLICK="window.location.href='https://play.google.com/store/apps/details?id=com.by24.voip&referrer=utm_source%3DAndroidPIT%26utm_medium%3DAndroidPIT%26utm_campaign%3DAndroidPIT'">
</FORM></li>
            <?php } else { ?>
    <li class="apple" style="float: left; width: 200px">
                        <FORM>
                            <INPUT Type="BUTTON" VALUE="" ONCLICK="window.location.href='https://itunes.apple.com/us/app/7by24/id677629605?mt=8'">
</FORM></li>

                    <li class="android" style="float: right; width: 200px">
                        <INPUT Type="BUTTON" VALUE="" ONCLICK="window.location.href='https://play.google.com/store/apps/details?id=com.by24.voip&referrer=utm_source%3DAndroidPIT%26utm_medium%3DAndroidPIT%26utm_campaign%3DAndroidPIT'">
</FORM></li>
      <?php } 
} else {   if( $iPad || $iPhone ){  ?>    
                    <li class="apple-es" style="margin: 0 auto; width: 200px">
                        <FORM>
<INPUT Type="BUTTON" VALUE="" ONCLICK="window.location.href='https://itunes.apple.com/us/app/7by24/id677629605?mt=8'">
</FORM></li>
                <?php } else if ($Android == 'true') { ?>
                    <li class="android-es" style="margin: 0 auto; width: 200px">
                        <INPUT Type="BUTTON" VALUE="" ONCLICK="window.location.href='https://play.google.com/store/apps/details?id=com.by24.voip&referrer=utm_source%3DAndroidPIT%26utm_medium%3DAndroidPIT%26utm_campaign%3DAndroidPIT'">
</FORM></li>
            <?php } else { ?>
    <li class="apple-es" style="float: left; width: 200px">
                        <FORM>
                            <INPUT Type="BUTTON" VALUE="" ONCLICK="window.location.href='https://itunes.apple.com/us/app/7by24/id677629605?mt=8'">
</FORM></li>

    <li class="android-es" style="float: right; width: 200px">
                        <INPUT Type="BUTTON" VALUE="" ONCLICK="window.location.href='https://play.google.com/store/apps/details?id=com.by24.voip&referrer=utm_source%3DAndroidPIT%26utm_medium%3DAndroidPIT%26utm_campaign%3DAndroidPIT'">
</FORM></li>
      <?php } 
       }?>
                    </ul>
            </div>
            <div id="girl"></div>
        </div>
    <div id="right-banners">
        <div id="low-rates">
            <?php $blog_id = get_current_blog_id();
            if ($blog_id == 1){ ?>
            <div id="rates-titles"><?php the_field('rates_title'); ?></div>
            <?php } else if ($blog_id == 2) { ?>
                <div id="rates-titles-es"><?php the_field('rates_title'); ?></div>
        <?php } 
            
            if( $iPhone ){  ?>
            <ul class="rates-bullets-iPhone">
                <?php } else { ?>
            <ul class="rates-bullets">
                <?php } ?>
                <li><?php the_field('rates_bullet_1'); ?></li>
                <li><?php the_field('rates_bullet_2'); ?></li>
                <li><?php the_field('rates_bullet_3'); ?></li>
            </ul>
            <div id="sample-rates-text">
            <img class="flag" src="<?php echo get_stylesheet_directory_uri(); ?>/images/flags/<?php echo $flag; ?>.png" /><span id="sample-rates-text-p"><?php  echo ' '.$samplerates->val(2,1).' '.$aslow.' '.$samplerates->val(2,3) . ' '.$perminute; ?></span>
		</div>
            <div id="sample-rates"></div>
            <div id="rates-selector">
                <select id="country-rates" onchange="run()">
                        <option value=""><?php the_field('rates_selector'); ?></option>
                       <?php 
                        for ($i = 2; $i <= $rates_rows; $i++) {
                            if ($bloglang == 'en-US') {
                            $actualcountry = rtrim ($rates->val($i,1));
                            } else {
                            $actualcountry = rtrim ($rates->val($i,6));    
                            }
                            
                        if ( $new_country != $actualcountry ) {
                            echo '<option value="'.$i.'">'.$actualcountry.'</option>';
                            $new_country = $actualcountry;
                        }   
                            
                            $countryarray[$i][0] = $actualcountry;
                            $countryarray[$i][1] = $rates->val($i,2);
                            $countryarray[$i][2] = $rates->val($i,3);  
                            $countryarray[$i][3] = $rates->val($i,4);  
                            $countryarray[$i][4] = $rates->val($i,5);  
                        } ?>
                    </select>
                <div id="selected-rate"><div id="srt"></div>
                <div id="rates-link"><a href="<?php the_field('rates_link'); ?>"><?php the_field('read_more'); ?></a></div>
                </div>
                </div>
            <div id="rates-banner"><?php putRevSlider("rates-banner") ?></div>
        </div>
        <div id="pin-less">
            <div id="pin-less-title"><?php the_field('pin-less_title'); ?></div>
            <div id="pin-less-copy"><?php the_field('pin-less_copy'); ?></div>
            <div id="pin-less-link"><?php the_field('pin-less_link'); ?></div>
        </div>
        <div id="retailer">
            <div id="retailer-title"><a href="<?php the_field('retailers_link'); ?>"><?php the_field('retailers_title'); ?></a></div>
            <div id="retailer-copy"><?php the_field('retailers_copy'); ?></div>
        </div>
        </div>
    </div>
  </div>
</div>

<script type="text/javascript">

    var Jcountryarray = <?php echo json_encode( $countryarray ) ?>;

</script>

<script>                                     
    var start = 3; 

    // Defined the language variable 
    var lang = <?php echo json_encode ($bloglang) ?>;
   
    
    (function ($)                            
    {    
        $(document).ready(function ()        
        {                                    
            $.ajaxSetup(                     
                    {                        
                        cache: false,        
                        beforeSend: function () {
            		$('#sample-rates-text').animate({"opacity":"0"}, 200);

                        },
                       success: function () {
			
			setTimeout( function() { 
					
					$('#sample-rates-text').animate({"opacity":"1"},1000);}, 
				1000);
         
                        }
                    });
            var $container = $("#sample-rates-text");

            var refreshId = setInterval(function ()
            {
                if ($('#count').val() == start) {
                    start = 2;
                  }
                
		// Passed language through URL
                $container.load("/ajax.php?lang=" + lang + "&start=" + start);
                start++;

            }, 5500);
        });
    })(jQuery);
</script>



<?php get_footer(); ?>

