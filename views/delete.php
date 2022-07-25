<?php
include '../bootstrap.php';
$db =  new Database();
$patient = new Patient($db->connect());
$patient->delete($_GET['id']);
