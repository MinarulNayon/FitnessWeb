<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$table = 'client';


$errors = array();
$id = "";
$ClientName = "";
$Address = "";
$Groups = "";
$Date = "";

if (isset($_GET['id'])) {
    $fitnessgroup = selectOne($table, ['id' => $_GET['id']]);

    $id = $fitnessgroup['id'];
    $ClientName = $fitnessgroup['ClientName'];
    $Address = $fitnessgroup['Address'];
    $Groups = $fitnessgroup['Groups'];
    $Date = $fitnessgroup['Date'];
}

if (isset($_GET['delete_id'])) {
    adminOnly();
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = "Client deleted successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/trainer/clients/index.php"); 
    exit();
}


if (isset($_POST['add-client'])) {
    adminOnly();
    if (count($errors) == 0) {
        unset($_POST['add-client']);
        $client = create($table, $_POST);
        $_SESSION['message'] = "Client saved successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/trainer/clients/index.php"); 
        exit();    
    } else {
        $ClientName = $_POST['ClientName'];
        $Address = $_POST['Address'];
        $Groups = $_POST['Groups'];
        $Date = $_POST['Date'];
    }
}


if (isset($_POST['update-client'])) {
    adminOnly();
    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['update-client'], $_POST['id']);
        $ClientName = $_POST['ClientName'];
        $Address = $_POST['Address'];
        $Groups = $_POST['Groups'];
        $Date = $_POST['Date'];
        
        $client = update($table, $id, $_POST);
        $_SESSION['message'] = "Client info. updated successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/trainer/clients/index.php");       
    } else {
        $ClientName = $_POST['ClientName'];
        $Address = $_POST['Address'];
        $Groups = $_POST['Groups'];
        $Date = $_POST['Date'];
    }

}