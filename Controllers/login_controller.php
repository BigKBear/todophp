<?php
class LoginController{
    public function index(){
        echo ('HERE');

        if ($_POST['user'] == 'del') {
            //session_service::clear_session_value($_POST['user']);
            $user = new session_service($_POST['user'], $_POST['pass']);
            session_service::clear_session_value('pass');

            //session_service::clear_session();
            var_dump('<br>Sesion value to be deleted<br>'.$_POST['pass'].
                ' <br>');
           // var_dump($_SESSION);
        }
        else {
            if (isset($_POST['submit'])) {
                $user = new session_service($_POST['user'], $_POST['pass']);
                //$user -> set_username($_POST['user']);
                //$user -> set_password($_POST['pass']);
                //$_SESSION["username"]=$_POST['user'];
                //$_SESSION["password"]=$_POST['pass'];
                //var_dump($_COOKIE);
                //var_dump('<br>Sesion values<br>'.$_SESSION);
                //var_dump($_SESSION);
                //var_dump(session_service::get_name());
                if ((($user -> get_name() == $_POST['user']) && ($user -> get_name() == 'admin')) && ($user -> get_password() == $_POST['pass']) && ($user -> get_password() == 'kyle'))
                    header("Location: $path_to_root.'Views/layout/header/index.tpl");
                // var_dump($_POST);
            }
        }
    }
}
?>