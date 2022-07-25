<?php


class Table
{
    public $connect;

    public function __construct(PDO $connect)
    {
        $this->connect = $connect;
    }

    public function create()
    {
        try {
            $sql = "CREATE TABLE IF NOT EXISTS users(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255),
            email VARCHAR(255) UNIQUE,
            password VARCHAR(255),
            phone_number INT,
            address VARCHAR(255),
            medical_condition VARCHAR(255),
            blood_type VARCHAR (255),
            user_type VARCHAR(255)  DEFAULT 'patient'
            )";
            $this->connect->exec($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}