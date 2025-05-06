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

    private function query($sql, $params = []){
        $stmt = $this->conn()->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

    public function findById(string $sql, array $params = []){
        $stmt = $this->query($sql, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findAll(string $sql, array $params = []){
        $stmt = $this->query($sql, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert(string $sql, array $params = []){
        $stmt = $this->query($sql, $params);
        return $this->conn()->lastInsertId();
    }

    public function update(string $sql, array $params = []){
        $stmt = $this->query($sql, $params);
        return $stmt->rowCount();
    }

    public function delete(string $sql, array $params = []){
        $stmt = $this->query($sql, $params);
        return $stmt->rowCount();
    }
}