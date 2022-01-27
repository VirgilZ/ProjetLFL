<?php

require_once 'database/DBconnection.php';
require_once 'models/Model.php';
require_once 'models/Player.php';
require_once 'models/Team.php';
require_once 'controller/MainController.php';
require_once 'controller/PlayerController.php';
require_once 'controller/TeamController.php';


if(isset($_GET['page'])){
    $page = explode('/',$_GET['page']);
    $controller = ucfirst($page[0]).'Controller';
    if(class_exists($controller)){
        $controller = new $controller();
        $method = $page[1];
        $controller->$method();
    }else{
        require_once  '404.php';
    }
    
}else{
    ob_start();
        require_once 'templates/Home.php';
        $content = ob_get_clean();
        require_once 'templates/Template.php';
    
}