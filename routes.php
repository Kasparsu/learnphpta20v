<?php
use App\Router;


Router::addRoute('/', function(){
    $name = 'Kaspar';
    $items = ['piim', 'sai', 'vodka'];
    include(__DIR__ . '/views/home.php');
});

Router::addRoute('/page1', function(){
    include(__DIR__ . '/views/page1.php');
});

Router::addRoute('/page2', function(){
    include(__DIR__ . '/views/page2.php');
});