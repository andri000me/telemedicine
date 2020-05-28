<!doctype html>
<html lang="en">
<head>
   <title> <?= $title ?></title>
   <!-- Required meta tags -->
   <meta charset="utf-8">

   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta description="" >
   <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/LOGO_kariadi.jpg/200px-LOGO_kariadi.jpg">
   <!-- Custom fonts for this template -->
   <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"rel="stylesheet">
   <!-- Custom styles for this template-->
   <link href="<?= base_url() ?>assets/css/sb-admin-2.css" rel="stylesheet">
   <link href="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>
   <!-- Page Wrapper -->
   <div id="wrapper">
      <!-- Sidebar -->
      <?php $this->load->view('layouts/sidebar');?>
      <!-- End of Sidebar -->
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
         <!-- Main Content -->
         <div id="content">
            <!-- Topbar -->
            <?php  $this->load->view('layouts/topbar'); ?>
            <!-- End of Topbar -->
            <!-- Begin Page Content -->
            <div class="container-fluid">
               <?= $this->session->flashdata('notif'); ?>
               <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert"> ', '  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button> </div>'); ?>
               <?php $this->load->view($_view); ?>
            </div>
            <!-- /.container-fluid -->
         </div>
         <!-- End of Main Content -->
         <!-- Footer -->
         <footer class="sticky-footer bg-white">
            <div class="container my-auto">
               <div class="copyright text-center my-auto">
                  <span>Copyright &copy; RSUP Dr. Kariadi 2020 Support by <a href="https://www.codavlo.com">Codavlo Indonesia</a></span>
               </div>
            </div>
         </footer>
         <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
   </div>
   <!-- End of Page Wrapper -->
   <!-- Scroll to Top Button-->
   <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
   </a>
   <!-- Logout Modal-->
   <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
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
   </div>
   <!-- Bootstrap core JavaScript-->
   <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
   <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   <!-- Core plugin JavaScript-->
   <script src="<?= base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
   <!-- Custom scripts for all pages-->
   <script src="<?= base_url() ?>assets/js/sb-admin-2.js"></script>

   <!-- Page level plugins -->
   <script src="<?= base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level plugins -->
      <script src="<?= base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
      <script src="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
      <script src="<?= base_url() ?>assets/js/chart-area.js"></script>
      <script src="<?= base_url() ?>assets/js/chart-pie.js"></script>
      <script src="<?= base_url() ?>assets/js/datatables.js"></script>
<script>
   $('.custom-file-input').on('change', function(){
      let fileName = $(this).val().split('\\').pop();
      $(this).next('.custom-file-label').addClass("selected").html(fileName);
   });
</script>
</body>
</html>