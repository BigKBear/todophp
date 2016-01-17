<?php 
    class session_service {
        function __construct(){
            
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
        
        public function clear_session(){
            unset($_SESSION);
        }
        
        public function clear_session_value($value){
            unset($_SESSION[$value]);
        }
    }
?>