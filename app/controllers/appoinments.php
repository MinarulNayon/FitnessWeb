<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$table = 'appoinment';


$errors = array();
$id = "";
$ClientName = "";
$ClientMobileNumber = "";
$Groups = "";
$AppoinmentDate = "";

if (isset($_GET['id'])) {
    $fitnessgroup = selectOne($table, ['id' => $_GET['id']]);

    $id = $fitnessgroup['id'];
    $ClientName = $fitnessgroup['ClientName'];
    $ClientMobileNumber = $fitnessgroup['ClientMobileNumber'];
    $Groups = $fitnessgroup['Groups'];
    $AppoinmentDate = $fitnessgroup['AppoinmentDate'];
}

if (isset($_GET['delete_id'])) {
    adminOnly();
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = "Appoinment deleted successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/trainer/appointments/index.php"); 
    exit();
}


if (isset($_POST['add-appoinment'])) {
    adminOnly();
    if (count($errors) == 0) {
        unset($_POST['add-appoinment']);
        $appoinment = create($table, $_POST);
        $_SESSION['message'] = "Appoinment saved successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/trainer/appointments/index.php"); 
        exit();    
    } else {
        $ClientName = $_POST['ClientName'];
        $ClientMobileNumber = $_POST['ClientMobileNumber'];
        $Groups = $_POST['Groups'];
        $AppoinmentDate = $_POST['AppoinmentDate'];
    }
}


if (isset($_POST['update-appoinment'])) {
    adminOnly();
    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['update-appoinment'], $_POST['id']);
        $ClientName = $_POST['ClientName'];
        $ClientMobileNumber = $_POST['ClientMobileNumber'];
        $Groups = $_POST['Groups'];
        $AppoinmentDate = $_POST['AppoinmentDate'];
        
        $appoinment = update($table, $id, $_POST);
        $_SESSION['message'] = "Appoinment info. updated successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/trainer/appointments/index.php");       
    } else {
        $ClientName = $_POST['ClientName'];
        $ClientMobileNumber = $_POST['ClientMobileNumber'];
        $Groups = $_POST['Groups'];
        $AppoinmentDate = $_POST['AppoinmentDate'];
    }

}