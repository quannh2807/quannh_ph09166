<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();

// lấy thông tin của người dùng ra ngoài thông id trên đường dẫn
$id = isset($_GET['id']) ? $_GET['id'] : -1;
/// get customer feedbacks query
$getFeedbacksQuery = "select * from customer_feedbacks where id = '$id'";
$feedbacks = queryExecute($getFeedbacksQuery, false);
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
                            <h1 class="m-0 text-dark">Cập nhật phản hồi của khách hàng</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <form id="add-feedbacks-form" action="<?= ADMIN_URL . 'customer_feedbacks/save-edit.php' ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="id" value="<?= $feedbacks['id'] ?>" hidden>
                                <div class="form-group">
                                    <label for="">Tên người dùng<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" value="<?= $feedbacks['name'] ?>">
                                    <?php if (isset($_GET['nameerr'])) : ?>
                                        <label class="error"><?= $_GET['nameerr'] ?></label>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="">Địa chỉ<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="address" value="<?= $feedbacks['address'] ?>">
                                    <?php if (isset($_GET['addresserr'])) : ?>
                                        <label class="error"><?= $_GET['addresserr'] ?></label>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="">Nội dung<span class="text-danger">*</span></label>
                                    <textarea name="content" class="form-control" id="content-feedback">value="<?= $feedbacks['content'] ?>"</textarea>
                                    <?php if (isset($_GET['contenterr'])) : ?>
                                        <label class="error"><?= $_GET['contenterr'] ?></label>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <img src="<?= BASE_URL . $feedbacks['avatar'] ?>" id="preview-img" class="img-fluid">
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
                                        <?php
                                        if ($feedbacks['status'] == 1) { ?>
                                            <option value="1" selected>Active</option>
                                            <option value="0">Inactive</option>
                                        <?php    } else if ($feedbacks['status'] == 0) { ?>
                                            <option value="1">Active</option>
                                            <option value="0" selected>Inactive</option>
                                        <?php } ?>
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
                $('#preview-img').attr('src', "<?= BASE_URL . $user['avatar'] ?>");
                return false;
            }
            var reader = new FileReader();
            reader.onloadend = function() {
                $('#preview-img').attr('src', reader.result)
            }
            reader.readAsDataURL(file);
        }
        $('#edit-user-form').validate({
            rules: {
                name: {
                    required: true,
                    maxlength: 191
                },
                email: {
                    required: true,
                    maxlength: 191,
                    email: true,
                    remote: {
                        url: "<?= ADMIN_URL . 'users/verify-email-existed.php' ?>",
                        type: "post",
                        data: {
                            email: function() {
                                return $("input[name='email']").val();
                            },
                            id: <?= $user['id']; ?>
                        }
                    }
                },
                phone_number: {
                    number: true
                },
                house_no: {
                    maxlength: 191
                },
                avatar: {
                    extension: "png|jpg|jpeg|gif"
                }
            },
            messages: {
                name: {
                    required: "Hãy nhập tên người dùng",
                    maxlength: "Số lượng ký tự tối đa bằng 191 ký tự"
                },
                email: {
                    required: "Hãy nhập email",
                    maxlength: "Số lượng ký tự tối đa bằng 191 ký tự",
                    email: "Không đúng định dạng email",
                    remote: "Email đã tồn tại, vui lòng sử dụng email khác"
                },
                phone_number: {
                    min: "Bắt buộc là số có 10 chữ số",
                    max: "Bắt buộc là số có 10 chữ số",
                    number: "Nhập định dạng số"
                },
                house_no: {
                    maxlength: "Số lượng ký tự tối đa bằng 191 ký tự"
                },
                avatar: {
                    extension: "Hãy nhập đúng định dạng ảnh (jpg | jpeg | png | gif)"
                }
            }
        });
    </script>
</body>

</html>