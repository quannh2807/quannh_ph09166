<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();
// get news
$getNewsQuery = "select * from news";
$news = queryExecute($getNewsQuery, true);

?>
<!DOCTYPE html>
<html>

<head>
    <?php include_once '../_share/style.php'; ?>
    <script src="https://cdn.tiny.cloud/1/09n2cu8687a01c6pb501sbldantk25a45y32kbe1uneb85j4/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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
                            <h1 class="m-0 text-dark">Thêm tin tức</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <!-- Small boxes (Stat box) -->
                    <form id="add-user-form" action="<?= ADMIN_URL . 'news/save-add.php' ?>" method="post" enctype="multipart/form-data">
                        <div class="row p-4">
                            <div class="form-group col-md-6 col-12">
                                <div class="col-md-6 offset-md-3">
                                    <img src="<?= DEFAULT_IMAGE ?>" id="preview-img" class="img-fluid" multiple>
                                </div>
                            </div>
                            <div class="custom-file col-md-6 col-12">
                                <input type="file" class="custom-file-input" id="inputGroupFile02" name="feature_image" onchange="encodeImageFileAsURL(this)">
                                <label class="custom-file-label" for="inputGroupFile02"><span class="text-danger">*</span>Ảnh đại diện bài viết</label>
                            </div>
                        </div>
                        <textarea class="news_content" id="" cols="30" rows="10" name="news_content"></textarea>
                        <div class="col d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Tạo</button>&nbsp;
                            <a href="<?= ADMIN_URL . 'news' ?>" class="btn btn-danger">Hủy</a>
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
        tinymce.init({
            selector: '.news_content',
            height: 500,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });

        /** =================== Before =================== */
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
        // $('#add-user-form').validate({
        //     rules: {
        //         name: {
        //             required: true,
        //             maxlength: 191
        //         },
        //         email: {
        //             required: true,
        //             maxlength: 191,
        //             email: true,
        //             remote: {
        //                 url: "<?= ADMIN_URL . 'users/verify-email-existed.php' ?>",
        //                 type: "post",
        //                 data: {
        //                     email: function() {
        //                         return $("input[name='email']").val();
        //                     }
        //                 }
        //             }
        //         },
        //         password: {
        //             required: true,
        //             maxlength: 191
        //         },
        //         cfpassword: {
        //             required: true,
        //             equalTo: "#main-password"
        //         },
        //         phone_number: {
        //             number: true
        //         },
        //         house_no: {
        //             maxlength: 191
        //         },
        //         avatar: {
        //             required: true,
        //             extension: "png|jpg|jpeg|gif"
        //         }
        //     },
        //     messages: {
        //         name: {
        //             required: "Hãy nhập tên người dùng",
        //             maxlength: "Số lượng ký tự tối đa bằng 191 ký tự"
        //         },
        //         email: {
        //             required: "Hãy nhập email",
        //             maxlength: "Số lượng ký tự tối đa bằng 191 ký tự",
        //             email: "Không đúng định dạng email",
        //             remote: "Email đã tồn tại, vui lòng sử dụng email khác"
        //         },
        //         password: {
        //             required: "Hãy nhập mật khẩu",
        //             maxlength: "Số lượng ký tự tối đa bằng 191 ký tự"
        //         },
        //         cfpassword: {
        //             required: "Nhập lại mật khẩu",
        //             equalTo: "Cần khớp với mật khẩu"
        //         },
        //         phone_number: {
        //             min: "Bắt buộc là số có 10 chữ số",
        //             max: "Bắt buộc là số có 10 chữ số",
        //             number: "Nhập định dạng số"
        //         },
        //         house_no: {
        //             maxlength: "Số lượng ký tự tối đa bằng 191 ký tự"
        //         },
        //         avatar: {
        //             required: "Hãy nhập ảnh đại diện",
        //             extension: "Hãy nhập đúng định dạng ảnh (jpg | jpeg | png | gif)"
        //         }
        //     }
        // });
    </script>
</body>

</html>