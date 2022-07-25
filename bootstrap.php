<?php
include 'App/core/db.php';
include 'App/QueryBuilder/Table.php';
include 'App/QueryBuilder/Doctor.php';
include 'App/QueryBuilder/Patient.php';
include 'partials/header.php';
include 'partials/footer.php';
include 'Session/Security.php';

$db = new Database;
$qB = new Table($db->connect());
$qB->create();
