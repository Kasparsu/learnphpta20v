<?php
namespace App\Controllers;


use App\DB;
use App\Models\Post;
use App\Models\User;

class PublicController {
    public function index(){
        $posts = Post::all();
        view('home', compact('posts'));
    }

    public function page1(){
        view('page1');
    }

    public function page2(){
        view('page2');
    }

    public function test(){
        var_dump($_GET);
        var_dump($_POST);
    }
}