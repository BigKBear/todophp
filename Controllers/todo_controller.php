<?php
    class TodoController{
        public function stripe_todo(){
            
        }
        
        public function add_todo($newtodo){
            $_COOKIE['todolist'][]=$newtodo;
           // self::list_all_todos($_COOKIE['todolist']);
            var_dump($_COOKIE['todolist']);
        }
        
        public function delete_todo_from_list($name='todolist',$key){
            clear_cookie_value::clear_cookie_value($name,$key);
        }
        
        public function list_all_todos($the_new_list){
            foreach((array)$the_new_list as $todo_item){
                echo $todo_item;
            }
        }
        
        public function update_current_list(){
            
        }
    }
?>