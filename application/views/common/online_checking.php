<!DOCTYPE html>
<html lang="en">

<head>
   <title>Telemedicine &mdash; RSUP Dr. Kariadi</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="shortcut icon" href="<?= base_url('assets/landing/images/logo_kariadi.png') ?>">
   <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
   <link rel="stylesheet" href="<?= base_url('assets/landing/') ?>fonts/icomoon/style.css">
   <link rel="stylesheet" href="<?= base_url('assets/landing/') ?>css/bootstrap.min.css">
   <link rel="stylesheet" href="<?= base_url('assets/landing/') ?>css/magnific-popup.css">
   <link rel="stylesheet" href="<?= base_url('assets/landing/') ?>css/jquery-ui.css">
   <link rel="stylesheet" href="<?= base_url('assets/landing/') ?>css/owl.carousel.min.css">
   <link rel="stylesheet" href="<?= base_url('assets/landing/') ?>css/owl.theme.default.min.css">
   <link rel="stylesheet" href="<?= base_url('assets/landing/') ?>css/bootstrap-datepicker.css">
   <link rel="stylesheet" href="<?= base_url('assets/landing/') ?>fonts/flaticon/font/flaticon.css">
   <link rel="stylesheet" href="<?= base_url('assets/landing/') ?>css/aos.css">
   <link rel="stylesheet" href="<?= base_url('assets/landing/') ?>css/style.css">
</head>

<body>
   <div class="site-wrap">
      <div class="site-mobile-menu">
         <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
               <span class="icon-close2 js-menu-toggle"></span>
            </div>
         </div>
         <div class="site-mobile-menu-body"></div>
      </div>
      <header class="site-navbar py-4 bg-white" role="banner">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-11 col-xl-2">
                  <a href="<?= base_url() ?>" class="text-black h2 mb-0 "><img src="<?= base_url('assets/landing/images/logo_kariadi.png') ?>" alt="logo_kariadi" class="float-left" width="50%"> Telemedicine
                  </a>
               </div>
               <div class="col-12 col-md-10 d-none d-xl-block">
                  <nav class="site-navigation position-relative text-right" role="navigation">
                     <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li><a href="<?= base_url('register') ?>">Daftar Online</a></li>
                        <li class="active"><a href="<?= base_url('online_checking') ?>">Cek Bukti Pendaftaran </a></li>
                        <li><a href="<?= base_url('guide') ?>">Panduan Pengguna</a></li>
                     </ul>
                  </nav>
               </div>
               <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
            </div>
         </div>
   </div>
   </header>
   <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?= base_url('assets/landing/images/hero_1.jpg') ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
         <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
               <div class="row justify-content-center ">
                  <div class="col-md-8 text-center">
                     <h1> Cek Bukti Pendaftaran Online</h1>
                     <p class="lead ">Silahkan masukan NIK / Nomor Rekam Medis ( No RM ) dan Tanggal Lahir pasien untuk mengecek bukti daftar</p>
                     <div><a href="#checking " class="btn btn-primary btn-md" style="padding: 2% 10% 2% 10%"><b>Cek Pendaftaran</b></a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="site-section bg-light" id="checking">
      <div class="container">
         <div class="container-fluid">
            <div style="height: 800px; overflow: hidden; border:1px">
               <iframe src="http://perjanjian.rskariadi.id/Admission/AdmissionCheckIn" allowfullscreen="true" frameBorder="0" width="100%" height="70%" style="position: relative;  top: -55px"></iframe>
            </div>
         </div>
      </div>
   </div>
   <footer class="site-footer">
      <div class="container">
         <div class="row">
            <div class="col-md-9">
               <div class="row">
                  <div class="col-md-6">
                     <h2 class="footer-heading mb-4">About Us</h2>
                     <p class="text-justify">Aplikasi Temeledicine RSUP Dr. Kariadi merupakan solusi bagi masyarakat dalam melakukan pemeriksaan dengan sistem online.
                        Kami selalu menghadirkan pelayanan terbaik untuk anda karena kami sahabat menuju sehat.
                     </p>
                  </div>
                  <div class="col-md-4">
                     <h2 class="footer-heading mb-4">Ikuti Kami</h2>
                     <a href="https://wwww.facebook.com/rskariadi" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                     <a href="https://wwww.twitter.com/rskariadi" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                     <a href="https://wwww.instagram.com/rskariadi" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                     <a href="https://wwww.youtube.com//channel/UC5PkgFKg98F7dB__gM7xq0Q" class="pl-3 pr-3"><span class="icon-youtube"></span></a>
                  </div>
                  <div class="col-md-2">
                     <img src="https://www.rskariadi.co.id/images/logo-wide-white.png" alt="">
                  </div>
               </div>
            </div>
         </div>
         <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
               <div class="border-top pt-5">
                  <p>
                     <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                     Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                     </script> All rights reserved | <a href="https://www.rskariadi.co.id/" target="_blank">RSUP
                        Dr.
                        Kariadi</a> | Support by <a href="https://www.codavlo.com">Codavlo Indonesia</a>
                     <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  </p>
               </div>
            </div>
         </div>
      </div>
   </footer>
   </div>
   <script src="<?= base_url('assets/landing/') ?>js/jquery-3.3.1.min.js"></script>
   <script src="<?= base_url('assets/landing/') ?>js/jquery-migrate-3.0.1.min.js"></script>
   <script src="<?= base_url('assets/landing/') ?>js/jquery-ui.js"></script>
   <script src="<?= base_url('assets/landing/') ?>js/popper.min.js"></script>
   <script src="<?= base_url('assets/landing/') ?>js/bootstrap.min.js"></script>
   <script src="<?= base_url('assets/landing/') ?>js/owl.carousel.min.js"></script>
   <script src="<?= base_url('assets/landing/') ?>js/jquery.stellar.min.js"></script>
   <script src="<?= base_url('assets/landing/') ?>js/jquery.countdown.min.js"></script>
   <script src="<?= base_url('assets/landing/') ?>js/jquery.magnific-popup.min.js"></script>
   <script src="<?= base_url('assets/landing/') ?>js/bootstrap-datepicker.min.js"></script>
   <script src="<?= base_url('assets/landing/') ?>js/aos.js"></script>
   <script src="<?= base_url('assets/landing/') ?>js/main.js"></script>
</body>

</html>