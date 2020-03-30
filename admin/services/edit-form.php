<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();

// lấy id ra ngoài bang thông id trên đường dẫn
$id = isset($_GET['id']) ? $_GET['id'] : -1;
// get services query
$getServicesQuery = "select * from services where id = '$id'";
$services = queryExecute($getServicesQuery, false);

// kiểm tra xem có quyền để thực hiện edit hay không
if ($_SESSION[AUTH]['role_id'] < 1) {
    header("location: " . ADMIN_URL . 'news?msg=Bạn không có quyền sửa thông tin bài viết này');
    die;
}
?>
<!DOCTYPE html>
<html>

<head>
    <?php include_once '../_share/style.php'; ?>
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
                            <h1 class="m-0 text-dark">Cập nhật thông tin Dịch vụ</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <form id="add-user-form" action="<?= ADMIN_URL . 'services/save-edit.php' ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="id" value="<?= $services['id'] ?>" hidden>
                                <div class="form-group">
                                    <label for="">Tên dịch vụ<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" value="<?= $services['name'] ?>">
                                    <?php if (isset($_GET['nameerr'])) : ?>
                                        <label class="error"><?= $_GET['nameerr'] ?></label>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="">Introduce<span class="text-danger">*</span></label>
                                    <textarea name="introduce" class="form-control" id="" cols="30" rows="10"><?= $services['introduce'] ?></textarea>
                                    <?php if (isset($_GET['introduceerr'])) : ?>
                                        <label class=" error"><?= $_GET['introduceerr'] ?></label>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <img src="<?= BASE_URL . $services['feature_img'] ?>" id="preview-img" class="img-fluid" alt="Ảnh đại diện dịch vụ">
                                    </div>
                                </div>
                                <div class="input-group mt-3 mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Ảnh đại diện<span class="text-danger">*</span></span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="feature_img" onchange="encodeImageFileAsURL(this)">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mySelect1">Trạng thái<span class="text-danger">*</span></label>
                                    <select id="mySelect1" class="form-control" name="status" value="<?= $services['status'] ?>">
                                        <option>Chọn trạng thái</option>
                                        <?php
                                        if ($services['status'] == 1) { ?>
                                            <option value="1" selected>Active</option>
                                            <option value="0">Inactive</option>
                                        <?php    } else if ($services['status'] == 0) { ?>
                                            <option value="1">Active</option>
                                            <option value="0" selected>Inactive</option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Tạo</button>&nbsp;
                                    <a href="<?= ADMIN_URL . 'users' ?>" class="btn btn-danger">Hủy</a>
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
        $('#add-user-form').validate({
            rules: {
                name: {
                    required: true,
                    maxlength: 191
                },
                introduce: {
                    require: true
                },
                feature_img: {
                    required: true,
                    extension: "png|jpg|jpeg|gif"
                }
            },
            messages: {
                name: {
                    required: "Hãy nhập tên người dùng",
                    maxlength: "Số lượng ký tự tối đa bằng 191 ký tự"
                },
                introduce: {
                    require: "Hãy nhập lời giới thiệu"
                },
                feature_img: {
                    required: "Hãy nhập ảnh đại diện",
                    extension: "Hãy nhập đúng định dạng ảnh (jpg | jpeg | png | gif)"
                }
            }
        });
    </script>
</body>

</html>