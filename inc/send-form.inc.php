<?php

if(isset($_POST["accord-form"]) && $_POST["accord-form"] == "123457543456"){

    send_data();

    $to = $_POST["reception_email"];
    $message = json_encode($_POST);
    $subject = $_POST["form-name"];
    $headers = array('Content-Type: text/html; charset=UTF-8');

    $mail = new PHPMailer;

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'dev.etudiant-eemi.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'wmerlemarty';                 // SMTP username
    $mail->Password = '843138';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom($_POST["reception_email"], 'FORMULARIA WP');
    $mail->addAddress($_POST["reception_email"], 'FORMULARIA WP');     // Add a recipient

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'FORMULARIA WP';
    $mail->Body    = json_encode($_POST);
    $mail->AltBody = json_encode($_POST);

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        die();
    } else {
        echo 'Message has been sent';
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