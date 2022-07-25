<?php
include 'App/core/db.php';
include 'App/QueryBuilder/Table.php';
include 'App/QueryBuilder/Doctor.php';
include 'partials/header.php';
include 'partials/footer.php';
$db = new Database;
$qB = new Table($db->connect());
$qB->create();

