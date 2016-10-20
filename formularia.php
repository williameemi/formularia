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

defined( 'ABSPATH' ) or die( 'Permission denied!' );

define("PATH_FORMULARIA",basename( dirname( __FILE__ ) ));

add_action( 'init' , 'my_languages' );
add_action('admin_menu', 'mt_add_pages');

add_filter( 'the_content' , 'formularia_show_form' );
add_filter( 'the_title' , 'formularia_change_title' );



function my_languages(){
    load_plugin_textdomain( 'formularia', false, PATH_FORMULARIA . '/languages' );
}

require( plugin_dir_path( __FILE__ ) . 'vendor/PHPMailer/PHPMailerAutoload.php' );
require( plugin_dir_path( __FILE__ ) . 'inc/register-field-group.inc.php' );
require( plugin_dir_path( __FILE__ ) . 'inc/post-type.inc.php' );
require( plugin_dir_path( __FILE__ ) . 'inc/show.inc.php' );
require( plugin_dir_path( __FILE__ ) . 'inc/setting-export.inc.php' );
require( plugin_dir_path( __FILE__ ) . 'inc/send-form.inc.php' );



