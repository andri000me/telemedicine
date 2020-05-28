<!-- Bootstrap core JavaScript-->
<script src="<?= baseurl ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= baseurl ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?= baseurl ?>vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?= baseurl ?>js/admin_script.js"></script>
<!-- Page level plugins -->
<script src="<?= baseurl ?>vendor/chart.js/Chart.min.js"></script>
  <!-- Page level plugins -->
  <script src="<?= baseurl ?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= baseurl ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script >
      // Call the dataTables jQuery plugin
      $(document).ready(function() {
  $('#dataTable').DataTable();
});

  </script>

</body>
</html>