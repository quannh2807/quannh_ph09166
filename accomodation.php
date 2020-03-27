<?php
session_start();
require_once './config/utils.php';
$loggedInUser = isset($_SESSION[AUTH]) ? $_SESSION[AUTH] : null;
?>
<!DOCTYPE html>
<html lang="vi">
<!-- Mirrored from premiumlayers.net/demo/html/hotelbooking/accomodation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Mar 2020 11:52:12 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hotel Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./public/img/favicon.ico" type="image/x-icon">
    <?php include_once './public/_share/link.php'; ?>
</head>

<body id="accomodation_page">


    <!-- start header -->
    <?php include_once './public/_share/header.php'; ?>
    <!-- end header -->

    <!-- start breadcrumb -->
    <section class="breadcrumb_main_area margin-bottom-80">
        <div class="container-fluid">
            <div class="row">
                <div class="breadcrumb_main nice_title">
                    <h2>Accomodation</h2>
                    <!-- special offer start -->
                    <div class="special_offer_main">
                        <div class="container">
                            <div class="special_offer_sub">
                                <img src="<?php echo PUBLIC_URL . 'img/special-offer-yellow-main.png'?>" alt="imf">
                            </div>
                        </div>
                    </div>
                    <!-- end offer start -->
                </div>
            </div>
        </div>
    </section>
    <!-- end breadcrunb -->


    <!-- start Hotel Facilities section -->
    <section class="select_room_area padding-top-5 margin-bottom-90">
        <div class="container">
            <div class="row">
                <div class="select_room clearfix">
                    <div class="section_title nice_title text-center">
                        <h3>Special Rooms</h3>
                    </div>
                    <div class="select_room_content clearfix">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="room_thumb">
                                <a href="#"><img src="<?php echo PUBLIC_URL . 'img/room-thumb-one.jpg'?>" alt=""></a>
                                <div class="room_details">
                                    <div class="about_room floatleft">
                                        <div class="room_quality floatleft">
                                            <h5>Deluxe Room</h5>
                                        </div>
                                        <div class="room_rent floatleft">
                                            <p>$180<span> / night</span></p>
                                        </div>
                                    </div>
                                    <div class="room_block floatright">
                                        <a href="#" class="btn btn-black">Book</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-sx-12">
                            <div class="room_thumb small_room_thumb margin-bottom-35">
                                <a href="#"><img src="<?php echo PUBLIC_URL . 'img/room-thumb-two.jpg'?>" alt=""></a>
                                <div class="room_details">
                                    <div class="about_room floatleft">
                                        <div class="room_quality floatleft">
                                            <h5>Deluxe Room</h5>
                                        </div>
                                        <div class="room_rent floatleft">
                                            <p>$180<span> / night</span></p>
                                        </div>
                                    </div>
                                    <div class="room_block floatright">
                                        <a href="#" class="btn btn-black">Book</a>
                                    </div>
                                </div>
                            </div>
                            <div class="room_thumb small_room_thumb">
                                <a href="#"><img src="<?php echo PUBLIC_URL . 'img/room-thumb-three.jpg'?>" alt=""></a>
                                <div class="room_details">
                                    <div class="about_room floatleft">
                                        <div class="room_quality floatleft">
                                            <h5>Deluxe Room</h5>
                                        </div>
                                        <div class="room_rent floatleft">
                                            <p>$180<span> / night</span></p>
                                        </div>
                                    </div>
                                    <div class="room_block floatright">
                                        <a href="#" class="btn btn-black">Book</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Hotel Facilities section -->


    <!-- start other detect room section -->
    <section class="other_room_area">
        <div class="container">
            <div class="row">
                <div class="other_room">
                    <div class="section_title nice_title content-center">
                        <h3>Other Decent room</h3>
                    </div>
                    <div class="section_content">
                        <!-- start hotel booking -->
                        <div class="hotel_booking_area">
                            <div class="container">
                                <div class="hotel_booking margin-bottom-30">
                                    <form id="form1" role="form" action="#" class="">
                                        <div class="col-lg-2 col-md-2 col-sm-2">
                                            <div class="room_book border-right-dark-1">
                                                <h6>Book Your</h6>
                                                <p>Rooms</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="row">
                                                <div class="form-group col-lg-4 col-md-4 col-sm-4 icon_arrow">
                                                    <div class="input-group border-bottom-dark-2">
                                                        <select class="form-control" name="room" id="room">
                                                            <option selected="selected" disabled="disabled">Rooms</option>
                                                            <option value="Single">2 Room</option>
                                                            <option value="Double">3 Room</option>
                                                            <option value="Deluxe">4 Room</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-4 col-sm-4 icon_arrow">
                                                    <div class="input-group border-bottom-dark-2">
                                                        <select class="form-control" name="room" id="adult">
                                                            <option selected="selected" disabled="disabled">Rating</option>
                                                            <option value="Single">One Star</option>
                                                            <option value="Double">Two Star</option>
                                                            <option value="Deluxe">three Star</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-4 col-sm-4 icon_arrow">
                                                    <div class="input-group border-bottom-dark-2">
                                                        <select class="form-control" name="room" id="child">
                                                            <option selected="selected" disabled="disabled">Beds</option>
                                                            <option value="Single">Single Bed</option>
                                                            <option value="Double">3 Beds</option>
                                                            <option value="Deluxe">5 Beds</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                            <div class="input-group range_slider">
                                                <div data-role="rangeslider">
                                                    <span>Price:</span>
                                                    <label>range:</label>
                                                    <div class="range">
                                                        <span class="floatleft">50$</span><span class="floatright">5000$</span>
                                                        <input class="margin-rl-5" type="range" name="price-min" id="price-min" value="200" min="0" max="1000">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 clearfix">
                                            <a class="btn btn-warning btn-md floatright">Filter</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end hotel booking -->

                        <!-- start single room details -->
                        <div class="accomodation_single_room">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <div class="single_room_wrapper clearfix padding-bottom-30">
                                            <figure class="uk-overlay uk-overlay-hover">
                                                <div class="room_media">
                                                    <a href="#"><img src="<?php echo PUBLIC_URL . 'img/room-image-ten.jpg'?>" alt=""></a>
                                                </div>
                                                <div class="room_title border-bottom-whitesmoke clearfix">
                                                    <div class="left_room_title floatleft">
                                                        <h6>Deluxe Room</h6>
                                                        <p>$130/ <span>night</span></p>
                                                    </div>
                                                    <div class="left_room_title floatright">
                                                        <a href="#" class="btn">Book</a>
                                                    </div>
                                                </div>
                                                <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                                    <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                        <h5>Elegant Room</h5>
                                                        <p>
                                                            Semper ac dolor vitae accumsan. interdum hendrerit lacinia.
                                                        </p>
                                                        <p>
                                                            Phasellus accumsan urna vitae molestie interdum.
                                                        </p>
                                                        <div class="single_room_cost clearfix">
                                                            <div class="floatleft">
                                                                <p>$130/ <span>night</span></p>
                                                            </div>
                                                            <div class="floatright">
                                                                <a href="#" class="btn">Book</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <div class="single_room_wrapper clearfix padding-bottom-30">
                                            <figure class="uk-overlay uk-overlay-hover">
                                                <div class="room_media">
                                                    <a href="#"><img src="<?php echo PUBLIC_URL . 'img/room-image-nineteen.png'?>" alt=""></a>
                                                </div>
                                                <div class="room_title border-bottom-whitesmoke clearfix">
                                                    <div class="left_room_title floatleft">
                                                        <h6>Single Room</h6>
                                                        <p>$140/ <span>night</span></p>
                                                    </div>
                                                    <div class="left_room_title floatright">
                                                        <a href="#" class="btn">Book</a>
                                                    </div>
                                                </div>
                                                <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                                    <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                        <h5>Single Room</h5>
                                                        <p>
                                                            Semper ac dolor vitae accumsan. interdum hendrerit lacinia.
                                                        </p>
                                                        <p>
                                                            Phasellus accumsan urna vitae molestie interdum.
                                                        </p>
                                                        <div class="single_room_cost clearfix">
                                                            <div class="floatleft">
                                                                <p>$140/ <span>night</span></p>
                                                            </div>
                                                            <div class="floatright">
                                                                <a href="#" class="btn">Book</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <div class="single_room_wrapper clearfix padding-bottom-30">
                                            <figure class="uk-overlay uk-overlay-hover">
                                                <div class="room_media">
                                                    <a href="#"><img src="<?php echo PUBLIC_URL . 'img/room-image-thirteen.jpg'?>" alt=""></a>
                                                </div>
                                                <div class="room_title border-bottom-whitesmoke clearfix">
                                                    <div class="left_room_title floatleft">
                                                        <h6>DoubleRoom</h6>
                                                        <p>$200/ <span>night</span></p>
                                                    </div>
                                                    <div class="left_room_title floatright">
                                                        <a href="#" class="btn">Book</a>
                                                    </div>
                                                </div>
                                                <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                                    <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                        <h5>Double Room</h5>
                                                        <p>
                                                            Semper ac dolor vitae accumsan. interdum hendrerit lacinia.
                                                        </p>
                                                        <p>
                                                            Phasellus accumsan urna vitae molestie interdum.
                                                        </p>
                                                        <div class="single_room_cost clearfix">
                                                            <div class="floatleft">
                                                                <p>$200/ <span>night</span></p>
                                                            </div>
                                                            <div class="floatright">
                                                                <a href="#" class="btn">Book</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <div class="single_room_wrapper clearfix padding-bottom-30">
                                            <figure class="uk-overlay uk-overlay-hover">
                                                <div class="room_media">
                                                    <a href="#"><img src="<?php echo PUBLIC_URL.'img/room-image-fourteen.jpg'?>" alt=""></a>
                                                </div>
                                                <div class="room_title border-bottom-whitesmoke clearfix">
                                                    <div class="left_room_title floatleft">
                                                        <h6>ChildRoom</h6>
                                                        <p>$100/ <span>night</span></p>
                                                    </div>
                                                    <div class="left_room_title floatright">
                                                        <a href="#" class="btn">Book</a>
                                                    </div>
                                                </div>
                                                <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                                    <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                        <h5>Child Room</h5>
                                                        <p>
                                                            Semper ac dolor vitae accumsan. interdum hendrerit lacinia.
                                                        </p>
                                                        <p>
                                                            Phasellus accumsan urna vitae molestie interdum.
                                                        </p>
                                                        <div class="single_room_cost clearfix">
                                                            <div class="floatleft">
                                                                <p>$100/ <span>night</span></p>
                                                            </div>
                                                            <div class="floatright">
                                                                <a href="#" class="btn">Book</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <div class="single_room_wrapper clearfix padding-bottom-30">
                                            <figure class="uk-overlay uk-overlay-hover">
                                                <div class="room_media">
                                                    <a href="#"><img src="<?php echo PUBLIC_URL.'img/room-image-fifteen.png'?>" alt=""></a>
                                                </div>
                                                <div class="room_title border-bottom-whitesmoke clearfix">
                                                    <div class="left_room_title floatleft">
                                                        <h6>CoupleRoom</h6>
                                                        <p>$160/ <span>night</span></p>
                                                    </div>
                                                    <div class="left_room_title floatright">
                                                        <a href="#" class="btn">Book</a>
                                                    </div>
                                                </div>
                                                <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                                    <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                        <h5>Couple Room</h5>
                                                        <p>
                                                            Semper ac dolor vitae accumsan. interdum hendrerit lacinia.
                                                        </p>
                                                        <p>
                                                            Phasellus accumsan urna vitae molestie interdum.
                                                        </p>
                                                        <div class="single_room_cost clearfix">
                                                            <div class="floatleft">
                                                                <p>$160/ <span>night</span></p>
                                                            </div>
                                                            <div class="floatright">
                                                                <a href="#" class="btn">Book</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <div class="single_room_wrapper clearfix padding-bottom-30">
                                            <figure class="uk-overlay uk-overlay-hover">
                                                <div class="room_media">
                                                    <a href="#"><img src="<?php echo PUBLIC_URL.'img/room-image-twenty.png'?>" alt=""></a>
                                                </div>
                                                <div class="room_title border-bottom-whitesmoke clearfix">
                                                    <div class="left_room_title floatleft">
                                                        <h6>ElegantRoom</h6>
                                                        <p>$250/ <span>night</span></p>
                                                    </div>
                                                    <div class="left_room_title floatright">
                                                        <a href="#" class="btn">Book</a>
                                                    </div>
                                                </div>
                                                <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                                    <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                        <h5>Elegant Room</h5>
                                                        <p>
                                                            Semper ac dolor vitae accumsan. interdum hendrerit lacinia.
                                                        </p>
                                                        <p>
                                                            Phasellus accumsan urna vitae molestie interdum.
                                                        </p>
                                                        <div class="single_room_cost clearfix">
                                                            <div class="floatleft">
                                                                <p>$250/ <span>night</span></p>
                                                            </div>
                                                            <div class="floatright">
                                                                <a href="#" class="btn">Book</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <div class="single_room_wrapper clearfix padding-bottom-30">
                                            <figure class="uk-overlay uk-overlay-hover">
                                                <div class="room_media">
                                                    <a href="#"><img src="<?php echo PUBLIC_URL.'img/room-image-seventeen.png'?>" alt=""></a>
                                                </div>
                                                <div class="room_title border-bottom-whitesmoke clearfix">
                                                    <div class="left_room_title floatleft">
                                                        <h6>PersonalRoom</h6>
                                                        <p>$170/ <span>night</span></p>
                                                    </div>
                                                    <div class="left_room_title floatright">
                                                        <a href="#" class="btn">Book</a>
                                                    </div>
                                                </div>
                                                <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                                    <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                        <h5>Personal Room</h5>
                                                        <p>
                                                            Semper ac dolor vitae accumsan. interdum hendrerit lacinia.
                                                        </p>
                                                        <p>
                                                            Phasellus accumsan urna vitae molestie interdum.
                                                        </p>
                                                        <div class="single_room_cost clearfix">
                                                            <div class="floatleft">
                                                                <p>$170/ <span>night</span></p>
                                                            </div>
                                                            <div class="floatright">
                                                                <a href="#" class="btn">Book</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <div class="single_room_wrapper clearfix padding-bottom-30">
                                            <figure class="uk-overlay uk-overlay-hover">
                                                <div class="room_media">
                                                    <a href="#"><img src="<?php echo PUBLIC_URL.'img/room-image-eighteen.png'?>" alt=""></a>
                                                </div>
                                                <div class="room_title border-bottom-whitesmoke clearfix">
                                                    <div class="left_room_title floatleft">
                                                        <h6>Deluxe Room</h6>
                                                        <p>$190/ <span>night</span></p>
                                                    </div>
                                                    <div class="left_room_title floatright">
                                                        <a href="#" class="btn">Book</a>
                                                    </div>
                                                </div>
                                                <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                                    <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                        <h5>Deluxe Room</h5>
                                                        <p>
                                                            Semper ac dolor vitae accumsan. interdum hendrerit lacinia.
                                                        </p>
                                                        <p>
                                                            Phasellus accumsan urna vitae molestie interdum.
                                                        </p>
                                                        <div class="single_room_cost clearfix">
                                                            <div class="floatleft">
                                                                <p>$190/ <span>night</span></p>
                                                            </div>
                                                            <div class="floatright">
                                                                <a href="#" class="btn">Book</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <nav class="text-center margin-top-65 margin-bottom-75">
                                        <ul class="pagination">
                                            <li>
                                                <a href="#" aria-label="Previous">
                                                    <i class="fa fa-angle-left"></i>prev
                                                </a>
                                            </li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li>
                                                <a href="#" aria-label="Next">next
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- end single room details -->

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end other detect room section -->


    <!-- start contact us area -->
    <section class="contact_us_area content-left">
        <div class="container">
            <div class="contact_us clearfix">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="call clearfix">
                        <h6>Call Us</h6>
                        <p>123 456 7890</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="email_us clearfix">
                        <h6>Email us</h6>
                        <p>info@hotelbooking.com</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="news_letter clearfix">
                        <input type="text" placeholder="Enter ID  for News Letter">
                        <a href="#" class="btn btn-blue">go</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="social_icons clearfix">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact us area -->



    <!-- start footer -->
    <?php include_once './public/_share/footer.php'; ?>
    <!-- end footer -->
    <!-- start script link -->
    <?php include_once './public/_share/script.php'; ?>
    <!-- end script link -->
    <!-- my js -->
    <script src="js/main.js"></script>

</body>

<!-- Mirrored from premiumlayers.net/demo/html/hotelbooking/accomodation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Mar 2020 11:52:14 GMT -->

</html>