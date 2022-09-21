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

    public function store(){
        $post = new Post();
        $post->title = $_POST['title'];
        $post->body = $_POST['body'];
        $post->created_at = microtime();
        $post->modified_at = microtime();
        $post->save();
        header('Location: /posts');
    }

    public function show(){
        $post = Post::find($_GET['id']);
        view('posts/show', compact('post'));
        // ['post' => ...]
    }

    public function edit(){
        $post = Post::find($_GET['id']);
        view('posts/edit', compact('post'));
    }

    public function update(){
        $post = Post::find($_GET['id']);
        $post->title = $_POST['title'];
        $post->body = $_POST['body'];
        $post->modified_at = microtime();
        $post->save();
        header('Location: /posts');
    }

    public function destroy(){
        $post = Post::find($_GET['id']);
        $post->delete();
        header('Location: /posts');
    }
}