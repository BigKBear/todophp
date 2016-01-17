<?php
    class TodoController{
        public function stripe_todo(){
            
        }
        public function add_todo($newtodo){
            $_COOKIE['todolist'][]=$newtodo;
        }
        public function delete_todo_from_list($name='todolist',$key){
            clear_cookie_value::clear_cookie_value($name,$key);
        }
        public function list_all_todos(){
            /*foreach($_COOKIE['todolist'] as $todo_item){
                return $todo_item;
            }*/
        }
        public function update_current_list(){
            
        }
    }
?>