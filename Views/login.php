<?php

require '../Configuration/config.php';
require '../Service/session_service.php';
require '../Controllers/login_controller.php';
?>
<body id="body-color">
        <div id="Sign-In" >
            <h2> Login Page</h2>
            <fieldset style="width:26%">
                <legend align="center">LOG-IN HERE</legend>
                <form name="login_form" method="POST" action="index.php">
                    <br>
                    <label class="textinput" for="user_name"><input  placeholder="Username" id="user_name" type="text" name="user" size="30"></label>
                    <br>
                    <br>
                    <label class="textinput" for="user_pass"><input placeholder="Password..." id="user_pass"type="password" name="pass" size="30"><span>*</span></label>
                    <br>
                    <br>
                    <input id="submit_button" type="submit" name="submit" value="Log-In"> 
                    <input id="signup_button" type="button" name="signup" value="Sign Up">
                </form>
            </fieldset> 
<?php
if($_POST['user']=='del'){
//session_service::clear_session_value($_POST['user']);
$user = new session_service($_POST['user'],$_POST['pass']);
session_service::clear_session_value('pass');

//session_service::clear_session();
var_dump('<br>Sesion value to be deleted<br>'.$_POST['pass'].' <br>');
     var_dump($_SESSION);
}else{
if(isset($_POST['submit'])){
    $user = new session_service($_POST['user'],$_POST['pass']);
    //$user -> set_username($_POST['user']);
    //$user -> set_password($_POST['pass']);
//$_SESSION["username"]=$_POST['user'];
//$_SESSION["password"]=$_POST['pass'];
//var_dump($_COOKIE);
var_dump('<br>Sesion values<br>'.$_SESSION);
     var_dump($_SESSION);
     var_dump( session_service::get_name());
    if((($user->get_name() == $_POST['user'])&&($user->get_name() == 'admin'))&&($user->get_password() == $_POST['pass'])&& ($user->get_password() == 'kyle'))
     header("Location: $path_to_root.'Views/layout/header/index.tpl");
    // var_dump($_POST);
 }}
?>