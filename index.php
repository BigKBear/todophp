<?php
    require 'Service/CookieService.php';
    session_start();
    
    if (!(isset($_SESSION['login']) && $_SESSION['login'] != ''))  {
        header("Location: Views/login.php");
    }
    else {
        header("Location: Views/home.php");
    }
?>
