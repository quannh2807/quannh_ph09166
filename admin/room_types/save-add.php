<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$name = trim($_POST['name']);
$status = trim($_POST['status']);
$quantity = trim($_POST['quantity']);
$price = trim($_POST['price']);
$feature_img = $_FILES['feature_img'];
$short_descript = trim($_POST['short_descript']);
// validate bằng php
$nameerr = "";
$quantityerr = "";
$priceerr = "";
// check name
if (strlen($name) < 2 || strlen($name) > 191) {
    $nameerr = "Yêu cầu nhập tên dịch vụ nằm trong khoảng 2-191 ký tự";
}
if (strlen($quantity) < 1) {
    $quantityerr = "Không thể nhập số lượng phòng nhỏ hơn một";
}

if (strlen($quantity) > 50) {
    $quantityerr = "Không thể nhập số lượng phòng lớn hơn năm mươi";
}

if (strlen($price) < 0) {
    $priceerr = "Không thể nhập giá phòng nhỏ hơn 0";
}

if ($nameerr . $quantityerr. $priceerr != "") {
    header('location: ' . ADMIN_URL . "room_types/add-form.php?nameerr=$nameerr&quantityerr=$quantityerr&priceerr=$priceerr");
    die;
}

// upload file ảnh
$filename = "";
if($feature_img['size'] > 0){
    $filename = uniqid() . '-' . $feature_img['name'];
    move_uploaded_file($feature_img['tmp_name'], "../../public/img/" . $filename);
    $filename = "public/img/" . $filename;
}

$insertRoomTypeQuery = "insert into room_types
                          (name, status, price, quantity, short_descript, feature_image)
                    values
                          ('$name', '$status', '$price', '$quantity', '$short_descript', '$filename')";
queryExecute($insertRoomTypeQuery, false);
header("location: " . ADMIN_URL . "room_types");
die;
