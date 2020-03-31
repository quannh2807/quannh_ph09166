<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$id = trim($_POST['id']);
$title = trim($_POST['title']);
$content = trim($_POST['content']);
$author_id = trim($_POST['author_id']);
$created_at = trim($_POST['created_at']);
$feature_image = $_FILES['feature_image'];

// validate bằng php
$titleerr = "";
$contenterr = "";

// kiểm tra tin tức có tồn tại hay không
$getNewsQuery = "select * from news where id = $id";
$news = queryExecute($getNewsQuery, false);

if(!$news){
    header("location: " . ADMIN_URL . 'news?msg=News không tồn tại');die;
}

// check title
if (strlen($title) < 10 || strlen($title) > 100) {
    $titleerr = "Yêu cầu nhập tiêu đề nằm trong khoảng 10-100 ký tự";
}
// check content
if (strlen($content) < 40 ) {
    $contenterr = "Yêu cầu nhập nội dung nằm trong khoảng 40-2000 ký tự";
}

if ($titleerr . $contenterr!= "") {
    header('location: ' . ADMIN_URL . "news/add-form.php?titleerr=$titleerr&contenterr=$contenterr");
    die;
}

// upload file ảnh
$filename = $news['feature_image'];
if($feature_image['size'] > 0){
    $filename = uniqid() . '-' . $feature_image['name'];
    move_uploaded_file($feature_image['tmp_name'], "../../public/img/" . $filename);
    $filename = "public/img/" . $filename;
}

$updateNewsQuery = "update news
                    set title = '$title',
                    feature_image = '$filename',
                    content = '$content',
                    author_id = '$author_id',
                    created_at = '$created_at'
                    where id = '$id'";

// dd($updateNewsQuery);
queryExecute($updateNewsQuery, false);
header("location: " . ADMIN_URL . "news");
die;
