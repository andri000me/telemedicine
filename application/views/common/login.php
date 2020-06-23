<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
   <title>Telemedicine &mdash; RSUP Dr. Kariadi</title>
   <link rel="icon" type="image/x-icon" href="<?= base_url('assets/images/logo_kariadi.png') ?>" />
   <!-- BEGIN GLOBAL MANDATORY STYLES -->
   <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
   <link href="<?= base_url('assets/') ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
   <link href="<?= base_url('assets/') ?>css/plugins.css" rel="stylesheet" type="text/css" />
   <link href="<?= base_url('assets/') ?>css/authentication/form-1.css" rel="stylesheet" type="text/css" />
   <!-- END GLOBAL MANDATORY STYLES -->
   <link href="<?= base_url('assets/') ?>css/scrollspyNav.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/forms/theme-checkbox-radio.css">
   <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/forms/switches.css">
</head>

<body class="form">
   <div class="form-container">
      <div class="form-form">
         <div class="form-form-wrap">
            <div class="form-container">
               <div class="form-content">
                  <h1 class="">Masuk dan Mulai <a href="<?= base_url() ?>"><span class="brand-name"> Telemedicine</span></a></h1>
                  <p class="signup-link">Belum Terdaftar ? <a href="<?= base_url('register') ?>">Daftar reservasi online</a></p>
                  <form class="text-left" action="<?= base_url() ?>auth" method="post">
                     <div class="form">
                        <div id="username-field" class="field-wrapper input">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                              <circle cx="12" cy="7" r="4"></circle>
                           </svg>
                           <input id="username" name="username" type="text" class="form-control" placeholder="Nomor Rekam Medis">
                        </div>

                        <div id="password-field" class="field-wrapper input mb-2">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                              <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                              <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                           </svg>
                           <input id="password" name="password" type="password" class="form-control" placeholder="Kode Checkin">
                        </div>
                        <div class="d-sm-flex justify-content-between">
                           <div class="field-wrapper toggle-pass">
                              <p class="d-inline-block">Tampilkan Kode Checkin</p>
                              <label class="switch s-primary">
                                 <input type="checkbox" id="toggle-password" class="d-none">
                                 <span class="slider round"></span>
                              </label>
                           </div>
                           <div class="field-wrapper">
                              <button type="submit" class="btn btn-primary">Masuk </button>
                           </div>
                        </div>

                        <div class="field-wrapper text-center keep-logged-in">

                           <a class="new-control" href="<?= base_url('guide') ?>">
                              Lihat Panduan Pengguna
                           </a>

                        </div>

                        <div class="field-wrapper text-center">
                           <a href="<?= base_url('online_checking') ?>" class="forgot-pass-link ml-2"> Lupa Kode Checkin?</a>
                        </div>

                     </div>
                  </form>
                  <p class="terms-conditions " align="center">All Rights Reserved © <?= date('Y') ?> <a href="https://www.rskariadi.co.id/" target="_blank">RSUP Dr. Kariadi</a>
                     <br> Support By <a href="https://www.codavlo.com" target="_blank" class="text-success">Codavlo Indonesia</a> </p>
                  <!-- <br> <a href="javascript:void(0);">Privacy</a>, and <a href="javascript:void(0);">Terms</a>. -->
                  <hr>
                  <div align="center">
                     <div class="icon-container">
                        <a href="https://wwww.instagram.com/rskariadi" target="_blank" class="pl-3 pr-3">
                           <i data-feather="instagram"></i>
                        </a>
                        <a href="https://wwww.facebook.com/rskariadi" target="_blank" class="pl-3 pr-3">
                           <i data-feather="facebook"></i>
                        </a>
                        <a href="https://wwww.twitter.com/rskariadi" target="_blank" class="pl-3 pr-3">
                           <i data-feather="twitter"></i>
                        </a>
                        <a href="https://wwww.youtube.com/channel/UC5PkgFKg98F7dB__gM7xq0Q" target="_blank" class="pl-3 pr-3">
                           <i data-feather="youtube"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="form-image">
         <div class="l-image">
            <img src="<?= base_url('assets/images/logo_kariadi.png') ?>" class="mt-5" alt="">
         </div>
      </div>

   </div>


   <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
   <script src="<?= base_url('assets/') ?>js/libs/jquery-3.1.1.min.js"></script>
   <script src="<?= base_url('assets/') ?>bootstrap/js/popper.min.js"></script>
   <script src="<?= base_url('assets/') ?>bootstrap/js/bootstrap.min.js"></script>

   <!-- END GLOBAL MANDATORY SCRIPTS -->
   <script src="<?= base_url('assets/') ?>js/authentication/form-1.js"></script>
   <script src="<?= base_url('assets/') ?>js/scrollspyNav.js"></script>
   <script src="<?= base_url('assets/') ?>plugins/font-icons/feather/feather.min.js"></script>
   <script type="text/javascript">
      feather.replace();
   </script>
</body>

</html>