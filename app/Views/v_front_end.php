<?php

use App\Controllers\Auth;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WEB DESA - <?= $judul ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('front-end') ?>/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url('front-end') ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('front-end') ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url('front-end') ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url('front-end') ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('front-end') ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('front-end') ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('front-end') ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url('front-end') ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('front-end') ?>/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.9.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <img src="<?= base_url(relativePath: 'logo/bg-logo.PNG') ?>" width="50px">
      <h1 class="logo me-auto"><a href="Home">KAMPUNG TOBATI</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="<?= base_url('front-end') ?>/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="Home">Beranda</a></li>
          <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="active" href="Berita">Tempat Wisata</a></li>
              <li><a href="Galeri">Galeri Foto</a></li>
              <li><a href="Agenda">Agenda Kampung</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Gambaran Umum</a></li>
              <!-- <li><a href="<?= base_url('Auth/Logout') ?>">Pekerjaan</a></li> -->
              <!-- <li><a href="#">Peta Kampung</a></li> -->
              <li><a href="Sejarah">Sejarah</a></li>
              <li><a href="#">Kepala Desa & Perangkat</a></li>
            </ul>
          </li>
          <li><a class="active" href="Tentang">Tentang Kami</a></li>
          </li>
          <li><a class="active" href="Kontak">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="<?= base_url('Auth') ?>" class="get-started-btn">Login</a>

    </div>
  </header><!-- End Header -->


  <?php if ($page) {
    echo view($page);
  }   ?>



  <!-- ======= Footer ======= -->
  <fooeter id="footer">
    <!-- <div class="footer-top">
      <div class="container">
        <div class="row">
        </div>
      </div>
    </div> -->
    <div class="container d-md-flex py-2">
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright 2024 <strong><span>ProjectwebII</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
        </div>
      </div>
      <div class="social-links text-center text-md-top">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
    <br><br><br>
  </fooeter><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('front-end') ?>/ssets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?= base_url('front-end') ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url('front-end') ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('front-end') ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url('front-end') ?>/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('front-end') ?>/assets/js/main.js"></script>

</body>

</html>