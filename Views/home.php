<?php 
    require '../Controllers/TodoController.php';
    require '../Service/TodoService.php';
    require '../Service/CookieService.php';
    
    include '../Views/header.php';

    TodoController::list_all_todos($_COOKIE['todolist']);
?>
<legend align="center"><?php echo CookieService::get_name(); ?> TODO list</legend>
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
        
       // $todo_object = new Todo($_POST['todo_item']);
      //  var_dump($todo_object);
        TodoController::add_todo($_POST['todo_item']);
    }
?>