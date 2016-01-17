<?php 
    require '../Controllers/todo_controller.php';
    include '../Views/header.php';

    TodoController::list_all_todos();
?>
 <legend align="center">TODO list</legend>
                <form name="todo_form" method="POST" action="home.php">
                    <br>
                    <label class="textinput" for="todo_item"><input  placeholder="Enter todo..." id="todo_item" type="text" name="todo_item"></label>
                    <br>
                    <br>
                    <input id="add_todo_button" type="submit" name="add_todo" value="Add"> 
                </form>