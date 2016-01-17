<?php 
    class session_service {
        function __construct($name,$pass){
            $user_name = $this -> set_username($name);
            $user_password = $this -> set_password($pass);
        }
        
        private function set_username($name){
           return $_SESSION["username"]= $name;
        }
        
        private function set_password($pass){
           return  $_SESSION["pass"]= $pass;
        }
        
        public function clear_session(){
            //unset($_SESSION);
            session_unset();
        }
        
        public function clear_session_value($value){
            unset($_SESSION[$value]);
        }
        
        public function get_name(){
           return $username;
        }
        
        public function get_password(){
          return $this -> user_password;
        }
        
        public function get_current_user(){
            
        }
        public function set_current_user(){
            
        }
        
        public function is_valid_user(){
            
        }
        
        public function add_new_user_ip(){
            
        }
        
        public function remove_user_ip(){
            
        }
        
        public function display_list_of_ip_addresses(){
            
        }
    }
?>