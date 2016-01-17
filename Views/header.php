<?php
    require '../Controllers/header_controller.php';
    HeaderController::index();
?>
<html> 
    <head >
    <title>ToDo App</title>
    </head>
    <body>
        <h2 id="feature_body">Welcome </h2>
        <br>
        <div>
            <a href="home.php"><?php echo $_COOKIE['main_menu'][0];?></a> |
            <a href="login.php"><?php echo $_COOKIE['main_menu'][1];?></a>
        </div>