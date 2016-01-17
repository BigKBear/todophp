<?php
    require 'Service/CookieService.php';
    
    if (!(isset($_COOKIE['login']) && $_COOKIE['login'] != '')) {
        header("Location: Views/login.php");
    }
    else {
        header("Location: Views/home.php");
    }

?>
