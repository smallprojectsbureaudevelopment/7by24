<?php 
/**
 * The template for the 7by24 Rates Page.
 * Template Name: Rates Page
 *
 * @package Simon WP Framework
 * @since Simon WP Framework 1.0
 */

$bloglang = get_bloginfo( 'language' );

$countryarray = array();
$new_country = null;
error_reporting(E_ALL ^ E_NOTICE);
require_once (TEMPLATEPATH . '/excel_reader2.php');


if ($bloglang == 'en-US') {
    $rates = new Spreadsheet_Excel_Reader('rates_full_eng.xls', false,'UTF-8');
} else {
    $rates = new Spreadsheet_Excel_Reader('rates_full_esp.xls', false,'UTF-8');
}

$rates_rows = $rates->rowcount($sheet_index=0);
$row = $rates->rowcount($sheet_index=0);
get_header(); ?>

<script type="text/javascript">
    function run() {
        

    var lang = <?php echo json_encode( $bloglang ) ?>;
    var div = document.getElementById("rates-table");
    div.textContent = "";
        
    var count = parseInt(document.getElementById("country-rates").value);
    var rows = parseInt(<?php echo $rates_rows ?>) ;

    var newcountry = Jcountryarray[count][0];
    var country = Jcountryarray[count][0];
        
    var myTableDiv = document.getElementById("rates-table")
    var table = document.createElement('TABLE')
    var tableBody = document.createElement('TBODY')

    table.border = '0'
    table.appendChild(tableBody);

        if (lang === 'en-US') {
        var heading = new Array();
        heading[0] = "Destination"
        heading[1] = "Rate"
        heading[2] = "Min. / $5"
        heading[3] = "Min. / $10"
            } else {
       var heading = new Array();
        heading[0] = "Destino"
        heading[1] = "Tarifa"
        heading[2] = "Min. / $5"
        heading[3] = "Min. / $10" 
        }	
    
    //TABLE COLUMNS
    var tr = document.createElement('TR');
    tableBody.appendChild(tr);
    for (i = 0; i < heading.length; i++) {
        var th = document.createElement('TH')
        th.width = '10';
        th.appendChild(document.createTextNode(heading[i]));
        tr.appendChild(th);
    }

    //TABLE ROWS
    while (newcountry == country && count<= rows) {

    var country = Jcountryarray[count][0];
        var tr = document.createElement('TR');
            var td = document.createElement('TD')
            td.appendChild(document.createTextNode(Jcountryarray[count][1]));
            tr.appendChild(td)
            var td = document.createElement('TD')
                if (lang === 'en-US') {
            td.appendChild(document.createTextNode(Jcountryarray[count][2] + " ¢/minute"));
                } else {
            td.appendChild(document.createTextNode(Jcountryarray[count][2] + " ¢/minuto"));
                }
            tr.appendChild(td)
            var td = document.createElement('TD')
            td.appendChild(document.createTextNode(Jcountryarray[count][3]));
            tr.appendChild(td)
            var td = document.createElement('TD')
            td.appendChild(document.createTextNode(Jcountryarray[count][4]));
            tr.appendChild(td)
        tableBody.appendChild(tr);
        count = count + 1;
        if (count <= rows) {
            newcountry = Jcountryarray[count][0];
        }
    }  
    myTableDiv.appendChild(table)
}    
</script>


  <div class="inner_wrap">
    <div class="content-wrap">
        <div id="first-message"><?php the_field('first_message'); ?></div>
        <div id="app">
            <div class="rates-panel">
            <div class="rates-panel-title"><?php the_field('rates_title'); ?></div>
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
                            if ($bloglang == 'en-US') {
                            echo '<option value="'.$i.'">'.$rates->val($i,1).'</option>';
                            $new_country = rtrim ($rates->val($i,1));
                            } else {
                            echo '<option value="'.$i.'">'.$rates->val($i,6).'</option>';
                            $new_country = rtrim ($rates->val($i,6));   
                            }

                        }
                            if ($bloglang == 'en-US') {
                            $countryarray[$i][0] = rtrim ($rates->val($i,1));
                            $countryarray[$i][1] = $rates->val($i,2);
                            } else {
                            $countryarray[$i][0] = rtrim ($rates->val($i,6));
                            $countryarray[$i][1] = $rates->val($i,7);
                            }
                            
                            
                            $countryarray[$i][2] = $rates->val($i,3);  
                            $countryarray[$i][3] = $rates->val($i,4);  
                            $countryarray[$i][4] = $rates->val($i,5);  
                        } ?>
                    </select>
                    <div id="rates-table"></div>
                </div>
            </div>
            
            </div>
        <div id="right-banners">
            <div class="rates-bullets-banner">
            <div class="rates-bullets-title"><?php the_field('rates_bullets_title'); ?></div>
        <ul class="rates-bullets-2">
                <li><?php the_field('rates_bullet_1'); ?></li>
                <li><?php the_field('rates_bullet_2'); ?></li>
                <li><?php the_field('rates_bullet_3'); ?></li>
                <li><?php the_field('rates_bullet_4'); ?></li>
        </ul>
            <div class="rates-bullets-text_1"><?php the_field('rates_bullets_text_1'); ?></div>
            <div class="rates-bullets-text_2"><?php the_field('rates_bullets_text_2'); ?></div>
                </div>
            <div class="rates-banner-2"><?php putRevSlider( "rates-page" ) ?></div>
        </div>
        </div>
      </div>
    </div>


<script type="text/javascript">

    var Jcountryarray = <?php echo json_encode( $countryarray ) ?>;

</script>

<?php get_footer(); ?>

