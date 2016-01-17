<?php
    include '../Styles/css.php';
    require '../Controllers/HeaderController.php';
    HeaderController::index();
?>
<html>

<head>
    <title>ToDo App</title>
</head>

<!-- TODO:: add the menue items from the Header controller-->
<body>
    <h2 id="feature_body">Welcome <?php echo CookieService::get_name(); ?></h2>
    <br>
    <div>
        <a href="home.php">
            <?php echo $_COOKIE[ 'main_menu'][0];?>
        </a> |
        <a href="login.php?logout=1">
            <?php echo $_COOKIE[ 'main_menu'][1];?>
        </a>
        <input name="packersOff" class="strikethrough" value="1" type="checkbox">
        <label for="packersOff">
            <?php echo $_COOKIE[ 'main_menu'][2];?>
        </label>
    </div>