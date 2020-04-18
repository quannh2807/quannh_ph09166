<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
// lấy thông tin từ form gửi lên
$id = trim($_POST['id']);
$name = trim($_POST['name']);
$status = trim($_POST['status']);
$email = trim($_POST['email']);
$phone_number = trim($_POST['phone_number']);
$address = trim($_POST['address']);
$map_url = trim($_POST['map_url']);
$youtube_url = trim($_POST['youtube_url']);
$zalo_url = trim($_POST['zalo_url']);
$explore_url = trim($_POST['explore_url']);
$introduce_welcome = trim($_POST['introduce_welcome']);
$logo = $_FILES['logo'];
$offer = $_FILES['offer'];

// validate bằng php
$nameerr = "";
$phone_numbererr= "";
$emailerr = "";
$addresserr = "";
$map_urlerr = "";
$youtube_urlerr = "";
$zalo_urlerr = "";
$map_urlerr = "";
$map_urlerr = "";

// check name
if(strlen($name) < 2 || strlen($name) > 191){
    $nameerr = "Yêu cầu nhập tên tài khoản nằm trong khoảng 2-191 ký tự";
}

// check email
if(strlen($email) == 0){
    $emailerr = "Yêu cầu nhập email!";
}
if ($emailerr == "" && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailerr = "Không đúng định dạng email";
}
// check email đã tồn tại hay chưa
$checkEmailQuery = "select * from users where email = '$email' and id != $id";
$users = queryExecute($checkEmailQuery, true);
if($emailerr == "" && count($users) > 0){
    $emailerr = "Email đã tồn tại, vui lòng sử dụng email khác";
}

if($nameerr . $emailerr != "" ){
    header('location: ' . ADMIN_URL . "users/edit-form.php?id=$id&nameerr=$nameerr&emailerr=$emailerr");
    die;
}

// upload file
$filename = $user['avatar'];
if($avatar['size'] > 0){
    $filename = uniqid() . '-' . $avatar['name'];
    move_uploaded_file($avatar['tmp_name'], "../../public/img/" . $filename);
    $filename = "public/img/" . $filename;
}

$updateUserQuery = "update users
                    set
                          name = '$name',
                          email = '$email',
                          role_id = $role_id,
                          phone_number = '$phone_number',
                          avatar = '$filename'
                    where id = $id";
queryExecute($updateUserQuery, false);
header("location: " . ADMIN_URL . "users");
die;
