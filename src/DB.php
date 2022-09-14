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
}