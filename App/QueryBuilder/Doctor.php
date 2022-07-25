<?php


class Doctor
{
    public $connect;

    public function __construct(PDO $connect)
    {
        $this->connect = $connect;
    }
    public function create()
    {
        try{
        $sql = "INSERT INTO users(email, password) 
                VALUES  ('doctor@pabau.com','doctor123')";
        $stmt= $this->connect->prepare($sql);
        $stmt->execute();
            echo "Doctor email and password generated";
        }catch(PDOException){
            echo 'User already exists';
        }
    }
}