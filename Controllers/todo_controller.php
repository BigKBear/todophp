<?php
require '../Service/TodoService';
    class TodoController{
        public function stripe_todo(){
            
        }
        public function add_todo($newtodo){
            $_COOKIE['todolist'][]=$newtodo;
        }
        public function delete_todo_from_list(){
            
        }
        public function list_all_todos(){
            
        }
        public function update_current_list(){
            
        }
    }
?>