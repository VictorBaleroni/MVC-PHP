<?php

namespace App\Model;

use App\Core\Database;
use PDO;

class Users{
    private $conn;

    public function __construct(){
        $this->conn = new Database();
    }

    public function getAllUsers(){
        $sql = "SELECT * FROM users";
        return $this->conn->findAll($sql);
    }
}
