<?php

namespace App\Controllers;

use App\Models\Post;

class PostsController
{
    public function index(){
        $posts = Post::all();
        view('posts/index', compact('posts'));
    }

    public function create(){
        view('posts/create');
    }
}