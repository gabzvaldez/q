  </div>
  <!-- /.container-fluid -->

</div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Department of Health Center for Health - Northern Mindanao | Information and Communications Technology Unit</span>
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
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url(); ?>main/logout">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/sbadmin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Bootstrap core JavaScript-->
  <!-- <script src="<?php echo base_url(); ?>assets/sbadmin/vendor/jquery/jquery.min.js"></script> -->
  <script src="<?php echo base_url(); ?>assets/bower_components/jquery-3.4.1.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>assets/sbadmin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>assets/sbadmin/js/sb-admin-2.min.js"></script>

  <!-- jQuery DataTables -->
  <!-- <script src="<?php echo base_url('assets/js/jquery.dataTables.min.js');?>"></script> -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bower_components/dt/jquery.dataTables.min.css');?>">
  <script src="<?php echo base_url('assets/bower_components/dt/jquery.dataTables.min.js');?>"></script>

  <!-- Angular Components -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/angular.js"></script>

   <!-- Angular JS Scripts -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/app.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/directives.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/controllers.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/services.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/routes.js'); ?>"></script>

  <script>
      document.getElementById("btnPrint").onclick = function () {
      printElement(document.getElementById("printThis"));
      // window.print();

   }

  function printElement(elem) {
      var domClone = elem.cloneNode(true);
      
      var $printSection = document.getElementById("printSection");
      
      if (!$printSection) {
          var $printSection = document.createElement("div");
          $printSection.id = "printSection";
          document.body.appendChild($printSection);
      }
      
      $printSection.innerHTML = "";
      $printSection.appendChild(domClone);
      window.print();
  }
  </script>

</body>

</html>