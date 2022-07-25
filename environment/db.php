<?php

class Database {

    public static function connect()
    {
        try {
            $dsn = "mysql:host=localhost;dbname=clinic;";
            $pdo = new PDO($dsn, 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection fail: " . $e->getMessage();
        }
    }
}