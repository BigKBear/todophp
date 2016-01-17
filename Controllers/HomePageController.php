<?php
    class HomePageController {
        public function index() {
            if (isset($_POST['add_todo'])) {
                TodoController::add_todo($_POST['todo_item']);
            }

        }
    }
?>