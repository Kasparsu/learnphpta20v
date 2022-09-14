<?php

spl_autoload_register(function ($className){
    $className = substr($className, strlen('App\\'));
    require_once(__DIR__ . "/../src/$className.php");
});
require(__DIR__ . '/../helpers.php');
require(__DIR__ . '/../routes.php');

$router = new App\Router($_SERVER['REQUEST_URI']);
$match = $router->match();
if($match){
    if(is_array($match['action'])){
        $className = $match['action'][0];
        $controller = new $className();
        $method = $match['action'][1];
        $controller->$method();
    } else if(is_callable($match['action'])) {
        call_user_func($match['action']);
    }
} else {
    echo "404";
}