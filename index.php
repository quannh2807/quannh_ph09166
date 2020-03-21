<?php
require_once('./config/utils.php');
session_start();

?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hotel Booking Home</title>

    <link rel="icon" href="img/favicon.ico" sizes="16x16">
    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:700,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>

    <!-- fontawesome -->
    <link rel="stylesheet" href="./public/css/font-awesome.css" />

    <!-- bootstrap -->
    <link rel="stylesheet" href="./public/css/bootstrap.min.css" />

    <!-- uikit -->
    <link rel="stylesheet" href="./public/css/uikit.min.css" />

    <!-- animate -->
    <link rel="stylesheet" href="./public/css/animate.css" />
    <link rel="stylesheet" href="./public/css/datepicker.css" />
    <!-- Owl carousel 2 css -->
    <link rel="stylesheet" href="./public/css/owl.carousel.css">
    <!-- rev slider -->
    <link rel="stylesheet" href="./public/css/rev-slider/settings.css" />
    <!-- lightslider -->
    <link rel="stylesheet" href="./public/css/lightslider.css">
    <!-- Theme -->
    <link rel="stylesheet" href="./public/css/reset.css">

    <!-- custom css -->
    <link rel="stylesheet" href="./public/css/main.css" />
    <!-- responsive -->
    <link rel="stylesheet" href="./public/css/responsive.css" />

</head>

