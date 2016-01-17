<?php
require '../Configuration/config.php';
require '../Service/CookieService.php';
require '../Controllers/LoginController.php';

include '../Views/header.php';
//The below is being used to see all current valid users
foreach($users as $user) {
echo $user['username'].' '.$user['password'].'<br>' ; 
    
}

//TODO:: use the below ip address in a white list area
//var_dump($_SERVER['REMOTE_ADDR']);

/*if (!(in_array($_SERVER['REMOTE_ADDR'], $ipwhitelist))) {
 			header("HTTP/1.0 403 Not on IP whitelist");
 			return;
 		}*/
?>
<body id="body-color">
    <div id="Login">
        <h2> Login Page</h2>
        <fieldset style="width:26%">
            <legend align="center">LOG-IN HERE</legend>
            <form name="login_form" method="POST" action="<?php LoginController::index($users); ?>">
                <br>
                <label class="textinput" for="user_name">
                    <input placeholder="Username" id="user_name" type="text" name="user" size="30">
                </label>
                <br>
                <br>
                <label class="textinput" for="user_pass">
                    <input placeholder="Password..." id="user_pass" type="password" name="pass" size="30"><span>*</span></label>
                <br>
                <br>
                <input id="submit_button" type="submit" name="submit" value="Log-In">
                <input id="signup_button" type="button" name="signup" value="Sign Up">
            </form>
        </fieldset>