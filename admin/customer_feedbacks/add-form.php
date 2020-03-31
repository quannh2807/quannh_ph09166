<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();
?>
<!DOCTYPE html>
<html>

<head>
    <?php include_once '../_share/style.php'; ?>
    <style>
        label.error {
            display: inline;
            color: #ff0000;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php include_once '../_share/header.php'; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include_once '../_share/sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Customer Feedbacks</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <form id="add-feedbacks-form" action="<?= ADMIN_URL . 'customer_feedbacks/save-add.php' ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tên người dùng<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name">
                                    <?php if (isset($_GET['nameerr'])) : ?>
                                        <label class="error"><?= $_GET['nameerr'] ?></label>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="">Địa chỉ<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="address">
                                    <?php if (isset($_GET['addresserr'])) : ?>
                                        <label class="error"><?= $_GET['addresserr'] ?></label>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="">Nội dung<span class="text-danger">*</span></label>
                                    <textarea name="content" class="form-control" id="content-feedback"></textarea>
                                    <?php if (isset($_GET['contenterr'])) : ?>
                                        <label class="error"><?= $_GET['contenterr'] ?></label>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <img src="<?= DEFAULT_IMAGE ?>" id="preview-img" class="img-fluid">
                                    </div>
                                </div>
                                <div class="input-group mt-3 mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Ảnh đại diện<span class="text-danger">*</span></span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="avatar" onchange="encodeImageFileAsURL(this)">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mySelect1">Trạng thái<span class="text-danger">*</span></label>
                                    <select id="mySelect1" class="form-control" name="status">
                                        <option value="" selected>Chọn trạng thái</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Tạo</button>&nbsp;
                                    <a href="<?= ADMIN_URL . 'customer_feedbacks' ?>" class="btn btn-danger">Hủy</a>
                                </div>
                            </div>

                        </div>
                    </form>
                    <!-- /.row -->

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include_once '../_share/footer.php'; ?>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <?php include_once '../_share/script.php'; ?>
    <script>
        function encodeImageFileAsURL(element) {
            var file = element.files[0];
            if (file === undefined) {
                $('#preview-img').attr('src', "<?= DEFAULT_IMAGE ?>");
                return false;
            }
            var reader = new FileReader();
            reader.onloadend = function() {
                $('#preview-img').attr('src', reader.result)
            }
            reader.readAsDataURL(file);
        }

        $(document).ready(function() {
            $('#add-feedbacks-form').validate({
                    rules: {
                        name: {
                            required: true,
                            minleangth: 2,
                            maxlength: 191
                        },
                        address: {
                            require: true
                        },
                        content: {
                            require: true
                        },
                        avatar: {
                            required: true,
                            extension: "png|jpg|jpeg|gif"
                        }
                    },
                    messages: {
                        name: {
                            required: "Hãy nhập tên người dùng",
                            minlength: "Số lượng ký tự tối thiểu bằng 2",
                            maxlength: "Số lượng ký tự tối đa bằng 191 ký tự"
                        },
                        address: {
                            require: "Hãy nhập địa chỉ người dùng"
                        },
                        content: {
                            require: "Hãy nhập nội dùng feedback"
                        },
                        avatar: {
                            required: "Hãy nhập ảnh đại diện",
                            extension: "Hãy nhập đúng định dạng ảnh (jpg | jpeg | png | gif)"
                        }
                    }
                });
        });
    </script>
</body>

</html>