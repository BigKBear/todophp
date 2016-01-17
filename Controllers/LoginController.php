<?php
/*
    Change login to sessions
*/
class LoginController{
    public function index(){
        if ($_POST['user'] == 'del') {
            $user = new CookieService($_POST['user'], $_POST['pass']);
            CookieService::clear_all_cookies_and_session();
        }
        else {
            if (isset($_POST['submit'])) {
                /*
                foreach($users as $user){
                if(($_POST['user']==$user['username'])&&($_POST['pass']==$user['password'])){
                    $user = new CookieService($_POST['user'], $_POST['pass']);
                    header("Location: home.php");
                }
                }
                */
                $user = new CookieService($_POST['user'], $_POST['pass']);
                if(($_POST['user']=='admin')&&($_POST['pass']=='kyle')){
                header("Location: home.php");
                }
            }
        }
    }
}
?>