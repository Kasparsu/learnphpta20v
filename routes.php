<?php

use App\Controllers\PostsController;
use App\Router;
use App\Controllers\PublicController;
// 'App\Controllers\PublicController'
Router::get('/', [PublicController::class, 'index']);

Router::get('/page1', [PublicController::class, 'page1']);

Router::get('/page2', [PublicController::class, 'page2']);
Router::get('/test', [PublicController::class, 'test']);


Router::get('/posts', [PostsController::class, 'index']);
Router::get('/posts/new', [PostsController::class, 'create']);
Router::post('/posts/new', [PostsController::class, 'store']);
Router::get('/posts/show', [PostsController::class, 'show']);
Router::get('/posts/edit', [PostsController::class, 'edit']);
Router::post('/posts/edit', [PostsController::class, 'update']);
Router::get('/posts/delete', [PostsController::class, 'destroy']);