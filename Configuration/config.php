<?php

$url=$_SERVER['REQUEST_URI'];
$path_to_root = __DIR__.'/../';

$ipwhitelist = array(
    '65.48.232.189',
    '10.240.0.156'
    );
    
$users= array(
    'admin' => array(
        'username' => 'admin',
        'password' => 'kyle',
        ),
    'normal' => array(
        'username' => 'normal',
        'password' => 'normal',
        )
    );
?>