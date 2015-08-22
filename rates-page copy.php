<?php 
/**
 * The template for the 7by24 Home Page.
 * Template Name: Rates Page TEST
 *
 * @package Simon WP Framework
 * @since Simon WP Framework 1.0
 */

require_once '../simon-wp-framework-child/Excel/reader.php';



$data = new Spreadsheet_Excel_Reader();


$data->setOutputEncoding('CP1251');

$data->read('../simon-wp-framework-child/jxlrwtest.xls');


error_reporting(E_ALL ^ E_NOTICE);

for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) {
	for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) {
		echo "\"".$data->sheets[0]['cells'][$i][$j]."\",";
	}
	echo "\n";

}

get_header(); ?>

<div class="outer_wrap">
  <div class="inner_wrap">
    <div class="content">

        </div>
      </div>
    </div>


<?php get_footer(); ?>

