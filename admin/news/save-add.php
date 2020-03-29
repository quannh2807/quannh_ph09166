<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();

$news_content = trim($_POST['news_content']);

$author_id = trim($_SESSION[AUTH]['id']);
$feature_image = $_FILES['feature_image'];

// upload file ảnh
$filename = "";
if($feature_image['size'] > 0){
    $filename = uniqid() . '-' . $feature_image['name'];
    move_uploaded_file($feature_image['tmp_name'], "../../public/img/" . $filename);
    $filename = "public/img/" . $filename;
}

$insertNewsQuery = "insert into news
                          (feature_image, news_content, author_id)
                    values
                          ('$filename', '$news_content', '$author_id')";

// dd($insertNewsQuery);
queryExecute($insertNewsQuery, false);
header("location: " . ADMIN_URL . "news");
die;
