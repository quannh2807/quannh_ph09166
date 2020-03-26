<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
// lấy thông tin từ form gửi lên
$reply_by = trim($_POST['reply_by']);
$reply_for = trim($_POST['reply_for']);
$created_at = trim($_POST['created_at']);
$reply_messages = trim($_POST['reply_messages']);
if ($reply_by && $reply_for && $created_at && $reply_messages) {
    $status = ACTIVE;
}
// // kiểm tra tài khoản có tồn tại hay không
// $getContactsByIdQuery = "select * from contacts where id = '$reply_for'";
// $contact = queryExecute($getContactsByIdQuery, false);

// if (!$user) {
//     header("location: " . ADMIN_URL . 'users?msg=Tài khoản không tồn tại');
//     die;
// }

// validate bằng php
$reply_messageserr = "";
// check name
if (strlen($reply_messages) < 2 || strlen($reply_messages) > 255) {
    $reply_messageserr = "Yêu cầu nhập nôi dung phản hồi nằm trong khoảng 2-255 ký tự";
}
// query upload to DB
$insertContactQuery = "update contacts
                        set
                          status = '$status',
                          reply_by = '$reply_by',
                          reply_for = '$reply_for',
                          created_at = '$created_at',
                          reply_messages = '$reply_messages'
                    where id = '$reply_for'";
// dd($insertContactQuery);
queryExecute($insertContactQuery, false);
header("location: " . ADMIN_URL . "contacts");
die;
