<?php

unset($_SESSION['isLogged']);
session_destroy();
header('Location: login.php');