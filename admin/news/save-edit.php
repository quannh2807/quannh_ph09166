<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();

$id = trim($_POST['id']);
$author_id = trim($_POST['author_id']);
$feature_image = $_FILES['feature_image'];
$content = $news['news_content'];
if(strlen($_POST['news_content']) > 0) {
    $content = trim($_POST['news_content']);
}

// kiểm tra tin tức có tồn tại hay không
$getNewsQuery = "select * from news where id = $id";
$news = queryExecute($getNewsQuery, false);

if(!$news){
    header("location: " . ADMIN_URL . 'news?msg=News không tồn tại');die;
}

// upload file ảnh
$filename = $news['feature_image'];
if($feature_image['size'] > 0){
    $filename = uniqid() . '-' . $feature_image['name'];
    move_uploaded_file($feature_image['tmp_name'], "../../public/img/" . $filename);
    $filename = "public/img/" . $filename;
}

$updateNewsQuery = "update news set
                        author_id = '$author_id',
                        feature_image = '$filename',
                        news_content = '$content'
                    where id = '$id'";
queryExecute($updateNewsQuery, false);
header("location: " . ADMIN_URL . "news");
die;
