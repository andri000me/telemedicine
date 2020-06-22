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
                        <li class="active"><a href="<?= base_url() ?>">Home</a></li>
                        <!-- <li><a href="http://perjanjian.rskariadi.id/Admission/JadwalDokter" target="_blank">Daftar Online</a></li>
                        <li><a href="http://perjanjian.rskariadi.id/Admission/AdmissionCheckIn" target="_blank">Cek Bukti Pendaftaran </a></li> -->
                        <li><a href="<?= base_url('register') ?>">Daftar Online</a></li>
                        <li class=""><a href="<?= base_url('online_checking') ?>">Cek Bukti Pendaftaran </a></li>
                        <li><a href="<?= base_url('guide') ?>">Panduan Pengguna</a></li>
                     </ul>
                  </nav>
               </div>
               <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;">
                  <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
               </div>
            </div>
         </div>
   </div>
   </header>
   <div class="site-blocks-cover overlay" style="background-image: url(<?= base_url('assets/image/kasuari.jpg') ?>); " data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
         <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
               <div class="row justify-content-center mb-4">
                  <div class="col-md-10 text-center">
                     <h1>Selamat Datang Di <span class="typed-words"></span></h1>
                     <p class="lead mb-5">Sahabat Menuju Sehat</p>
                     <div><a href="#login" class="btn btn-primary btn-md" style="padding: 2% 10% 2% 10%"><b> Mulai Telemedicine</b></a></div>

                  </div>
               </div>
               <?= $this->session->flashdata('notif'); ?>
            </div>
         </div>
      </div>
   </div>
   <section class="section ft-feature-1">
      <div class="container">
         <div class="row align-items-stretch">
            <div class="col-12 bg-light w-100 ft-feature-1-content" id="login">
               <div class="row align-items-center">
                  <div class="col-lg-5">
                     <div class="h-100">
                        <div class="mb-5 ">
                           <h2 class="text-primary"> Silahkan masuk untuk memulai Telemedicine</h2>
                        </div>
                        <img src="<?= base_url('assets/landing/images/appgirl.png') ?>" alt="Featured image" class="img-feature img-fluid">
                     </div>
                  </div>
                  <div class="col-lg-7 ml-auto">
                     <form action="<?= base_url() ?>auth" method="post" class="p-5 bg-white">
                        <h2 class="h4 text-black mb-5">Masuk</h2>

                        <div class="row form-group">
                           <div class="col-md-12">
                              <label class="text-black" for="username">Nomor Rekam Medis</label>
                              <input type="text" name="username" id="username" class="form-control">
                           </div>
                        </div>
                        <div class="row form-group">
                           <div class="col-md-12">
                              <label class="text-black" for="password">Kode Checkin</label>
                              <input type="password" name="password" id="password" class="form-control">
                           </div>
                        </div>
                        <div class="row form-group">
                           <div class="col-md-12">
                              <button type="submit" class="btn btn-primary btn-md text-white float-right"><b> Masuk</b></button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="site-section">
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-lg-4">
               <div class="p-3 box-with-humber">
                  <div class="number-behind">01.</div>
                  <h2>Daftar Online</h2>
                  <p align="justify">&emsp;&emsp;Pastikan anda sudah mendaftar online di website, telepon maupun sms dan mempunyai kode checkin. Sangat disarankan anda mendaftar online melalui website.
                  </p>
               </div>
            </div>
            <div class="col-md-6 col-lg-4">
               <div class="p-3 box-with-humber">
                  <div class="number-behind">02.</div>
                  <h2>Pilih Layanan</h2>
                  <p align="justify">&emsp;&emsp;Setelah melakukan login silahkan memilih menu layanan Telemedicine, layanan yang tersedia saat ini hanya penjadwalan kemoterapi. Anda dapat menyampaikan kondisi terakhir dan keluhan anda pada menu ini.
                  </p>
               </div>
            </div>
            <div class="col-md-6 col-lg-4">
               <div class="p-3 box-with-humber">
                  <div class="number-behind">03.</div>
                  <h2>Lihat Hasil Kontrol</h2>
                  <p align="justify">&emsp;&emsp;Menu hasil kontrol dapat melihat saran atau jadwal kemoterapi anda selanjutnya. Proses penjadwalan ditentukan dengan nilai hasil laboraturium dan kondisi fisik anda melalui foto.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </section>
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
                     <img src="<?= base_url('assets/landing/images/logo_kariadi.png') ?>" alt="logo_kariadi">
                  </div>
               </div>
            </div>
         </div>
         <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
               <div class="border-top pt-5">
                  <p>
                     Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                     </script> All rights reserved | <a href="https://www.rskariadi.co.id/" target="_blank">RSUP Dr.
                        Kariadi</a> | Support by <a href="https://www.codavlo.com">Codavlo Indonesia</a>
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
   <script src="<?= base_url('assets/landing/') ?>js/typed.js"></script>
   <script>
      var typed = new Typed('.typed-words', {
         strings: ["Telemedicine", " RSUP Dr. Kariadi", " Poliklinik Kasuari"],
         typeSpeed: 80,
         backSpeed: 80,
         backDelay: 4000,
         startDelay: 1000,
         loop: true,
         showCursor: true
      });
   </script>
   <script src="<?= base_url('assets/landing/') ?>js/main.js"></script>
</body>

</html>