<?php

namespace app\models;

use app\src\Connection;

class Model {
    protected $connect;
    protected $table;

    public function __construct() {
        $this->connect = Connection::connect();
    }

    public function all() {
        $sql = "select * from {$this->table}";
        $all = $this->connect->query($sql);
        $all->execute();

        return $all->fetchAll();
    }
}