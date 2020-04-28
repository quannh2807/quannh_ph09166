<?php
session_start();
define('TITLE', 'Booking');
require_once './config/utils.php';
$loggedInUser = isset($_SESSION[AUTH]) ? $_SESSION[AUTH] : null;

// get data from web_settings
$getWebSettingQuery = "select * from web_settings where id = 1";
$webSetting = queryExecute($getWebSettingQuery, false);

// get data from room detail
$room = trim($_POST['room']);
$bed = trim($_POST['bed']);

$_SESSION[BOOK]['room'] = $room;
$_SESSION[BOOK]['bed'] = $bed;
$roomId = isset($_SESSION[BOOK]['id']) ? $_SESSION[BOOK]['id'] : "";
$adult = isset($_SESSION[BOOK]['adult']) ? $_SESSION[BOOK]['adult'] : "";
$children = isset($_SESSION[BOOK]['children']) ? $_SESSION[BOOK]['children'] : "";
$arrival = isset($_SESSION[BOOK]['arrival']) ? $_SESSION[BOOK]['arrival'] : "";
$departure = isset($_SESSION[BOOK]['departure']) ? $_SESSION[BOOK]['departure'] : "";

// get data from room types
$getRoomTypesQuery = "select *from room_types where id ='$roomId' and status = 1";
$roomTypes = queryExecute($getRoomTypesQuery, false);

if ($roomTypes == "") {
    header('location: ' . BASE_URL . 'rooms.php?msg=Bạn cần chọn phòng trước khi đặt, HÃY CHỌN PHÒNG!');
    die;
}

$getServiceQuery = "select s.id, s.name, s.icon
                        from room_service_xref sxr
                        join room_services s
                        on sxr.services_id = s.id
                    where sxr.room_id = " . $roomTypes['id'];
$services = queryExecute($getServiceQuery, true);
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <?php include_once './public/_share/link.php'; ?>
</head>

