<?php
// A simple web site in Cloud9 that runs through Apache
// Press the 'Run' button on the top to start the web server,
// then click the URL that is emitted to the Output tab of the console

require 'Configuration/config.php';
require 'Controllers/header_controller.php';
require 'Service/session_service.php';

session_start();

$expire=time()+(60*60);
            //setcookie($name,$value,$expire);
            //setcookie("user_password",$_SESSION["password"],$expire);
            //setcookie("user_name",$_SESSION["username"],$expire);
            //setcookie("user_pass",$_SESSION["password"],$expire);
            
echo 'Hello world from Cloud9!'.$path_to_root;
//unset($_POST);
//Header::index();
?>
 <meta http-equiv="Location" content="https://todoapp-bigkbear.c9users.io/Views/layout/header/index.tpl">
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
     var_dump($user->get_name());
    if((($user->get_name() == $_POST['user'])&&($user->get_name() == 'admin'))&&($user->get_password() == $_POST['pass'])&& ($user->get_password() == 'kyle'))
     header("Location: https://todoapp-bigkbear.c9users.io/Views/layout/header/index.tpl");
    // var_dump($_POST);
 }}
?>