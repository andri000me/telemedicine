<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
   <title>Pendaftaran Reservasi Online - Telemedicine RSUP Dr. Kariadi</title>
   <link rel="icon" type="image/x-icon" href="<?= base_url('assets/images/logo_kariadi.png') ?>" />
   <!-- BEGIN GLOBAL MANDATORY STYLES -->
   <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
   <link href="<?= base_url('assets/') ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
   <link href="<?= base_url('assets/') ?>assets/css/plugins.css" rel="stylesheet" type="text/css" />
   <!-- END GLOBAL MANDATORY STYLES -->
   <!--  BEGIN CUSTOM STYLE FILE  -->
   <link href="<?= base_url('assets/') ?>assets/css/pages/privacy/privacy.css" rel="stylesheet" type="text/css" />
   <!--  END CUSTOM STYLE FILE  -->
</head>

<body>
   <div id="headerWrapper">

      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12 col-sm-12 col-12 text-center mb-5">
            </div>
            <div class="col-md-12 col-sm-12 col-12 text-center">
               <h2 class="main-heading"></h2>
            </div>
         </div>
      </div>
   </div>
   <div id="privacyWrapper" class="">
      <div class="privacy-container">
         <div class="privacyContent">
            <div class="d-flex justify-content-between privacy-head">
               <div class="privacyHeader">
                  <h1>Daftar Reservasi Online</h1>
                  <p><a href="<?= base_url() ?>" class="text-primary"> <b> Masuk</b></a> atau <a href="<?= base_url('online_checking') ?>" class="text-primary"><b> Lupa Kode Checkin? </b></a></p>
               </div>
               <div class="get-privacy-terms align-self-center">
                  <img src="<?= base_url('assets/images/logo_kariadi.png') ?>" class="img-fluid" alt="logo" />
               </div>
            </div>
            <div class="privacy-content-container">
               <section>
                  <div style="height: 800px; overflow: hidden; border:1px">
                     <iframe src="http://perjanjian.rskariadi.id/Admission/JadwalDokter" allowfullscreen="true" frameBorder="0" width="100%" height="100%" style="position: relative;  top: -55px"></iframe>
                  </div>
               </section>
            </div>
         </div>
      </div>
   </div>

   <div id="miniFooterWrapper" class="">
      <div class="row">
         <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="position-relative">
               <div class="arrow text-center">
                  <p class="">Up</p>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-left text-center copyright align-self-center">
                  <p class="mt-md-0 mt-4 mb-0">
                     Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                     </script> All rights reserved <a href="https://www.rskariadi.co.id/" target="_blank">RSUP
                        Dr.
                        Kariadi</a>
                  </p>
               </div>
               <div class="col-xl-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-right text-center align-self-center">
                  <p class="mb-0">
                     Support by <a href="https://www.codavlo.com" class="text-success">Codavlo Indonesia</a>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
   <script src="<?= base_url('assets/') ?>assets/js/libs/jquery-3.1.1.min.js"></script>
   <script src="<?= base_url('assets/') ?>bootstrap/js/popper.min.js"></script>
   <script src="<?= base_url('assets/') ?>bootstrap/js/bootstrap.min.js"></script>
   <!-- END GLOBAL MANDATORY SCRIPTS -->
   <script>
      // Scroll To Top
      $(document).on('click', '.arrow', function(event) {
         event.preventDefault();
         var body = $("html, body");
         body.stop().animate({
            scrollTop: 0
         }, 500, 'swing');
      });
   </script>
</body>

</html>