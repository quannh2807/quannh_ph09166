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
                                <a id="brand" class="clearfix navbar-brand border-right-whitesmoke" href="<?= BASE_URL?>"><img src="<?= PUBLIC_URL . 'img/site-logo.png'?>" alt="Trips"></a>
                            </div>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li role="presentation">
                                    <a href="<?=BASE_URL?>">Home</a>
                                </li>
                                <li><a href="<?= BASE_URL . 'accomodation.php'?>">Accomodation</a></li>
                                <li><a href="<?= BASE_URL . 'gallery.php'?>">Gallery</a></li>
                                <li role="presentation" class="dropdown">
                                    <a id="drop2" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                        Features
                                    </a>
                                    <ul id="menu2" class="dropdown-menu" role="menu">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?= BASE_URL .'about-us.php'?>">About US</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?= BASE_URL . 'booking.php'?>">Booking</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?= BASE_URL . 'room-details.php'?>">Room Details</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?=BASE_URL . 'staff.php'?>">Our Staff</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?= BASE_URL . '404.php'?>">404 Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= BASE_URL . 'blog.php'?>">News</a></li>
                                <li><a href="<?= BASE_URL . 'contact-us.php'?>">Contacts</a></li>

                                <?php if ($loggedInUser) : ?>
                                    <li role="presentation" class="dropdown">
                                        <a id="drop2" href="#" class="dropdown-toggle text-primary" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                            Hi, <?= $loggedInUser['name']; ?>
                                        </a>
                                        <ul id="menu2" class="dropdown-menu" role="menu">
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?= LOGIN_URL . 'infomation.php'?>">Thông tin cá nhân</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?= LOGIN_URL . 'change-info.php'?>">Đổi thông tin</a></li>
                                            <?php if ($loggedInUser !== null && $loggedInUser['role_id'] > 1):?>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" class="login-color" href="<?=ADMIN_URL. 'dashboard'?>">Quản trị</a></li>
                                            <?php endif;?>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?=LOGIN_URL.'logout.php'?>">Logout</a></li>
                                        </ul>
                                    </li>
                                <?php else : ?>
                                    <li><a href="<?=LOGIN_URL.'login.php'?>" class="nav-link text-primary login-color">Login</a></li>
                                <?php endif ?>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
            <!-- end mainmenu and logo -->
        </div>
    </div>
    <!-- end main header -->

</header>
