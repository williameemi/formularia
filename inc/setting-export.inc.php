<?php

function mt_add_pages() {

    add_options_page(__('Formularia export CSV','formularia'), __('Formularia Export','formularia'), 'manage_options', 'formularia_settings', 'formularia_settings');
}

function formularia_settings()
{
    echo "<h2>" . __('Exporter au format CSV toutes les données', 'formularia') . "</h2>";
    echo "<form method='post' action=''><input type='hidden' name='export-file-csv'/><input type='submit' value='" . __('Exporter les données en CSV', 'formularia') . "'/></form>";
}
// CSV

if(isset($_POST["export-file-csv"])){

    global $wpdb;
    $fp = fopen(WP_PLUGIN_DIR.'/formularia/csv/formularia-export-csv.csv', 'w');
    $filename = WP_PLUGIN_DIR.'/formularia/csv/formularia-export-csv.csv';
    $results = $wpdb->get_results( 'SELECT * FROM wp_formularia ' );
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

    if (file_exists($filename)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($filename).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filename));
        readfile($filename);
        exit;
    }
}
