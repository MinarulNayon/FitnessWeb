<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$table = 'fitnessgroup';


$errors = array();
$id = "";
$group_name = "";
$type = "";

if (isset($_GET['id'])) {
    $fitnessgroup = selectOne($table, ['id' => $_GET['id']]);

    $id = $fitnessgroup['id'];
    $group_name = $fitnessgroup['group_name'];
    $type = $fitnessgroup['type'];
}

if (isset($_GET['delete_id'])) {
    adminOnly();
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = "Fitness Group deleted successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/trainer/group/index.php"); 
    exit();
}


if (isset($_POST['addfitnessgroup'])) {
    adminOnly();
    if (count($errors) == 0) {
        unset($_POST['addfitnessgroup']);
        $fitnessgroup_id = create($table, $_POST);
        $_SESSION['message'] = "Fitness Group saved successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/trainer/group/index.php"); 
        exit();    
    } else {
        $group_name = $_POST['group_name'];
        $type = $_POST['type'];
    }
}


if (isset($_POST['update-fitness-group'])) {
    adminOnly();
    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['update-fitness-group'], $_POST['id']);
        $group_name = $_POST['group_name'];
        $type = $_POST['type'];
        
        $fitnessgroup_id = update($table, $id, $_POST);
        $_SESSION['message'] = "Fitness Group updated successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/trainer/group/index.php");       
    } else {
        $group_name = $_POST['group_name'];
        $type = $_POST['type'];
    }

}