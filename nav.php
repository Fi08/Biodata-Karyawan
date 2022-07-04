<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Biodata Employee</title>

    <!-- Custom fonts for this template-->
    <link href="aset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="aset/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="aset/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<?php
session_start();

if (!isset($_SESSION['role'])) {
    header("Location: login.php");
}

include('koneksi.php');



$nik = $_SESSION['nik'];
$users = mysqli_query($con, "SELECT * FROM `user` WHERE email = '$nik' ");
$user = mysqli_fetch_array($users);
$keluarga = mysqli_query($con, "SELECT * FROM `keluarga` WHERE id_user = '$nik' ");
$penfor = mysqli_query($con, "SELECT * FROM `penfor` WHERE id_user = '$nik' ");
$nonpenfor = mysqli_query($con, "SELECT * FROM `nonpenfor` WHERE id_user = '$nik' ");
$riwayat = mysqli_query($con, "SELECT * FROM `riwayat` WHERE id_user = '$nik' ");


?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <img src="aset/img/nippisun.png" alt="">
            </a>

            <!-- Query MENU -->
            <?php
            $role = $_SESSION['role'];
            $querymenu = mysqli_query($con, "SELECT `user_menu`.`id`,`menu` 
                                            FROM `user_menu` JOIN `user_access_menu` 
                                            ON `user_menu`.`id` = `user_access_menu`.`menu_id` 
                                            WHERE `user_access_menu`.`role_id`= $role 
                                            ORDER BY `user_access_menu`.`menu_id` ASC ");
            // $menus = mysqli_fetch_array($querymenu);
            ?>

            <!-- ADMIN MENU -->
            <?php foreach ($querymenu as $m) : ?>
                <div class="sidebar-heading">
                    <?= $m['menu'] ?>

                </div>
                <hr class="sidebar-divider d-none d-md-block">

                <!-- SUB MENU LOOP -->
                <?php $idmenu = $m['id']; ?>
                <?php $menus = mysqli_query($con, "SELECT * FROM `user_sub_menu` WHERE menu_id = $idmenu ") ?>
                <?php foreach ($menus as $ms) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=<?= $ms['url']; ?>">
                            <!-- buat HALAMAN  -->
                            <!-- buat icon -->
                            <i class=<?= $ms['icon']; ?>></i>
                            <span><?= $ms['title']; ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php endforeach; ?>
            <li class="nav-item">
                <a class="nav-link" href="?page=logout">
                    <!-- buat HALAMAN  -->
                    <!-- buat icon -->
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Logout</span>
                </a>
            </li>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['name'] ?> </span>
                                <img class="img-profile rounded-circle" src="aset/<?= $user['foto'] ?>">
                            </a>
                        </li>

                    </ul>
                </nav>


                <!-- End of Topbar -->