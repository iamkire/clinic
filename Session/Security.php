<?php

class Secure{
    public static function session(){
        session_start();
        if(!isset($_SESSION['isLogged'])) {
            header('Location: ../Auth/login.php');
        }
    }
}