<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$title = trim($_POST['title']);
$content = trim($_POST['content']);
// $view = trim($_POST['view']);
$author_id = trim($_POST['author_id']);
$created_at = trim($_POST['created_at']);
$feature_image = $_FILES['feature_image'];
// validate bằng php
$titleerr = "";
$contenterr = "";
// check title
if (strlen($title) < 10 || strlen($title) > 100) {
    $titleerr = "Yêu cầu nhập tiêu đề nằm trong khoảng 10-100 ký tự";
}
// check content
if (strlen($content) < 40 || strlen($content) > 2000) {
    $contenterr = "Yêu cầu nhập nội dung nằm trong khoảng 40-2000 ký tự";
}

if ($titleerr . $contenterr!= "") {
    header('location: ' . ADMIN_URL . "news/add-form.php?titleerr=$titleerr&contenterr=$contenterr");
    die;
}

// upload file ảnh
$filename = "";
if($feature_image['size'] > 0){
    $filename = uniqid() . '-' . $feature_image['name'];
    dd($filename);
    move_uploaded_file($feature_image['tmp_name'], "../../public/img/" . $filename);
    $filename = "public/img/" . $filename;
}

$insertNewsQuery = "insert into news
                          (title, feature_image, content, views, author_id, created_at)
                    values
                          ('$title', '$filename', '$content', '$author_id', '$created_at')";

// dd($insertNewsQuery);
queryExecute($insertNewsQuery, false);
header("location: " . ADMIN_URL . "news");
die;
