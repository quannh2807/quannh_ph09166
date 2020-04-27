<?php
session_start();
define('TITLE', 'Our Blog');
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

<body id="blog_page">
    <!-- start header -->
    <?php include_once './public/_share/header.php'; ?>
    <!-- end header -->

    <!-- start breadcrumb -->
    <section class="breadcrumb_main_area margin-bottom-80">
        <div class="container-fluid">
            <div class="row">
                <div class="breadcrumb_main nice_title">
                    <h2>News</h2>
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

    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="clearfix blog_inner" data-uk-grid>
                            <div class="margin-bottom-30 col-md-4 col-sm-6 col-xs-12">
                                <div class="single_blog_style1">
                                    <div class="style_blog_img_box">
                                        <img src="<?= PUBLIC_URL ?>img/blog-pic1.jpg" alt="img" />
                                        <a class="style_b_link" href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                    <div class="at_love"><i class="fa fa-heart"></i></div>
                                    <div class="blog_text_box">
                                        <h5>Restaurant Services open </h5>
                                        <ul class="clearfix">
                                            <li><a href="#">By Admin |</a></li>
                                            <li><a href="#">3 Jan 2015 |</a></li>
                                            <li><a href="#">3 Comment</a></li>
                                        </ul>
                                        <p>Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor. </p>
                                        <a href="single-blog.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="margin-bottom-30 col-md-4 col-sm-6 col-xs-12">
                                <div class="single_blog_style2">
                                    <div class="blog_img_box">
                                        <a href="#">http:// themeforest.net/users/wpmines</a>
                                        <a class="b_link" href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                    <div class="blog_text_box">
                                        <ul class="clearfix">
                                            <li><a href="#">By Admin |</a></li>
                                            <li><a href="#">3 Jan 2015 |</a></li>
                                            <li><a href="#">3 Comment</a></li>
                                        </ul>
                                        <p>Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor. </p>
                                        <a href="single-blog.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="margin-bottom-30 col-md-4 col-sm-6 col-xs-12">
                                <div class="single_blog_style1">
                                    <div class="style_blog_img_box">
                                        <img src="<?= PUBLIC_URL ?>img/blog-pic3.jpg" alt="img" />
                                        <a class="style_b_link" href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                    <div class="blog_text_box">
                                        <h5>Restaurant Services open </h5>
                                        <ul class="clearfix">
                                            <li><a href="#">By Admin |</a></li>
                                            <li><a href="#">3 Jan 2015 |</a></li>
                                            <li><a href="#">3 Comment</a></li>
                                        </ul>
                                        <p>Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor. </p>
                                        <a href="single-blog.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="margin-bottom-30 col-md-4 col-sm-6 col-xs-12">
                                <div class="single_blog_style2">
                                    <div class="blog_img_box">
                                        <a href="#">http:// themeforest.net/users/wpmines</a>
                                        <a class="b_link" href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                    <div class="blog_text_box">
                                        <ul class="clearfix">
                                            <li><a href="#">By Admin |</a></li>
                                            <li><a href="#">3 Jan 2015 |</a></li>
                                            <li><a href="#">3 Comment</a></li>
                                        </ul>
                                        <p>Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor. </p>
                                        <a href="single-blog.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="margin-bottom-30 col-md-4 col-sm-6 col-xs-12">
                                <div class="single_blog_style1">
                                    <div class="style_blog_img_box">
                                        <img src="<?= PUBLIC_URL ?>img/blog-pic4.jpg" alt="" />
                                        <a class="style_b_link" href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                    <div class="blog_text_box">
                                        <h5>Restaurant Services open </h5>
                                        <ul class="clearfix">
                                            <li><a href="#">By Admin |</a></li>
                                            <li><a href="#">3 Jan 2015 |</a></li>
                                            <li><a href="#">3 Comment</a></li>
                                        </ul>
                                        <p>Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor. </p>
                                        <a href="single-blog.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="margin-bottom-30 col-md-4 col-sm-6 col-xs-12">
                                <div class="single_blog_style2">
                                    <div class="blog_img_box">
                                        <a href="#">http:// themeforest.net/users/wpmines</a>
                                        <a class="b_link" href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                    <div class="blog_text_box">
                                        <ul class="clearfix">
                                            <li><a href="#">By Admin |</a></li>
                                            <li><a href="#">3 Jan 2015 |</a></li>
                                            <li><a href="#">3 Comment</a></li>
                                        </ul>
                                        <p>Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor. </p>
                                        <a href="single-blog.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="margin-bottom-30 col-md-4 col-sm-6 col-xs-12">
                                <div class="single_blog_style1">
                                    <div class="style_blog_img_box">
                                        <img src="<?= PUBLIC_URL ?>img/blog-pic5.jpg" alt="" />
                                        <a class="style_b_link" href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                    <div class="blog_text_box">
                                        <h5>Restaurant Services open </h5>
                                        <ul class="clearfix">
                                            <li><a href="#">By Admin |</a></li>
                                            <li><a href="#">3 Jan 2015 |</a></li>
                                            <li><a href="#">3 Comment</a></li>
                                        </ul>
                                        <p>Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor. </p>
                                        <a href="single-blog.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="margin-bottom-30 col-md-4 col-sm-6 col-xs-12">
                                <div class="single_blog_style1">
                                    <div class="style_blog_img_box">
                                        <img src="<?= PUBLIC_URL ?>img/blog-pic7.jpg" alt="" />
                                        <a class="style_b_link" href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                    <div class="blog_text_box">
                                        <h5>Restaurant Services open </h5>
                                        <ul class="clearfix">
                                            <li><a href="#">By Admin |</a></li>
                                            <li><a href="#">3 Jan 2015 |</a></li>
                                            <li><a href="#">3 Comment</a></li>
                                        </ul>
                                        <p>Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor. </p>
                                        <a href="single-blog.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="margin-bottom-30 col-md-4 col-sm-6 col-xs-12">
                                <div class="single_blog_style1">
                                    <div class="style_blog_img_box">
                                        <img src="<?= PUBLIC_URL ?>img/blog-pic6.jpg" alt="" />
                                        <a class="style_b_link" href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                    <div class="blog_text_box">
                                        <h5>Restaurant Services open </h5>
                                        <ul class="clearfix">
                                            <li><a href="#">By Admin |</a></li>
                                            <li><a href="#">3 Jan 2015 |</a></li>
                                            <li><a href="#">3 Comment</a></li>
                                        </ul>
                                        <p>Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor. </p>
                                        <a href="single-blog.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="load_more">
                                    <a href="#">Load More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- start footer -->
    <?php include_once './public/_share/footer.php'; ?>
    <!-- end footer -->
    <!-- start script link -->
    <?php include_once './public/_share/script.php'; ?>
    <!-- end script link -->
</body>

</html>
