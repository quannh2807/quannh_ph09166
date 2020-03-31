<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$name = trim($_POST['name']);
$address = trim($_POST['address']);
$content = trim($_POST['content']);

$status = trim($_POST['status']);
$avatar = $_FILES['avatar'];
// validate bằng php
$nameerr = "";
$addresserr = "";
// check name
if (strlen($name) < 2 || strlen($name) > 191) {
    $nameerr = "Yêu cầu nhập tên tài khoản nằm trong khoảng 2-191 ký tự";
}

if ($nameerr != "") {
    header('location: ' . ADMIN_URL . "customer_feedbacks/add-form.php?nameerr=$nameerr");
    die;
}

// upload file ảnh
$filename = "";
if($avatar['size'] > 0){
    $filename = uniqid() . '-' . $avatar['name'];
    move_uploaded_file($avatar['tmp_name'], "../../public/img/" . $filename);
    $filename = "public/img/" . $filename;
}
// upload file ảnh
$insertFeedbacksQuery = "insert into customer_feedbacks
                          (name, address, avatar, content, status)
                    values
                          ('$name', '$address', '$filename', '$content', '$status')";
// dd($insertFeedbacksQuery);
queryExecute($insertUserQuery, false);
header("location: " . ADMIN_URL . "customer_feedbacks");
die;
