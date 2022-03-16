

  <!-- Main Footer -->
  <footer class="main-footer" style="background-color: #2c3e50;">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      DNG
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2022 <span class="text-white">Internacional da Graça / Piedade II</span></strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js'); ?>"></script>
<!--jQuery Mask -->
<script src="<?php echo base_url('assets/jQueryMask/jquery.mask.min.js'); ?>"></script>
<!--Select2 Lib -->
<script src="<?php echo base_url('assets/select2/select2.min.js"'); ?>"></script>
<!-- extra -->
<script src="<?php echo base_url('assets/extras/extras_welcome.js'); ?>">></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="assets/dist/js/demo.js"></script> -->
<script>
$(document).ready(function(){
  $('#telefone').mask('(00) 00000-0000');
});

$(document).ready(function() {
    $('#profissao').select2();
});
</script>
</body>
</html>
