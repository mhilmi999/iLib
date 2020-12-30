<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>iLib | Pemustaka</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/asset/sidebar/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/asset/sidebar/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>/asset/NewBiz/img/favicon.png" rel="icon">
    <link href="<?= base_url(); ?>/asset/NewBiz/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>/asset/NewBiz/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/asset/NewBiz/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/asset/NewBiz/assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/asset/NewBiz/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/asset/NewBiz/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/asset/NewBiz/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>/asset/NewBiz/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NewBiz - v2.2.0
  * Template URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container">

            <div class="logo float-left">
                <!-- Uncomment below if you prefer to use an text logo -->
                <!-- <h1><a href="index.html">NewBiz</a></h1> -->
                <a href="<?= base_url() . 'index.php/PemustakaCtl'; ?>"><img src="<?= base_url(); ?>/asset/NewBiz/img/logo.png" alt="" class="img-fluid"></a>
            </div>

            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li><a href="<?= base_url() . 'index.php/PemustakaCtl'; ?>">Beranda</a></li>
                    <li><a href="<?= base_url() . 'index.php/PemustakaCtl/kartuAnggota'; ?>">Kartu Anggota</a></li>
                    <li><a href="<?= base_url() . 'index.php/PemustakaCtl/katalogBuku'; ?>">Katalog Buku</a></li>
                    <li class="drop-down"><a href="#">Peminjaman</a>
                        <ul>
                            <li><a href="<?= base_url() . 'index.php/PemustakaCtl/keranjangBuku'; ?>">Keranjang Peminjaman</a></li>
                            <li><a href="<?= base_url() . 'index.php/PemustakaCtl/historiPinjamBuku'; ?>">Histori Peminjaman</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url() . 'index.php/AccountCtl/keluarIn'; ?>">Keluar</a></li>
                </ul>
            </nav>
            <!-- .main-nav -->

        </div>
    </header>
    <!-- #header -->