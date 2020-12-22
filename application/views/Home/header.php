<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>iLib | Beranda</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?= base_url();?>/asset/NewBiz/img/favicon.png" rel="icon">
  <link href="<?= base_url();?>/asset/NewBiz/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?= base_url();?>/asset/NewBiz/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?= base_url();?>/asset/NewBiz/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url();?>/asset/NewBiz/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?= base_url();?>/asset/NewBiz/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?= base_url();?>/asset/NewBiz/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url();?>/asset/NewBiz/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?= base_url();?>/asset/NewBiz/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: NewBiz
    Theme URL: https://bootstrapmade.com/asset/newbiz-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><img src="<?= base_url();?>/asset/NewBiz/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li class="drop-down"><a href="">Akses sekarang!</a>
            <ul>
            <li class="drop-down"><a href="#">Pemustaka</a>
                <ul>
                  <li><a href="<?= base_url(). 'index.php/AccountCtl/daftar';?>">Daftar</a></li>
                  <li><a href="<?= base_url(). 'index.php/AccountCtl/masuk';?>">Masuk</a></li>
                  </ul>
              </li>
              <li class="drop-down"><a href="#">Pustakawan</a>
                <ul>    
                  <li><a href="<?= base_url(). 'index.php/AccountCtl/masuk';?>">Masuk</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </asset/nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->
