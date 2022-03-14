<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$table = 'subscriptions';


$errors = array();
$id = "";
$package_name = "";
$amount = "";

if (isset($_GET['id'])) {
    $subscription = selectOne($table, ['id' => $_GET['id']]);

    $id = $subscription['id'];
    $package_name = $subscription['package_name'];
    $amount = $subscription['amount'];
}

if (isset($_GET['delete_id'])) {
    adminOnly();
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = "Subscription package deleted successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/trainer/subscription/index.php"); 
    exit();
}


if (isset($_POST['addsubscription'])) {
    adminOnly();
    if (count($errors) == 0) {
        unset($_POST['addsubscription']);
        $subscription_id = create($table, $_POST);
        $_SESSION['message'] = "Subscription package saved successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/trainer/subscription/index.php"); 
        exit();    
    } else {
        $package_name = $_POST['package_name'];
        $amount = $_POST['amount'];
    }
}


if (isset($_POST['updatesubscription'])) {
    adminOnly();
    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['updatesubscription'], $_POST['id']);
        $package_name = $_POST['package_name'];
        $amount = $_POST['amount'];
        
        $subscription_id = update($table, $id, $_POST);
        $_SESSION['message'] = "Subscription package updated successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/trainer/subscription/index.php");       
    } else {
        $package_name = $_POST['package_name'];
        $amount = $_POST['amount'];
    }

}