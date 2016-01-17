<?php

require 'Service/CookieService.php';

include 'Views/header.php';
session_start();

if (!(isset($_COOKIE['login']) && $_COOKIE['login'] != '')) {
    header("Location: Views/login.php");
}
else {
    header("Location: Views/home.php");
}

?>
