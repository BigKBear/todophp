<?php
require '../Configuration/config.php';
require '/Controllers/header_controller';

    $main_menu = array('Home','Logout');
?>
<html> 
    <head >
    <title>ToDo App</title>
    </head>
    <body>
        <h2 id="feature_body">Welcome <?php  ?></h2>
        <br>
        <div>
            <a href="index.php"><?php echo $main_menu[0];?></a> |
            <a href=<?php echo $path_to_root; ?>"/Controllers/header_controller/logout?logout=true"><?php echo $main_menu[1];?></a> |
        </div>