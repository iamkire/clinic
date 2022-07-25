<?php
include 'App/core/db.php';
include 'App/QueryBuilder/Table.php';

$db = new Database;
$qB = new Table($db->connect());
$qB->create();