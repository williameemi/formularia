<?php 
/*
Plugin Name: Formularia
Plugin URI: https://github.com/williameemi/formularia
Description: This plugin permit to quickly and easily create forms. A large choice of fields is available and you can create create your own fields! You can also custom your fields with colors and shadow ************* THIS PLUGIN IS ONLY AVAILABLE IF THE PLUGIN ACF IS ACTIVATE:  <a href="https://wordpress.org/plugins/advanced-custom-fields/"/>ACF (Advanced Custom Fields)</a> *************** YOU ALSO NEED TO INSERT A FUNCTION (IT'S INDICATE IN THE ADMINISTRATION PAGE) IN THE THEME. This plugin is traduced in French & in English
Author: William Merle-Marty
Version: 0.1
License: 
Text Domain : Fomularia
*/

require( plugin_dir_path( __FILE__ ) . 'inc/register-field-group.inc.php' );
require( plugin_dir_path( __FILE__ ) . 'inc/post-type.inc.php' );
require( plugin_dir_path( __FILE__ ) . 'inc/show.inc.php' );

add_filter( 'the_content' , 'formularia_show_form' );
add_action('admin_menu', 'mt_add_pages');

if(isset($_POST["accord-form"]) && $_POST["accord-form"] == "123457543456"){

    send_data();
}

function mt_add_pages() {

    add_options_page(__('Formularia export CSV','menu-test'), __('Formularia Export','menu-test'), 'manage_options', 'formularia_settings', 'formularia_settings');
}

function formularia_settings()
{
    echo "<h2>" . __('Exporter au format CSV toutes les données', 'formularia') . "</h2>";
    echo "<a href=''>" . __('Exporter les données en CSV', 'formularia') . "</a>";
}
// CSV

//$lignes = array();
//
//global $wpdb;
//
//// create a file pointer connected to the output stream
//$output = fopen('php://output', 'w');
//
//// output the column headings
//fputcsv($output, array('ID', 'Date', 'Content'));
//
//// fetch the data
//$results = $wpdb->get_results( 'SELECT * FROM wp_workshop_1.wp_formularia ' );
//// loop over the rows, outputting them
//
//foreach ($results as $result) {
//
//    $id = $result->id;
//    $date = $result->datetime ;
//    $contents = json_decode($result->content);
//
//
//    foreach ($contents as $content){
//
//        $lignes[] = array( $id, $date, $content );
//
//    }
//}
//fputcsv($output, $lignes);

global $wpdb;
var_dump(WP_PLUGIN_DIR);
$fp = fopen(WP_PLUGIN_DIR.'/formularia/csv/file.csv', 'w');
$files_to_zip[] = WP_PLUGIN_DIR.'/formularia/csv/file.csv';

$results = $wpdb->get_results( 'SELECT * FROM wp_workshop_1.wp_formularia ' );
fputcsv($fp, array("ID","DATE","CONTENT"));
foreach ($results as $result) {

    $id = $result->id;
    $date = $result->datetime ;
    $contents = json_decode($result->content);

    foreach ($contents as $content){

        $lignes = array( $id, $date, $content );

        fputcsv($fp, $lignes);

    }
}
fclose($fp);