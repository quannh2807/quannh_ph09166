<?php
session_start();
define('TITLE', 'Profile');
require_once '../config/utils.php';
$loggedInUser = isset($_SESSION[AUTH]) ? $_SESSION[AUTH] : null;
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <?php include_once '../public/_share/link.php'; ?>
</head>

<body id="home_one">
    <!-- start header -->
    <?php include_once '../public/_share/header.php'; ?>
    <!-- end header -->

    <!-- start profile -->
    <div class="container">
        <h3>Thông tin cá nhân</h3>
        <main>

        </main>
    </div>
    <!-- end profile -->

    <!-- start footer -->
    <?php include_once '../public/_share/footer.php'; ?>
    <!-- end footer -->
    <!-- start script link -->
    <?php include_once '../public/_share/script.php'; ?>
    <!-- end script link -->
    <script>
        setTimeout(() => {
            sessionStorage.clear();
        }, 2500);
    </script>
</body>

</html>
