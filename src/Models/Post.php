<?php

namespace App\Models;


use App\DB;

class Post extends Model
{
    public static $table = 'posts';
    public $id;
    public $title;
    public $body;
    public $created_at;
    public $modified_at;

    public function ucTitle(){
        return ucfirst($this->title);
    }

}