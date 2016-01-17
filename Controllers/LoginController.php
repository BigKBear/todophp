<?php
/*
    Change login to sessions
*/
class LoginController {
    public
    function index($allusers) {
        if ($_POST['user'] == 'del') {
            $user = new CookieService($_POST['user'], $_POST['pass']);
            CookieService::clear_all_cookies();
        }
        else {
            if (isset($_POST['submit'])) {
                foreach($allusers as $user) {
                    if (($_POST['user'] == $user['username']) && ($_POST['pass'] == $user['password'])) {
                        $user = new CookieService($_POST['user'], $_POST['pass']);
                        header("Location: home.php");
                    }
                }
            }
        }
    }
}
?>