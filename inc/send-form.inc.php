<?php

if(isset($_POST["accord-form"]) && $_POST["accord-form"] == "123457543456"){

    send_data();

    $to = $_POST["reception_email"];
    $message = json_encode($_POST);
    $subject = $_POST["form-name"];
    $headers = array('Content-Type: text/html; charset=UTF-8');

    wp_mail( $to, $subject, $message, $headers );
}

function send_data(){

    global $wpdb;

    $charset_collate = $wpdb->get_charset_collate();
    $table_name = $wpdb->prefix . 'formularia';

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
		id INT(11) NOT NULL AUTO_INCREMENT,
		datetime DATETIME,
		content LONGTEXT,
		UNIQUE KEY id (id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );

    // ****************
    // REQUETE A REVOIR
    //*****************

    $wpdb->insert( $table_name, array('datetime' => date("Y-m-d H:i:s"), 'content' => json_encode( $_POST ) ) );

}