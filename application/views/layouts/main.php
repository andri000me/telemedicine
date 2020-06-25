<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
   <title> <?= $title ?></title>
   <link rel="shortcut icon" href="<?= base_url('assets/images/logo_kariadi.png') ?>">
   <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
   <link href="<?= base_url('assets/') ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
   <link href="<?= base_url('assets/') ?>assets/css/plugins.css" rel="stylesheet" type="text/css" />
   <link href="<?= base_url('assets/') ?>assets/css/users/user-profile.css" rel="stylesheet" type="text/css" />
</head>

<body class="sidebar-noneoverflow">
   <?php $this->load->view('layouts/topbar'); ?>
   <!--  BEGIN MAIN CONTAINER  -->
   <div class="main-container" id="container">
      <div class="overlay"></div>
      <div class="cs-overlay"></div>
      <div class="search-overlay"></div>
      <?php $this->load->view('layouts/sidebar'); ?>
      <!--  BEGIN CONTENT AREA  -->
      <div id="content" class="main-content">
         <div class="layout-px-spacing">
            <div class=" layout-spacing">
               <div class=" layout-top-spacing">
                  <?= $this->session->flashdata('notif'); ?>
                  <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert"> ', '  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button> </div>'); ?>
                  <?php $this->load->view($_view); ?>
               </div>
            </div>
         </div>
         <div class="footer-wrapper">
            <div class="footer-section f-section-1">
               <p class="">Copyright &copy; RSUP Dr. Kariadi 2020 Support by <a href="https://www.codavlo.com" class="text-success">Codavlo Indonesia</a></p>
            </div>
            <div class="footer-section f-section-2">
               <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                     <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                  </svg></p>
            </div>
         </div>
      </div>
      <!--  END CONTENT AREA  -->
   </div>
   <!-- END MAIN CONTAINER -->

   <!-- Logout Modal-->
   <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
               </button>
            </div>
            <div class="modal-body">Apakah anda yakin akan keluar dari Telemedicine ?</div>
            <div class="modal-footer">
               <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
               <a class="btn btn-primary" href="<?= base_url() ?>auth/out">Keluar</a>
            </div>
         </div>
      </div>
   </div> -->

   <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
   <script src="<?= base_url('assets/') ?>assets/js/libs/jquery-3.1.1.min.js"></script>
   <script src="<?= base_url('assets/') ?>bootstrap/js/popper.min.js"></script>
   <script src="<?= base_url('assets/') ?>bootstrap/js/bootstrap.min.js"></script>
   <script src="<?= base_url('assets/') ?>plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
   <script src="<?= base_url('assets/') ?>assets/js/app.js"></script>
   <script src="<?= base_url('assets/') ?>assets/js/custom.js"></script>
   <script src="<?= base_url('assets/') ?>plugins/font-icons/feather/feather.min.js"></script>
   <script type="text/javascript">
      feather.replace();

      $(document).ready(function() {
         App.init();
      });

      $(".custom-file-input").on("change", function() {
         let fileName = $(this).val().split("\\").pop();
         $(this).next(".custom-file-label").addClass("selected").html(fileName);
      });
   </script>
   <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>

</html>