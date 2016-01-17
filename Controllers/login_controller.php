<?php
class LoginController{
    public function index(){
        if ($_POST['user'] == 'del') {
            $user = new CookieService($_POST['user'], $_POST['pass']);
            CookieService::clear_all_cookies();
        }
        else {
            if (isset($_POST['submit'])) {
                $user = new CookieService($_POST['user'], $_POST['pass']);
                if(($_POST['user']=='admin')&&($_POST['pass']=='kyle')){
                header("Location: home.php");
                }
            }
        }
    }
}
?>