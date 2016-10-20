<?php

if(isset($_POST["accord-form"]) && $_POST["accord-form"] == "123457543456"){

    send_data();

    if ( isset( $_POST["reception_email"] ) ) {

        $to = $_POST["reception_email"];
        $message = "";
        $subject = "Réponse au formulaire" . $_POST["form_name"];

        foreach ( $_POST as $key => $value ) {

            if ($key != "accord-form" && $key != "reception_email" ) {

                $message .= $key . " : " . $value . "

                ";
            }
        }
        mail($to,$subject,$message);
    }
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