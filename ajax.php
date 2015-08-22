<?php
$start = (isset($_REQUEST['start'])) ? $_REQUEST['start'] : 1;
require_once ('excel_reader2.php');
require_once ('wp-load.php');

$rates = null;

$lang = $_REQUEST['lang'];


if ($lang == 'en-US') {
    $rates = new Spreadsheet_Excel_Reader('rates_eng.xls');
} else {
    $rates = new Spreadsheet_Excel_Reader('rates_esp.xls');
}

$rates_rows = $rates->rowcount($sheet_index=0);
$row = $rates->rowcount($sheet_index=0);
$count =  $row+1;

$blog_details = get_blog_details(1);
$countryname = $rates->val($start,1);
$flag = rtrim ( $countryname );
$flag = str_replace(" ", "-", $flag);
//echo 'Blog '.$blog_details->blog_id;
?>
<div style="display:none"><?php echo $lang ?></div>
 <meta charset="UTF-8"> 
<img class="flag" src="<?php echo get_stylesheet_directory_uri(); ?>/images/flags/<?php echo $flag; ?>.png" />                            <span id="sample-rates-text-p">
                 <?php  echo $rates->val($start,2) . ' ';
			if ($lang == 'en-US') {
                        	echo 'as low as';
			} else {
				echo 'desde';				
			}
                        echo ' ' . $rates->val($start,3) . ' ';
			if ($lang == 'en-US') {
	                        echo '¢/minute';
			} else {
				echo '¢/minuto';

			}
                ?>
                </span>

      <input type="hidden" value="<?php echo $count; ?>" id="count">
