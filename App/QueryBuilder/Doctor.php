<?php

class Doctor
{
    private $connect;

    public function __construct(PDO $connect)
    {
        $this->connect = $connect;
    }

    public function create()
    {
        try {
            $password = 'doctor123';
//            $encryptPass = password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO users(email, password, user_type) 
                VALUES('doctor@pabau.com','$password', 'doctor')";
            $stmt = $this->connect->prepare($sql);
            $stmt->execute();
            echo "Doctor email and password generated";
        } catch (PDOException) {
        }
    }

    public function login()
    {
        if(isset($_POST['submit']))
        try {
            $sql = "SELECT email,password FROM users WHERE email=? and password=?";
            $stmt = $this->connect->prepare($sql);
            $stmt->execute([$_POST['email'], $_POST['password']]);
//            $row = $stmt->fetch(PDO::FETCH_ASSOC);
//            if(password_verify($_POST['password'], $row['password'])){
//                $_SESSION['isLogged'] = true;
//            }
            if ($stmt->rowCount() > 0) {
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['isLogged'] = true;

                header('Location: ../views/index.php');
            } elseif (empty($_POST['email']) && empty($_POST['password'])) {
                echo 'Please fill out the fields';
            } else {
                echo 'Invalid email or password';
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}