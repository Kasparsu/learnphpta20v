<?php

namespace App;

class DB
{
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new \PDO('sqlite:db.sqlite');
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        } catch (\PDOException $exception) {
            var_dump($exception);
        }
    }

    public function all($table,$model=\stdClass::class)
    {
        $stmt = $this->conn->prepare('SELECT * FROM '. $table .';');
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_CLASS, $model);
        return $stmt->fetchAll();
    }

    public function insert($table, $fields){
        $fieldNames = array_keys($fields);
        $fieldLine = implode(',' ,$fieldNames);
        $valuesLine = '';
        foreach ($fields as $value){
            // $valuesLine = $valuesLine . "'$value'"
            $valuesLine .= "'$value',";
        }
        $valuesLine = substr($valuesLine,0,-1);
        $sql = "INSERT INTO $table ($fieldLine)
                VALUES ($valuesLine)";
        // use exec() because no results are returned
        $this->conn->exec($sql);
    }

    public function find($id, $table, $model=\stdClass::class){
        $stmt = $this->conn->prepare("SELECT * FROM $table WHERE id=$id;");
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_CLASS, $model);
        return $stmt->fetch();
    }

    public function where($field, $value, $table, $model=\stdClass::class){
        $stmt = $this->conn->prepare("SELECT * FROM $table WHERE $field='$value';");
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_CLASS, $model);
        return $stmt->fetchAll();
    }


    public function update($id, $table, $fields) {
        $updateLine = '';
        foreach($fields as $key=>$field){
            $updateLine .= "$key='$field',";
        }
        $updateLine = substr($updateLine,0,-1);
        $sql = "UPDATE $table SET $updateLine WHERE id=$id";
        // Prepare statement
        $stmt = $this->conn->prepare($sql);

        // execute the query
        $stmt->execute();
    }
    public function delete($id, $table){
        $sql = "DELETE FROM $table WHERE id=$id";
        // Prepare statement
        $stmt = $this->conn->prepare($sql);

        // execute the query
        $stmt->execute();
    }
}