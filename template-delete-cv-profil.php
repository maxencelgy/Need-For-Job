<?php
/*Template Name: Delete Cv Profil*/
if(is_user_logged_in()==false){
    wp_redirect(path('profil'));
    exit;
}
$id=$_GET['id'];


if (!empty($id)){
    global $wpdb;
    $where = array(
        'id' => $id,
    );
    $table_name = $wpdb->prefix.'cv'; // IDEAL WAY FOR TABLE PREFIX
    $wpdb->delete( $table_name , $where);
}
