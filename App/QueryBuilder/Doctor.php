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
            $password = 'doctor123';
//            $encryptPass = password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(email, password) 
                VALUES('doctor@pabau.com','$password')";
        $stmt= $this->connect->prepare($sql);
        $stmt->execute();
            echo "Doctor email and password generated";
        }catch(PDOException){
        }
    }

    public function login()
    {
        try {
            $sql = "SELECT email,password FROM users WHERE email=? and password=?";
            $stmt = $this->connect->prepare($sql);
            $stmt->execute([$_POST['email'], $_POST['password']]);
//            $row = $stmt->fetch(PDO::FETCH_ASSOC);
//            if(password_verify($_POST['password'], $row['password'])){
//                $_SESSION['isLogged'] = true;
//            }
            if ($stmt->rowCount() > 0) {
                header('Location: ../views/patients.php');
            } else {
                echo 'Invalid email or password';
            }
        } catch (PDOException) {
                echo 'An error occured';
        }
    }
}