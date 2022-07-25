<?php

class Database {
    private $serverName = "localhost";
    private $userName = "root";
    private $password = "";
    private $dbName = "clinic";

    public function connect()
    {
        try {
            $dsn = "mysql:host=" . $this->serverName . "; dbname=" . $this->dbName . ";";
            $pdo = new PDO($dsn, $this->userName, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection fail: " . $e->getMessage();
        }
    }
}