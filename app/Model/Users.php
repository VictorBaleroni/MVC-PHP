<?php

namespace App\Model;

use App\Core\Database;
use PDO;

class Users{
    public static function findAll(){
        $conn = new Database();
        $res = $conn->execQuery('SELECT * FROM users');
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findById(int $id){

    }
}
