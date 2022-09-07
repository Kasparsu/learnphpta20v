<?php

spl_autoload_register(function ($className){
    $className = substr($className, strlen('App\\'));
    require_once(__DIR__ . "/../src/$className.php");
});
require(__DIR__ . '/../routes.php');
$router = new App\Router($_SERVER['REQUEST_URI']);
$match = $router->match();
if($match){
    call_user_func($match['action']);
} else {
    echo "404";
}