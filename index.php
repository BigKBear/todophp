<?php
require 'Configuration/config.php';
require 'Service/session_service.php';

$expire=time()+(60*60);
            //setcookie($name,$value,$expire);
            //setcookie("user_password",$_SESSION["password"],$expire);
            //setcookie("user_name",$_SESSION["username"],$expire);
            //setcookie("user_pass",$_SESSION["password"],$expire);
            
echo 'Hello world from Cloud9!'.$path_to_root;
//unset($_POST);
//Header::index();

session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

header ("Location: Views/login.php");

}else{
    header ("Location: Views/home.php");
}


?>