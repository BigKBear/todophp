<?php
class LoginController{
    public function index(){
        if ($_POST['user'] == 'del') {
            $user = new session_service($_POST['user'], $_POST['pass']);
            session_service::clear_session_value('pass');
        }
        else {
            if (isset($_POST['submit'])) {
                $user = new session_service($_POST['user'], $_POST['pass']);
                header("Location: home.php");
            }
        }
    }
}
?>