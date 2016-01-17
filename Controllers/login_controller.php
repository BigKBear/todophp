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
               // var_dump($user);
                //if ((($user -> get_name() == $_POST['user']) && ($user -> get_name() == 'admin')) && ($user -> get_password() == $_POST['pass']) && ($user -> get_password() == 'kyle'))
                  header("Location: home.php");
                // var_dump($_POST);
            }
        }
    }
}
?>