<body id="booking_page">
    <!-- start header -->
    <?php include_once './public/_share/header.php'; ?>
    <!-- end header -->

    <!-- start breadcrumb -->
    <section class="breadcrumb_main_area margin-bottom-80">
        <div class="container-fluid">
            <div class="row">
                <div class="breadcrumb_main nice_title">
                    <h2>Đặt phòng</h2>
                    <!-- special offer start -->
                    <div class="special_offer_main">
                        <div class="container">
                            <div class="special_offer_sub">
                                <img src="<?= $webSetting['offer'] ?>" alt="imf">
                            </div>
                        </div>
                    </div>
                    <!-- end offer start -->
                </div>
            </div>
        </div>
    </section>
    <!-- end breadcrunb -->

    <!-- start other detect room section -->
    <section class="booking_area">
        <div class="container">
            <div class="booking">
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#booking_info" aria-controls="booking_info" role="tab" data-toggle="tab"><i>1</i><span>booking info</span></a>
                        </li>
                        <li role="presentation">
                            <a href="#personal_info" aria-controls="personal_info" role="tab" data-toggle="tab"><i>2</i><span>personal info</span></a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="booking_info">
                            <div class="booking_info_area">
                                <div class="facilities_name clearfix margin-bottom-150 margin-top-70">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-5">
                                            <img src="<?= PUBLIC_URL ?>img/booking-step-one.jpg" alt="">
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-7">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="section_title clearfix margin-bottom-5">
                                                        <h5 class="floatleft"><?= $roomTypes['name'] ?><span class="price floatright margin-left-15">($180 <sup class="day">/night</sup>)</span></h5>
                                                    </div>
                                                </div>
                                                <div class="list-services col-lg-12 col-md-12">
                                                    <?php foreach ($services as $rSer) : ?>
                                                        <div class="row">
                                                            <img src="<?= BASE_URL . $rSer['icon'] ?>" class="col-3" alt="">
                                                            <span class="col-6 font-weight-bold"><?= $rSer['name'] ?></span>
                                                        </div>
                                                    <?php endforeach ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- start hotel booking -->
                                        <div class="hotel_booking_area">
                                            <div class="container">
                                                <div class="hotel_booking margin-top-45">
                                                    <form role="form" action="#" class="">
                                                        <div class="col-lg-2 col-md-2 col-sm-2">
                                                            <div class="room_book border-right-dark-1">
                                                                <p>Đặt phòng</p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                                            <div class="input-group border-bottom-dark-2">
                                                                <input class="date-picker" id="datepicker" placeholder="Arrival" type="text" value="<?= $arrival ?>" />
                                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                                            <div class="input-group border-bottom-dark-2">
                                                                <input class="date-picker" id="datepicker1" placeholder="Departure" type="text" value="<?= $departure ?>" />
                                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                                            <div class="row">
                                                                <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                                                    <div class="input-group border-bottom-dark-2">
                                                                        <select class="form-control" name="room" id="room">
                                                                            <option selected="selected" disabled="disabled">Số phòng</option>
                                                                            <option value="1">1 phòng</option>
                                                                            <option value="2">2 phòng</option>
                                                                            <option value="3">3 phòng</option>
                                                                            <option value="4">4 phòng</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                                                    <div class="input-group border-bottom-dark-2">
                                                                        <select class="form-control" name="bed" id="bed">
                                                                            <option selected="selected" disabled="disabled">Số giường</option>
                                                                            <option value="1">1 giường</option>
                                                                            <option value="2">2 giường</option>
                                                                            <option value="3">3 giường</option>
                                                                            <option value="4">4 giường</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                                                    <div class="input-group border-bottom-dark-2">
                                                                        <select class="form-control" name="adult" id="adult">
                                                                            <option value="" selected>Người lớn</option>
                                                                            <option value="1">1 Người</option>
                                                                            <option value="2">2 Người</option>
                                                                            <option value="3">3 Người</option>
                                                                            <option value="4">4 Người</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                                                    <div class="input-group border-bottom-dark-2">
                                                                        <select class="form-control" name="children" id="children">
                                                                            <option value="" selected>Trẻ nhỏ</option>
                                                                            <option value="1">1 Trẻ</option>
                                                                            <option value="2">2 Trẻ</option>
                                                                            <option value="3">3 Trẻ</option>
                                                                            <option value="4">4 Trẻ</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end hotel booking -->
                                    </div>
                                    <div class="row">
                                        <div class="about_booking_room clearfix margin-top-30">
                                            <div class="col-lg-7 col-md-7 col-sm-6">
                                                <div class="booking_room_details">
                                                    <h5>Booking room detail</h5>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil atque modi velit molestiae, repellendus iure sint possimus cumque, provident, dolorum unde laboriosam ut eius ex maiores quod repudiandae aut asperiores?
                                                    </p>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil atque modi velit molestiae, repellendus iure sint possimus cumque, provident, dolorum unde laboriosam ut eius ex maiores quod repudiandae aut asperiores?
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-5 col-sm-6">
                                                <div class="room_cost">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered">
                                                                    <tr class="room_table">
                                                                        <td class=""><span class="imp_table_text"><?=$room?> phòng</span> <br><?=$adult?> người lớn & <?=$children?> trẻ em</td>
                                                                        <td class=""><span class="imp_table_text"><?=$roomTypes['price']?>$</span> <br> rate</td>
                                                                        <td class=""><?php echo $night = (strtotime($departure) - strtotime($arrival)) / 86400;?><br>night</td>
                                                                        <td class=""><span class="imp_table_text"><?php echo $firstBill = $night * $roomTypes['price'] ?>$</span></td>
                                                                    </tr>
                                                                    <tr class="tax_table">
                                                                        <td class=""><span class="imp_table_text">Thuế</span> <br> 10% trên giá trị hóa đơn</td>
                                                                        <!-- <td class=""></td>
                                                                        <td class=""></td> -->
                                                                        <td class="" colspan="3"><span class="imp_table_text"><?php echo $tax = $firstBill * 10 / 100?>$</span></td>
                                                                    </tr>
                                                                    <tr class="total_table">
                                                                        <td class=""><span class="imp_table_text">Tổng giá trị</span></td>
                                                                        <!-- <td class=""></td>
                                                                        <td class=""></td> -->
                                                                        <td class="" colspan="3"><span class="imp_table_text"><?php echo $totalBill = $firstBill + $tax?>$</span></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="booking_next_btn padding-top-30 margin-top-20 clearfix border-top-whitesmoke">
                                                <a href="#booking_done" aria-controls="booking_done" role="tab" data-toggle="tab" class="btn btn-warning btn-sm floatright">Next</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="personal_info">
                            <div class="personal_info_area">
                                <div class="hotel_booking_area">
                                    <div class="hotel_booking margin-top-70 margin-bottom-125">
                                        <form role="form" action="<?=BASE_URL . 'save-booking.php'?>" method="POST">
                                            <div class="row">
                                                <input type="hidden" name="arrival" value="<?=$arrival?>">
                                                <input type="hidden" name="departure" value="<?=$departure?>">
                                                <input type="hidden" name="children" value="<?=$children?>">
                                                <input type="hidden" name="adult" value="<?=$adult?>">
                                                <input type="hidden" name="beds" value="<?=$bed?>">
                                                <input type="hidden" name="rooms" value="<?=$room?>">
                                                <input type="hidden" name="room_types" value="<?=$roomTypes['id']?>">
                                                <input type="hidden" name="price" value="<?=$totalBill?>">
                                                <div class="form-group col-lg-4 col-md-4 col-sm-4 icon_arrow">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="customer_name" placeholder="Họ và tên">
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-4 col-sm-4 icon_arrow">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-4 col-sm-4 icon_arrow">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="phone_number" placeholder="Số điện thoại">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="container">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="5" name="messages" id="comment" placeholder="Lời nhắn"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="booking_next_btn padding-top-30 margin-top-50 clearfix border-top-whitesmoke">
                                                        <a href="#" class="btn btn-warning btn-sm btn-info">back</a>
                                                        <button type="submit" class="btn btn-warning floatright">Xác Nhận Đặt Phòng</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- end other detect room section -->

    <!-- start footer -->
    <?php include_once './public/_share/footer.php'; ?>
    <!-- end footer -->
    <!-- start script link -->
    <?php include_once './public/_share/script.php'; ?>
    <!-- end script link -->
    <script>
        var adult = document.getElementById('adult');
        adult.value = <?= $adult ?>;
        var children = document.getElementById('children');
        children.value = <?= $children ?>;
        var bed = document.getElementById('bed');
        bed.value = <?=$bed?>;
        var room = document.getElementById('room');
        room.value = <?=$room?>;

        setTimeout(() => {
            sessionStorage.clear();
        }, 2500);
    </script>
</body>

<!-- Mirrored from premiumlayers.net/demo/html/hotelbooking/booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Mar 2020 11:52:09 GMT -->

</html>
