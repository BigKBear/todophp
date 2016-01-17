<?php 
    require '../Controllers/todo_controller.php';
    require '../Service/TodoService.php';
    
    include '../Views/header.php';

    TodoController::list_all_todos($_COOKIE['todolist']);
?>
<legend align="center">TODO list</legend>
<form name="todo_form" method="POST" action="home.php">
    <br>
    <label class="textinput" for="todo_item">
        <input placeholder="Enter todo..." id="todo_item" type="text" name="todo_item">
    </label>
    <br>
    <br>
    <input id="add_todo_button" type="submit" name="add_todo" value="Add">
</form>

<?php 
    if(isset($_POST['add_todo'])){
        $todo_object = new Todo($_POST['todo_item']);
        TodoController::add_todo($_POST['todo_item']);
    }
?>