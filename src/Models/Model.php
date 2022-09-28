<?php

namespace App\Models;

use App\DB;

class Model
{
    public static $table;

    public static function all(){
        $db = new DB();
        return $db->all(static::$table, static::class);
    }

    public function save(){
        $db = new DB();
        $vars = get_object_vars($this);
        unset($vars['id']);
        if($this->id) {
            $db->update($this->id, static::$table, $vars);
        } else {
            $db->insert(static::$table, $vars);
        }
    }

    public static function find($id){
        $db = new DB();
        return $db->find($id, static::$table, static::class);
    }

    public static function where($field, $value){
        $db = new DB();
        return $db->where($field, $value, static::$table, static::class);
    }

    public function delete(){
        $db = new DB();
        $db->delete($this->id, static::$table);
    }
}