<?php
namespace App\Controllers;

class PublicController {
    public function index(){
        $name = 'Kaspar';
        $items = ['piim', 'sai', 'vodka'];
        include(__DIR__ . '/views/home.php');
    }

    public function page1(){
        include(__DIR__ . '/views/page1.php');
    }

    public function page2(){
        include(__DIR__ . '/views/page2.php');
    }
}