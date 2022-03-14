<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$table = 'helps';


$errors = array();
$id = "";
$client_email = "";
$message = "";

if (isset($_GET['id'])) {
    $help = selectOne($table, ['id' => $_GET['id']]);
    $id = $help['id'];
    $client_email = $help['client_email'];
    $message = $help['message'];
}