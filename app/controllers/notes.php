<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$table = 'notes';


$errors = array();
$id = "";
$client_name = "";
$details = "";

if (isset($_GET['id'])) {
    $notes = selectOne($table, ['id' => $_GET['id']]);

    $id = $notes['id'];
    $client_name = $notes['client_name'];
    $details = $notes['details'];
}

if (isset($_GET['delete_id'])) {
    adminOnly();
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = "Note deleted successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/trainer/notes/index.php"); 
    exit();
}


if (isset($_POST['addnote'])) {
    adminOnly();
    if (count($errors) == 0) {
        unset($_POST['addnote']);
        $notes_id = create($table, $_POST);
        $_SESSION['message'] = "Note saved successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/trainer/notes/index.php"); 
        exit();    
    } else {
        $client_name = $_POST['client_name'];
        $details = $_POST['details'];
    }
}


if (isset($_POST['updatenote'])) {
    adminOnly();
    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['updatenote'], $_POST['id']);
        $client_name = $_POST['client_name'];
        $details = $_POST['details'];
        
        $notes_id = update($table, $id, $_POST);
        $_SESSION['message'] = "Note updated successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/trainer/notes/index.php");       
    } else {
        $client_name = $_POST['client_name'];
        $details = $_POST['details'];
    }

}