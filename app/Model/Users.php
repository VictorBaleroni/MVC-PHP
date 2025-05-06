<?php

namespace App\Model;

use App\Core\Database;

class Users{
    private $conn;

    public function __construct(){
        $this->conn = new Database();
    }

    public function getAllUsers(){
        $sql = "SELECT * FROM users";
        return $this->conn->findAll($sql);
    }

    public function getUserById($id){
        $sql = "SELECT * FROM users WHERE id = :id";
        return $this->conn->findById($sql, ['id' => $id]);
    }

    public function updateUser($arr = []){
        $sql = "UPDATE users SET name = :name, email = :email WHERE id = :id";
        return $this->conn->update($sql, $arr);
    }
}
