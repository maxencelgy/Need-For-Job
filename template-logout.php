<?php

session_start();
$_SESSION = array();
session_destroy();
wp_redirect(path('home'));
