<?php
// bắt đầu sử dụng session
session_start();
require_once "./config/utils.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="./public/img/favicon.ico" type="image/x-icon">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo PUBLIC_URL . 'css/main.css' ?>">
</head>

<body>
    <div class="container">
        <div class="col-4 offset-4">
            <div class="login-logo d-flex justify-content-center m-5">
                <a href="<?php echo BASE_URL ?>">
                    <img src="<?php echo PUBLIC_URL . 'img/site-logo.png' ?>" alt="" class="img-logo">
                </a>
            </div>
            <form action="post-login.php" method="post" autocomplete="on" id="add-user-form">
                <div class="d-flex justify-content-center">
                    <?php if (isset($_GET['msg'])) : ?>
                        <span class="text-danger"><?php echo $_GET['msg'] ?></span>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="email">Địa chỉ email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Nhập Email" autofocus>
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" class="form-control" id="main-password" name="password" autocomplete="off" required placeholder="Nhập mật khẩu">
                </div>
                <div class="form-group">
                    <label for="password">Nhập lại mật khẩu</label>
                    <input type="password" class="form-control" name="cfpassword" autocomplete="off" required placeholder="Nhập lại mật khẩu">
                    <label id="cfpassword-error" class="error" for="cfpassword">Cần khớp với mật khẩu</label>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Xác nhận đăng ký</button>&nbsp;
                    <a href="<?php echo BASE_URL ?>" class="btn btn-secondary">Hủy</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        $('#add-user-form').validate({
            rules: {
                password: {
                    required: true,
                    minlength: 6,
                    maxlength: 191
                },
                cfpassword: {
                    required: true,
                    minlength: 6,
                    equalTo: "#main-password"
                },
            },
            messages: {
                password: {
                    required: "Hãy nhập mật khẩu",
                    maxlength: "Số lượng ký tự tối đa bằng 191 ký tự"
                },
                cfpassword: {
                    required: "Nhập lại mật khẩu",
                    equalTo: "Cần khớp với mật khẩu"
                },
            }
        });
    </script>
</body>

</html>