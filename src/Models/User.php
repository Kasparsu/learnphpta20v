<?php

namespace App\Models;

use App\DB;

class User extends Model
{
    public static $table = 'users';
    public $id;
    public $email;
    public $password;
    public $modified_at;
    public $created_at;

}