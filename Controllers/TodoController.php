<?php
    class TodoController{
        public function stripe_todo(){
            
        }
        
        public function add_todo($newtodo){
            $_COOKIE['todolist'][]=$newtodo;
            self::list_all_todos($_COOKIE['todolist']);
        }
        
        public function delete_todo_from_list($name='todolist',$key){
            clear_cookie_value::clear_cookie_value($name,$key);
        }
        
        public function list_all_todos($thelist){
            foreach($thelist as $todo_item){
                return $todo_item;
            }
        }
        
        public function get_current_list(){
            
        }
    }
?>