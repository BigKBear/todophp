<?php
    class Todo {
        /* variables*/
        var $name;
        var $isDone;
        var $stripe;
        
        function __construct($name){
            $name=$name;
            $isDone=0;
            $stripe=0;
        }
        public function get_todo_name(){
            
        }
        
        public function set_todo_name($name){
            $this -> name = $name;
        }
        
        public function get_todo_is_done(){
             
        }
        
        public function set_todo_is_done($done_status){
             $this -> isDone = $done_status;
        }
        
        public function get_todo_stripe_status(){
             
        }
        
        public function set_todo_stripe_status($stripe_status){
             $this -> isDone = $stripe_status;
        }
    }
?>