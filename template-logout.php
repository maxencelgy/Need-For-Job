<?php
/*Template Name: Logout*/
session_start();
$_SESSION = array();
session_destroy();
wp_redirect(path('home'));
exit;
