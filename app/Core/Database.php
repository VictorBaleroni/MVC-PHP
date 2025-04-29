<?php

namespace App\Core;

use PDO;

class Database{
    protected static $pdo;

    public function __construct(){
        try {
            self::$pdo = new PDO('mysql:host=localhost;dbname=bancoCrudTrampo;charset=utf8','root','');
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$pdo->exec('SET NAMES utf8');
        }catch(\PDOException $e){
            die('Error: ' . $e->getMessage());
        }
    }

    public static function conn(){
        if(!self::$pdo){
            new Database();
        }
        return self::$pdo;
    }
}