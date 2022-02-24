<?php
/*Template Name: Delete Cv Profil*/
$id=$_GET['id'];


if (!empty($id)){
    global $wpdb;
    $where = array(
        'id' => $id,
    );
    $table_name = $wpdb->prefix.'cv'; // IDEAL WAY FOR TABLE PREFIX
    $wpdb->delete( $table_name , $where);
    wp_redirect(path('profil'));
    exit;
}
