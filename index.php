<?php
    session_start();    
    ini_set('display_errors', 1);
    include 'php/routes.php';
    
    $route = new RouteController();
    $route->render();
    exit;
?>

