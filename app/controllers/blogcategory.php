<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$table = 'blog_category';


$errors = array();
$id = "";
$blog_category = "";

if (isset($_GET['id'])) {
    $blog_category = selectOne($table, ['id' => $_GET['id']]);

    $id = $blog_category['id'];
    $blog_category = $blog_category['blog_category'];
}

if (isset($_GET['delete_id'])) {
    adminOnly();
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = "Blog Category deleted successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/blogcategory/index.php"); 
    exit();
}


if (isset($_POST['add-blog-category'])) {
    adminOnly();
    if (count($errors) == 0) {
        unset($_POST['add-blog-category']);
        $blog_category = $_POST['blog_category'];
    
        $blog_category = create($table, $_POST);
        $_SESSION['message'] = "Blog category saved successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/admin/blogcategory/index.php"); 
        exit();    
    } else {
        $blog_category = $_POST['blog_category'];
    }
}


if (isset($_POST['update-blog-category'])) {
    adminOnly();
    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['update-blog-category'], $_POST['id']);
        $blog_category = $_POST['blog_category'];
        
        $blog_category = update($table, $id, $_POST);
        $_SESSION['message'] = "Blog category updated successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/admin/blogcategory/index.php");       
    } else {
        $blog_category = $_POST['blog_category'];
    }

}