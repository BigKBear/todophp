<?php 
    class CookieService {
        function __construct($name,$pass){
            $user_name = $this -> set_username($name);
            $user_password = $this -> set_password($pass);
            $user_login_status = $this -> set_login_status(1);
        }
        
        private function set_username($name){
           setcookie("username", $name);
        }
        
        private function set_password($pass){
           setcookie("pass", $pass);
        }
        
        public function set_login_status($status){
            setcookie("login", $status);
        }
        
        public function clear_all_cookies(){
            unset($_COOKIE);
        }
        
        public function clear_cookie_value($name,$value){
            unset($_COOKIE[$name][$value]);
        }
        
        public function get_name(){
           return $_COOKIE['username'];
        }
        
        public function get_password(){
          return $_COOKIE['pass'];
        }
    }
?>