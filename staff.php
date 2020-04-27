<?php
session_start();
define('TITLE', 'Our staff');
require_once './config/utils.php';
$loggedInUser = isset($_SESSION[AUTH]) ? $_SESSION[AUTH] : null;

// get data from web_settings
$getWebSettingQuery = "select * from web_settings where id = 1";
$webSetting = queryExecute($getWebSettingQuery, false);
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <?php include_once './public/_share/link.php'; ?>
</head>

<body id="staff_page">
    <!-- start header -->
    <?php include_once './public/_share/header.php'; ?>
    <!-- end header -->

    <!-- start breadcrumb -->
    <section class="breadcrumb_main_area margin-bottom-80">
        <div class="container-fluid">
            <div class="row">
                <div class="breadcrumb_main nice_title">
                    <h2>our Staff</h2>
                    <!-- special offer start -->
                    <div class="special_offer_main">
                        <div class="container">
                            <div class="special_offer_sub">
                                <img src="<?= BASE_URL . $webSetting['offer'] ?>" alt="imf">
                            </div>
                        </div>
                    </div>
                    <!-- end offer start -->
                </div>
            </div>
        </div>
    </section>
    <!-- end breadcrunb -->

    <!-- start our room facilities -->
    <section class="our_room_facilities_area">
        <div class="container">
            <div class="our_room_facilities margin-bottom-150">
                <div class="facilities_main_part">
                    <div class="row">
                        <div class="hotel_stuff">
                            <div class="col-lg-12 col-md-12">
                                <div class="section_title margin-bottom-40">
                                    <h5>Our Hotel Staff</h5>
                                </div>
                            </div>
                            <div class="section_content">
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="single_staff margin-bottom-30">
                                        <figure class="uk-overlay uk-overlay-hover">
                                            <img src="<?= PUBLIC_URL ?>img/about-us-staff-one.jpg" alt="img">
                                            <div class="uk-overlay-panel uk-overlay-background single_staff_details">
                                                <h6>Dohn Doe</h6>
                                                <span>Hotel Manager</span>
                                                <p>
                                                    Semper ac dolor vitae msan. Cras interdum hendreritnia Phasellus accumsan rna.
                                                </p>
                                                <div class="social_icons clearfix">
                                                    <ul>
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="single_staff margin-bottom-30">
                                        <figure class="uk-overlay uk-overlay-hover">
                                            <img src="<?= PUBLIC_URL ?>img/about-us-staff-two.jpg" alt="img">
                                            <div class="uk-overlay-panel uk-overlay-background single_staff_details">
                                                <h6>Dohn Doe</h6>
                                                <span>Hotel Manager</span>
                                                <p>
                                                    Semper ac dolor vitae msan. Cras interdum hendreritnia Phasellus accumsan rna.
                                                </p>
                                                <div class="social_icons clearfix">
                                                    <ul>
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="single_staff margin-bottom-30">
                                        <figure class="uk-overlay uk-overlay-hover">
                                            <img src="<?= PUBLIC_URL ?>img/about-us-staff-three.jpg" alt="img">
                                            <div class="uk-overlay-panel uk-overlay-background single_staff_details">
                                                <h6>Dohn Doe</h6>
                                                <span>Hotel Manager</span>
                                                <p>
                                                    Semper ac dolor vitae msan. Cras interdum hendreritnia Phasellus accumsan rna.
                                                </p>
                                                <div class="social_icons clearfix">
                                                    <ul>
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="single_staff margin-bottom-30">
                                        <figure class="uk-overlay uk-overlay-hover">
                                            <img src="<?= PUBLIC_URL ?>img/about-us-staff-four.jpg" alt="img">
                                            <div class="uk-overlay-panel uk-overlay-background single_staff_details">
                                                <h6>Dohn Doe</h6>
                                                <span>Hotel Manager</span>
                                                <p>
                                                    Semper ac dolor vitae msan. Cras interdum hendreritnia Phasellus accumsan rna.
                                                </p>
                                                <div class="social_icons clearfix">
                                                    <ul>
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="single_staff">
                                        <figure class="uk-overlay uk-overlay-hover">
                                            <img src="<?= PUBLIC_URL ?>img/about-us-staff-five.jpg" alt="img">
                                            <div class="uk-overlay-panel uk-overlay-background single_staff_details">
                                                <h6>Dohn Doe</h6>
                                                <span>Hotel Manager</span>
                                                <p>
                                                    Semper ac dolor vitae msan. Cras interdum hendreritnia Phasellus accumsan rna.
                                                </p>
                                                <div class="social_icons clearfix">
                                                    <ul>
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="single_staff">
                                        <figure class="uk-overlay uk-overlay-hover">
                                            <img src="<?= PUBLIC_URL ?>img/about-us-staff-six.jpg" alt="img">
                                            <div class="uk-overlay-panel uk-overlay-background single_staff_details">
                                                <h6>Dohn Doe</h6>
                                                <span>Hotel Manager</span>
                                                <p>
                                                    Semper ac dolor vitae msan. Cras interdum hendreritnia Phasellus accumsan rna.
                                                </p>
                                                <div class="social_icons clearfix">
                                                    <ul>
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="single_staff">
                                        <figure class="uk-overlay uk-overlay-hover">
                                            <img src="<?= PUBLIC_URL ?>img/about-us-staff-seven.jpg" alt="img">
                                            <div class="uk-overlay-panel uk-overlay-background single_staff_details">
                                                <h6>Dohn Doe</h6>
                                                <span>Hotel Manager</span>
                                                <p>
                                                    Semper ac dolor vitae msan. Cras interdum hendreritnia Phasellus accumsan rna.
                                                </p>
                                                <div class="social_icons clearfix">
                                                    <ul>
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="single_staff">
                                        <figure class="uk-overlay uk-overlay-hover">
                                            <img src="<?= PUBLIC_URL ?>img/about-us-staff-eight.jpg" alt="img">
                                            <div class="uk-overlay-panel uk-overlay-background single_staff_details">
                                                <h6>Dohn Doe</h6>
                                                <span>Hotel Manager</span>
                                                <p>
                                                    Semper ac dolor vitae msan. Cras interdum hendreritnia Phasellus accumsan rna.
                                                </p>
                                                <div class="social_icons clearfix">
                                                    <ul>
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end our room facilities -->


    <!-- start footer -->
    <?php include_once './public/_share/footer.php'; ?>
    <!-- end footer -->
    <!-- start script link -->
    <?php include_once './public/_share/script.php'; ?>
    <!-- end script link -->
</body>

</html>
