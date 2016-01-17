<?php
    require '../Controllers/header_controller.php';
    HeaderController::index();
?>
<html> 
    <head >
    <title>ToDo App</title>
    </head>
    <body>
        <h2 id="feature_body">Welcome <?php var_dump($_COOKIE['user_name']); echo $_SESSION["username"];?></h2>
        <br>
        <div>
            <a href="login.php"><?php echo $_COOKIE['main_menu'][0];?></a> |
            <a href="<?php HeaderController::logout();?>"><?php echo $_COOKIE['main_menu'][1];?></a>
        </div>