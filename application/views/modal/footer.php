

  <footer class="main-footer" style="background-color: #2c3e50;">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      DNG
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2022 <span class="text-white">Internacional da Graça / Piedade II</span></strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js'); ?>"></script>
<!--jQuery Mask -->
<script src="<?php echo base_url('assets/jQueryMask/jquery.mask.min.js'); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('assets/chart.js/Chart.min.js'); ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/jszip/jszip.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/pdfmake/pdfmake.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/pdfmake/vfs_fonts.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>
<!-- extra code -->
<script src="<?php echo base_url('assets/extras/extras.js'); ?>">></script>
<script>
$(document).ready(function(){
  $('#telefone').mask('(00) 00000-0000');
});
</script>


<?php
if(isset($chart_currentYear )) {


/* começo ano corrente */
$result2=array();
$ano2="";
foreach ($chart_currentYear as $value) {
  $ano2= $value->year;
  $result2[$value->month] = $value->quantidade;
}
$dataset2=array();
for ($i=1; $i < 13; $i++) {
  if(isset($result2[$i])){
    array_push($dataset2, $result2[$i]);
  } else {
    array_push($dataset2, 0);
  }
}
$dataset2 = implode(",", $dataset2);
/* fim ano corrente */

?>
    <script>
      $(function () {
        
        ctx = document.getElementById('barChart');
        var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Mario', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
          datasets: [{
              label: '# of Votes',
              data: [<?php echo $dataset2; ?>],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 4
          }]
        },
        options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true
                  }
              }]
          },
          layout: {
            
          }
        }
        });
      });
    </script>
    <?php
}
    ?>
</body>
</html>
