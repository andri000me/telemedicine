<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
   <title> <?= $title ?></title>
   <link rel="shortcut icon" href="<?= base_url('assets/landing/images/logo_kariadi.png') ?>">
   <!-- BEGIN GLOBAL MANDATORY STYLES -->
   <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
   <link href="<?= base_url('assets/') ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
   <link href="<?= base_url('assets/') ?>css/plugins.css" rel="stylesheet" type="text/css" />
   <!-- END GLOBAL MANDATORY STYLES -->
   <!--  BEGIN CUSTOM STYLE FILE  -->
   <link href="<?= base_url('assets/') ?>css/users/user-profile.css" rel="stylesheet" type="text/css" />
   <!--  END CUSTOM STYLE FILE  -->
</head>

<body class="sidebar-noneoverflow">
   <!--  BEGIN NAVBAR  -->
   <?php $this->load->view('layouts/topbar'); ?>
   <!--  END NAVBAR  -->

   <!--  BEGIN MAIN CONTAINER  -->
   <div class="main-container" id="container">

      <div class="overlay"></div>
      <div class="cs-overlay"></div>
      <div class="search-overlay"></div>

      <!--  BEGIN SIDEBAR  -->
      <?php $this->load->view('layouts/sidebar'); ?>
      <!--  END SIDEBAR  -->

      <!--  BEGIN CONTENT AREA  -->
      <div id="content" class="main-content">

         <div class="layout-px-spacing">

            <div class="row layout-spacing">

               <!-- Content -->
               <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">

                  <?= $this->session->flashdata('notif'); ?>
                  <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert"> ', '  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button> </div>'); ?>
                  <?php $this->load->view($_view); ?>

               </div>

               <!-- <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">

                  <div class="skills layout-spacing ">
                     <div class="widget-content widget-content-area">
                        <h3 class="">Skills</h3>
                        <div class="progress br-30">
                           <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-title"><span>PHP</span> <span>25%</span> </div>
                           </div>
                        </div>
                        <div class="progress br-30">
                           <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-title"><span>Wordpress</span> <span>50%</span> </div>
                           </div>
                        </div>
                        <div class="progress br-30">
                           <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-title"><span>Javascript</span> <span>70%</span> </div>
                           </div>
                        </div>
                        <div class="progress br-30">
                           <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-title"><span>jQuery</span> <span>60%</span> </div>
                           </div>
                        </div>

                     </div>
                  </div>

                  <div class="bio layout-spacing ">
                     <div class="widget-content widget-content-area">
                        <h3 class="">Bio</h3>
                        <p>I'm Web Developer from California. I code and design websites worldwide. Mauris varius tellus vitae tristique sagittis. Sed aliquet, est nec auctor aliquet, orci ex vestibulum ex, non pharetra lacus erat ac nulla.</p>

                        <p>Sed vulputate, ligula eget mollis auctor, lectus elit feugiat urna, eget euismod turpis lectus sed ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc ut velit finibus, scelerisque sapien vitae, pharetra est. Nunc accumsan ligula vehicula scelerisque vulputate.</p>

                        <div class="bio-skill-box">

                           <div class="row">

                              <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">

                                 <div class="d-flex b-skills">
                                    <div>
                                    </div>
                                    <div class="">
                                       <h5>Sass Applications</h5>
                                       <p>Duis aute irure dolor in reprehenderit in voluptate velit esse eu fugiat nulla pariatur.</p>
                                    </div>
                                 </div>

                              </div>

                              <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">

                                 <div class="d-flex b-skills">
                                    <div>
                                    </div>
                                    <div class="">
                                       <h5>Github Countributer</h5>
                                       <p>Ut enim ad minim veniam, quis nostrud exercitation aliquip ex ea commodo consequat.</p>
                                    </div>
                                 </div>

                              </div>

                              <div class="col-12 col-xl-6 col-lg-12 mb-xl-0 mb-5 ">

                                 <div class="d-flex b-skills">
                                    <div>
                                    </div>
                                    <div class="">
                                       <h5>Photograhpy</h5>
                                       <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia anim id est laborum.</p>
                                    </div>
                                 </div>

                              </div>

                              <div class="col-12 col-xl-6 col-lg-12 mb-xl-0 mb-0 ">

                                 <div class="d-flex b-skills">
                                    <div>
                                    </div>
                                    <div class="">
                                       <h5>Mobile Apps</h5>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do et dolore magna aliqua.</p>
                                    </div>
                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>
                  </div>

               </div> -->

            </div>
         </div>
         <div class="footer-wrapper">
            <div class="footer-section f-section-1">
               <p class="">Copyright &copy; RSUP Dr. Kariadi 2020 Support by <a href="https://www.codavlo.com">Codavlo Indonesia</a></p>
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
   <script src="<?= base_url('assets/') ?>js/libs/jquery-3.1.1.min.js"></script>
   <script src="<?= base_url('assets/') ?>bootstrap/js/popper.min.js"></script>
   <script src="<?= base_url('assets/') ?>bootstrap/js/bootstrap.min.js"></script>
   <script src="<?= base_url('assets/') ?>plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
   <script src="<?= base_url('assets/') ?>js/app.js"></script>
   <script src="<?= base_url('assets/') ?>js/custom.js"></script>

   <script>
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