<body id="home_one">
    <!-- start header -->
    <header class="header_area">

        <!-- start main header -->
        <div class="main_header_area">
            <div class="container">
                <!-- start mainmenu & logo -->
                <div class="mainmenu">
                    <div id="nav">
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="site_logo fix">
                                    <a id="brand" class="clearfix navbar-brand border-right-whitesmoke" href="index-2.html"><img src="./public/img/site-logo.png" alt="Trips"></a>
                                    <div class="header_login floatleft">
                                        <ul>
                                            <li><a href="#">Login</a></li>
                                            <li><a href="booking.html">Register</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li role="presentation" class="dropdown">
                                        <a href="./index.html">Home</a>
                                    </li>
                                    <li><a href="accomodation.html">Accomodation</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li role="presentation" class="dropdown">
                                        <a id="drop2" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                            Features
                                        </a>
                                        <ul id="menu2" class="dropdown-menu" role="menu">
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="about-us.html">About US</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="booking.html">Booking</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="room-details.html">Room Details</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="staff.html">Our Staff</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="404.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">News</a></li>
                                    <li><a href="contact-us.html">Contacts</a></li>
                                </ul>
                                <div class="emergency_number">
                                    <a href="tel:1234567890"><img src="./public/img/call-icon.png" alt="">123 456 7890</a>
                                </div>
                            </div><!-- /.navbar-collapse -->
                        </nav>
                    </div>
                </div>
                <!-- end mainmenu and logo -->
            </div>
        </div>
        <!-- end main header -->

    </header>
    <!-- end header -->

    <!-- start main slider -->
    <div class="main_slider_area">
        <div class="main_slider" id="slider_rev">
            <!-- start hotel booking -->
            <div class="hotel_booking_area">
                <div class="container">
                    <div class="hotel_booking">
                        <form id="form1" role="form" action="#" class="">
                            <div class="col-lg-2 col-md-2 col-sm-2">
                                <div class="room_book border-right-dark-1">
                                    <h6>Book Your</h6>
                                    <p>Rooms</p>
                                </div>
                            </div>
                            <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                <div class="input-group border-bottom-dark-2">
                                    <input class="date-picker" id="datepicker" placeholder="Arrival" type="text" />
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                            <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                <div class="input-group border-bottom-dark-2">
                                    <input class="date-picker" id="datepicker1" placeholder="Departure" type="text" />
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="row">
                                    <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                        <div class="input-group border-bottom-dark-2">
                                            <select class="form-control" name="room" id="room">
                                                <option selected="selected" disabled="disabled">1 Room</option>
                                                <option value="Single">1 Room</option>
                                                <option value="Double">2 Room</option>
                                                <option value="Deluxe">3 Room</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                        <div class="input-group border-bottom-dark-2">
                                            <select class="form-control" name="room" id="adult">
                                                <option selected="selected" disabled="disabled">1 Adult</option>
                                                <option value="Single">1 Adult</option>
                                                <option value="Double">2 Adult</option>
                                                <option value="Deluxe">3 Adult</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                        <div class="input-group border-bottom-dark-2">
                                            <select class="form-control" name="room" id="child">
                                                <option selected="selected" disabled="disabled">0 Child</option>
                                                <option value="Single">0 Child</option>
                                                <option value="Double">1 Child</option>
                                                <option value="Deluxe">2 Child</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <a class="btn btn-primary floatright">Book</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- special offer start -->
                        <div class="special_offer_main">
                            <img src="./public/img/special-offer-main.png" alt="">
                        </div>
                        <!-- end offer start -->
                    </div>
                </div>
            </div>
            <!-- end hotel booking -->
            <div class="fullwidthbanner-container">
                <div class="fullwidth_home_banner">
                    <ul>

                        <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                            <img src="./public/img/rev-slider/slider-one.jpg" alt="slide">
                            <div class="tp-caption large_black sfr" data-x="105" data-y="197" data-speed="1200" data-start="1100" data-easing="easeInOutBack" style="font-family: 'Playfair Display', serif; font-size: 48px;color: #131e2a; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                                A brand New Hotel
                            </div>
                            <div class="tp-caption large_black sfr" data-x="105" data-y="255" data-speed="1500" data-start="1400" data-easing="easeInOutBack" style="font-family: 'Playfair Display', serif; font-size: 48px;color: #131e2a; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                                Beyond Ordinary
                            </div>
                            <div class="tp-caption lfb carousel-caption-inner" data-x="105" data-y="313" data-speed="1300" data-start="1700" data-easing="easeInOutBack" style="background: #f7c411; padding: 10px; cursor: pointer;">
                                <a href="#" class="" style="background: #f7c411; border-radius: 0; color: #313a45; display: inline-block;  font-size: 18px; padding: 8px 34px; text-transform: uppercase; border: 1px solid #9e811a;">Explore IT</a>
                            </div>
                        </li>

                        <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                            <img src="./public/img/rev-slider/slider-one.jpg" alt="slide">
                            <div class="tp-caption large_black sfr" data-x="105" data-y="197" data-speed="1200" data-start="1100" data-easing="easeInOutBack" style="font-family: 'Playfair Display', serif; font-size: 48px;color: #131e2a; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                                Book Your Summer Holidays
                            </div>
                            <div class="tp-caption large_black sfr" data-x="105" data-y="255" data-speed="1500" data-start="1400" data-easing="easeInOutBack" style="font-family: 'Playfair Display', serif; font-size: 48px;color: #131e2a; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                                With HOTEL BOOKING Template
                            </div>
                            <div class="tp-caption lfb carousel-caption-inner" data-x="105" data-y="313" data-speed="1300" data-start="1700" data-easing="easeInOutBack" style="background: #f7c411; padding: 10px; cursor: pointer;">
                                <a href="#" class="" style="background: #f7c411; border-radius: 0; color: #313a45; display: inline-block;  font-size: 18px; padding: 8px 34px; text-transform: uppercase; border: 1px solid #9e811a;">Explore IT</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end main slider -->

    <!-- start welcome section -->
    <section class="welcome_area">
        <div class="container">
            <div class="welcome">
                <div class="section_title nice_title content-center">
                    <h3>Welcome To Hotel</h3>
                </div>
                <div class="section_description">
                    <p> Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor. </p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single_room_wrapper clearfix">
                            <figure class="uk-overlay uk-overlay-hover">
                                <div class="room_media">
                                    <a href="#"><img src="./public/img/room-image-five.png" alt=""></a>
                                </div>
                                <div class="room_title border-bottom-whitesmoke clearfix">
                                    <div class="left_room_title floatleft">
                                        <h6>Deluxe Room</h6>
                                        <p>$200/ <span>night</span></p>
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
                        <div class="single_room_wrapper clearfix">
                            <figure class="uk-overlay uk-overlay-hover">
                                <div class="room_media">
                                    <a href="#"><img src="./public/img/room-image-nine.png" alt=""></a>
                                </div>
                                <div class="room_title border-bottom-whitesmoke clearfix">
                                    <div class="left_room_title floatleft">
                                        <h6>Double Room</h6>
                                        <p>$150/ <span>night</span></p>
                                    </div>
                                    <div class="left_room_title floatright">
                                        <a href="#" class="btn">Book</a>
                                    </div>
                                </div>
                                <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInUp">
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
                                                <p>$150/ <span>night</span></p>
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
                        <div class="single_room_wrapper clearfix">
                            <figure class="uk-overlay uk-overlay-hover">
                                <div class="room_media">
                                    <a href="#"><img src="./public/img/room-image-thirteen.jpg" alt=""></a>
                                </div>
                                <div class="room_title border-bottom-whitesmoke clearfix">
                                    <div class="left_room_title floatleft">
                                        <h6>Single Room</h6>
                                        <p>$180/ <span>night</span></p>
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
                                                <p>$180/ <span>night</span></p>
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
                        <div class="single_room_wrapper clearfix">
                            <figure class="uk-overlay uk-overlay-hover">
                                <div class="room_media">
                                    <a href="#"><img src="./public/img/room-image-eight.png" alt=""></a>
                                </div>
                                <div class="room_title border-bottom-whitesmoke clearfix">
                                    <div class="left_room_title floatleft">
                                        <h6>Kids Room</h6>
                                        <p>$140/ <span>night</span></p>
                                    </div>
                                    <div class="left_room_title floatright">
                                        <a href="#" class="btn">Book</a>
                                    </div>
                                </div>
                                <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInUp">
                                    <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                        <h5>Kids Room</h5>
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
                </div>
            </div>
        </div>
    </section>
    <!-- end welcome section -->

    <!-- start Hotel Facilities section -->
    <section class="hotel_facilities_area margin-top-115 margin-bottom-100">
        <div class="container">
            <div class="hotel_facilities">
                <div class="section_title nice_title content-center">
                    <h3>Hotel facilties</h3>
                </div>
                <div class="hotel_facilities_content">
                    <div role="tabpanel">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#restaurant" aria-controls="restaurant" role="tab" data-toggle="tab"><img src="./public/img/home-facilities-icon-eleven.png" alt="restaurant"><span>restaurant</span></a>
                            </li>
                            <li role="presentation">
                                <a href="#sports-club" aria-controls="sports-club" role="tab" data-toggle="tab"><img src="./public/img/home-facilities-icon-seven.png" alt="sports-club"><span>sports-club</span></a>
                            </li>
                            <li role="presentation">
                                <a href="#pick-up" aria-controls="pick-up" role="tab" data-toggle="tab"><img src="./public/img/home-facilities-icon-eight.png" alt="pick-up"><span>pick-up</span></a>
                            </li>
                            <li role="presentation">
                                <a href="#bar" aria-controls="bar" role="tab" data-toggle="tab"><img src="./public/img/home-facilities-icon-nine.png" alt="bar"><span>bar</span></a>
                            </li>
                            <li role="presentation">
                                <a href="#gym" aria-controls="gym" role="tab" data-toggle="tab"><img src="./public/img/home-facilities-icon-ten.png" alt="gym"><span>gym</span></a>
                            </li>
                        </ul>


                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="restaurant">
                                <div class="single-tab-content">
                                    <div class="row">
                                        <div class="co-lg-5 col-md-5 col-sm-6">
                                            <div class="single-tab-image">
                                                <a href="#"><img src="./public/img/hotel-facility-one.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="co-lg-7 col-md-7 col-sm-6">
                                            <div class="single-tab-details">
                                                <h6>The world class</h6>
                                                <h3>Restaurant & Banquets</h3>
                                                <p>
                                                    Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.
                                                </p>
                                                <p>
                                                    Cras ac justo et augue suscipit euismod vel eget lectus. Proin vehicula nunc arcu, pulvinar accumsan nulla porta vel. Vivamus malesuada vitae sem ac pellentesque.
                                                </p>
                                                <div class="our_services">
                                                    <a href="#" class="margin-right-33">Service Hours; 19.00-22:00 </a>
                                                    <a href="#">service charge : $15</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="sports-club">
                                <div class="single-tab-content">
                                    <div class="row">
                                        <div class="co-lg-5 col-md-5">
                                            <div class="single-tab-image">
                                                <a href="#"><img src="./public/img/hotel-facility-three.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="co-lg-7 col-md-7">
                                            <div class="single-tab-details">
                                                <h6>The world class</h6>
                                                <h3>Sports Club</h3>
                                                <p>
                                                    Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.
                                                </p>
                                                <p>
                                                    Cras ac justo et augue suscipit euismod vel eget lectus. Proin vehicula nunc arcu, pulvinar accumsan nulla porta vel. Vivamus malesuada vitae sem ac pellentesque.
                                                </p>
                                                <div class="our_services">
                                                    <a href="#" class="margin-right-33">Service Hours; 19.00-22:00 </a>
                                                    <a href="#">service charge : $15</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="pick-up">
                                <div class="single-tab-content">
                                    <div class="row">
                                        <div class="co-lg-5 col-md-5">
                                            <div class="single-tab-image">
                                                <a href="#"><img src="./public/img/hotel-facility-one.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="co-lg-7 col-md-7">
                                            <div class="single-tab-details">
                                                <h6>The world class</h6>
                                                <h3>Pick Up</h3>
                                                <p>
                                                    Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.
                                                </p>
                                                <p>
                                                    Cras ac justo et augue suscipit euismod vel eget lectus. Proin vehicula nunc arcu, pulvinar accumsan nulla porta vel. Vivamus malesuada vitae sem ac pellentesque.
                                                </p>
                                                <div class="our_services">
                                                    <a href="#" class="margin-right-33">Service Hours; 19.00-22:00 </a>
                                                    <a href="#">service charge : $15</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="bar">
                                <div class="single-tab-content">
                                    <div class="row">
                                        <div class="co-lg-5 col-md-5">
                                            <div class="single-tab-image">
                                                <a href="#"><img src="./public/img/hotel-facility-three.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="co-lg-7 col-md-7">
                                            <div class="single-tab-details">
                                                <h6>The world class</h6>
                                                <h3>Bar</h3>
                                                <p>
                                                    Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.
                                                </p>
                                                <p>
                                                    Cras ac justo et augue suscipit euismod vel eget lectus. Proin vehicula nunc arcu, pulvinar accumsan nulla porta vel. Vivamus malesuada vitae sem ac pellentesque.
                                                </p>
                                                <div class="our_services">
                                                    <a href="#" class="margin-right-33">Service Hours; 19.00-22:00 </a>
                                                    <a href="#">service charge : $15</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="gym">
                                <div class="single-tab-content">
                                    <div class="row">
                                        <div class="co-lg-5 col-md-5">
                                            <div class="single-tab-image">
                                                <a href="#"><img src="./public/img/hotel-facility-one.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="co-lg-7 col-md-7">
                                            <div class="single-tab-details">
                                                <h6>The world class</h6>
                                                <h3>Gym</h3>
                                                <p>
                                                    Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.
                                                </p>
                                                <p>
                                                    Cras ac justo et augue suscipit euismod vel eget lectus. Proin vehicula nunc arcu, pulvinar accumsan nulla porta vel. Vivamus malesuada vitae sem ac pellentesque.
                                                </p>
                                                <div class="our_services">
                                                    <a href="#" class="margin-right-33">Service Hours; 19.00-22:00 </a>
                                                    <a href="#">service charge : $15</a>
                                                </div>
                                            </div>
                                        </div>
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

    <!-- start About Us section -->
    <section class="about_us_area margin-bottom-128">
        <div class="container">
            <div class="about_us clearfix">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-left-0">
                    <div class="news">
                        <div class="section_title margin-bottom-50">
                            <h5>News</h5>
                        </div>
                        <div class="section_description">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="single_content clearfix border-bottom-whitesmoke">
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-4 padding-left-0">
                                            <div class="post_media">
                                                <a href="#"><img src="./public/img/news-one.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-8 padding-left-0">
                                            <div class="post_title clearfix">
                                                <h6>Quisque at felis port titordga</h6>
                                            </div>
                                            <div class="post_content  margin-bottom-35">
                                                <p>14 May 2014</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_content clearfix margin-top-35 border-bottom-whitesmoke">
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-4 padding-left-0">
                                            <div class="post_media">
                                                <a href="#"><img src="./public/img/news-two.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-8 padding-left-0">
                                            <div class="post_title clearfix">
                                                <h6>Donec scelerisque vulputate</h6>
                                            </div>
                                            <div class="post_content margin-bottom-35">
                                                <p>15 May 2014</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_content clearfix margin-bottom-35 margin-top-35">
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-4 padding-left-0">
                                            <div class="post_media">
                                                <a href="#"><img src="./public/img/news-three.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-8 padding-left-0">
                                            <div class="post_title clearfix">
                                                <h6>Curabitur varius quam lorem</h6>
                                            </div>
                                            <div class="post_content">
                                                <p>17 May 2014</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="showcase">
                        <div class="section_title margin-bottom-50">
                            <h5>Hotel Showcase</h5>
                        </div>
                        <div class="section_description">
                            <div class="clearfix demo" style="">
                                <ul id="vertical" class="gallery list-unstyled">
                                    <li data-thumb="./public/img/lightslider-img/cS-18.jpg">
                                        <img alt="slider" src="./public/img/lightslider-img/cS-18.jpg" />
                                    </li>
                                    <li data-thumb="./public/img/lightslider-img/cS-21.jpg">
                                        <img alt="slider" src="./public/img/lightslider-img/cS-21.jpg" />
                                    </li>
                                    <li data-thumb="./public/img/lightslider-img/cS-22.jpg">
                                        <img alt="slider" src="./public/img/lightslider-img/cS-22.jpg" />
                                    </li>
                                    <li data-thumb="./public/img/lightslider-img/cS-23.jpg">
                                        <img alt="slider" src="./public/img/lightslider-img/cS-23.jpg" />
                                    </li>
                                    <li data-thumb="./public/img/lightslider-img/cS-24.jpg">
                                        <img alt="slider" src="./public/img/lightslider-img/cS-24.jpg" />
                                    </li>
                                    <li data-thumb="./public/img/lightslider-img/cS-25.jpg">
                                        <img alt="slider" src="./public/img/lightslider-img/cS-25.jpg" />
                                    </li>
                                    <li data-thumb="./public/img/lightslider-img/cS-26.jpg">
                                        <img alt="slider" src="./public/img/lightslider-img/cS-26.jpg" />
                                    </li>
                                    <li data-thumb="./public/img/lightslider-img/cS-27.jpg">
                                        <img alt="slider" src="./public/img/lightslider-img/cS-27.jpg" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="customer_says">
                        <div class="section_title margin-bottom-50">
                            <h5>Customer Says</h5>
                        </div>
                        <div class="section_description">
                            <div id="customer_says_slider" class="carousel slide" data-ride="carousel" data-pause="none">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <div class="single_says">
                                            <div class="customer_comment">
                                                <p>
                                                    Semper ac dolor vitae msan. Cras interdum hendreritnia Phasellus accumsan urna vitae molestie interdum.
                                                </p>
                                                <p>
                                                    Nam sed placerat libero, non eleifend dolor.
                                                </p>
                                            </div>
                                            <div class="customer_detail clearfix">
                                                <div class="customer_pic alignleft-20">
                                                    <a href="#"><img src="./public/img/customer-says-one.png" alt=""></a>
                                                </div>
                                                <div class="customer_identity floatleft">
                                                    <h6>John Doe</h6>
                                                    <p>www.john.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="single_says">
                                            <div class="customer_comment">
                                                <p>
                                                    Semper ac dolor vitae msan. Cras interdum hendreritnia Phasellus accumsan urna vitae molestie interdum.
                                                </p>
                                                <p>
                                                    Nam sed placerat libero, non eleifend dolor.
                                                </p>
                                            </div>
                                            <div class="customer_detail clearfix">
                                                <div class="customer_pic alignleft-20">
                                                    <a href="#"><img src="./public/img/customer-says-one.png" alt=""></a>
                                                </div>
                                                <div class="customer_identity floatleft">
                                                    <h6>John Doe</h6>
                                                    <p>www.john.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Controls -->
                                <a class="slider_says left" href="#customer_says_slider" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="slider_says right" href="#customer_says_slider" role="button" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end About Us section -->

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
    <footer class="footer_area">
        <div class="container">
            <div class="footer">
                <div class="footer_top padding-top-80 clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#"><img src="./public/img/footer-logo-one.png" alt=""></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, conser adipiscing elit. In consectetur tincidunt dolor.</p>
                            <ul>
                                <li>
                                    <P><i class="fa fa-map-marker"></i>St Amsterdam finland, <br> United Stats of AKY16 8PN</P>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="row">
                            <div class="footer_widget clearfix">
                                <h5 class="padding-left-15">Quick Links</h5>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <ul>
                                        <li><a href="#">Rooms</a></li>
                                        <li><a href="#">Food & Drinks</a></li>
                                        <li><a href="#">Beach Venues</a></li>
                                        <li><a href="#">Amenities</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 sol-sm-6">
                                    <ul>
                                        <li><a href="#">Noordwijk</a></li>
                                        <li><a href="#">Wellness</a></li>
                                        <li><a href="#">Manifesto</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="footer_widget">
                            <h5>We Are Global</h5>
                            <div class="footer_map">
                                <a href="#"><img src="./public/img/footer-map-two.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                        <div class="footer_copyright margin-tb-50 content-center">
                            <p>© 2015 <a href="#">Hotelbooking</a>. All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- jquery library -->
    <script src="./public/js/vendor/jquery-1.11.2.min.js"></script>
    <!-- bootstrap -->
    <script src="./public/js/bootstrap.min.js"></script>
    <!-- rev slider -->
    <script src="./public/js/rev-slider/rs-plugin/jquery.themepunch.plugins.min.js"></script>
    <script src="./public/js/rev-slider/rs-plugin/jquery.themepunch.revolution.js"></script>
    <script src="./public/js/rev-slider/rs.home.js"></script>
    <!-- uikit -->
    <script src="./public/js/uikit.min.js"></script>
    <!-- easing -->
    <script src="./public/js/jquery.easing.1.3.min.js"></script>
    <script src="./public/js/datepicker.js"></script>
    <!-- scroll up -->
    <script src="./public/js/jquery.scrollUp.min.js"></script>
    <!-- owlcarousel -->
    <script src="./public/js/owl.carousel.min.js"></script>
    <!-- lightslider -->
    <script src="./public/js/lightslider.js"></script>

    <!-- wow Animation -->
    <script src="./public/js/wow.min.js"></script>
    <!--Activating WOW Animation only for modern browser-->
    <!--[if !IE]><!-->
    <script type="text/javascript">
        new WOW().init();
    </script>
    <!--<![endif]-->
    <!-- my js -->
    <script src="./public/js/main.js"></script>

</body>

<!-- Mirrored from premiumlayers.net/demo/html/hotelbooking/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Mar 2020 11:51:41 GMT -->

</html>