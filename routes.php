<?php
use App\Router;
use App\Controllers\PublicController;
// 'App\Controllers\PublicController'
Router::addRoute('/', [PublicController::class, 'index']);

Router::addRoute('/page1', [PublicController::class, 'page1']);

Router::addRoute('/page2', [PublicController::class, 'page2']);