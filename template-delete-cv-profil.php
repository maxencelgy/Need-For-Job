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
    $table_name1 = $wpdb->prefix.'experience'; // IDEAL WAY FOR TABLE PREFIX
    $table_name2 = $wpdb->prefix.'formation'; // IDEAL WAY FOR TABLE PREFIX
    $table_name3 = $wpdb->prefix.'langue'; // IDEAL WAY FOR TABLE PREFIX
    $table_name4 = $wpdb->prefix.'passion'; // IDEAL WAY FOR TABLE PREFIX
    $wpdb->delete( $table_name , $where);
    $wpdb->delete( $table_name1 , $where);
    $wpdb->delete( $table_name2 , $where);
    $wpdb->delete( $table_name3 , $where);
    $wpdb->delete( $table_name4 , $where);
    wp_redirect(path('profil'));
    exit;
}
