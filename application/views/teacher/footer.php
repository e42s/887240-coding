



</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('theme/plugins/jQuery/jquery-2.2.3.min.js');?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('theme/bootstrap/js/bootstrap.min.js');?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('theme/plugins/fastclick/fastclick.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('theme/dist/js/app.min.js');?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('theme/plugins/sparkline/jquery.sparkline.min.js');?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('theme/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');?>"></script>
<script src="<?php echo base_url('theme/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');?>"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url('theme/plugins/slimScroll/jquery.slimscroll.min.js');?>"></script>
<!-- ChartJS 1.0.1 -->
<script src="<?php echo base_url('theme/plugins/chartjs/Chart.min.js');?>"></script>

<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>

<script src="<?php echo base_url('theme/plugins/datepicker/bootstrap-datepicker.js');?>"></script>
<link rel="stylesheet" href="<?php echo base_url('theme/plugins/datepicker/datepicker3.css');?>">

<script src="<?php echo base_url('theme/plugins/daterangepicker/daterangepicker.js');?>"></script>
<link rel="stylesheet" href="<?php echo base_url('theme/plugins/daterangepicker/daterangepicker.css');?>">
<script src="<?php echo base_url('theme/plugins/datatables/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('theme/plugins/datatables/dataTables.bootstrap.min.js');?>"></script>
<script>
  $(function () {
    $('#date').daterangepicker();
    $('#selectDate').datepicker({
      autoclose: true
    });    

    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>


<!--pnotify-->
<script src="<?php echo base_url('theme/plugins/pnotify/pnotify.custom.min.js');?>"></script>

<!--custom js-->
<script src="<?php echo base_url('theme/dist/js/system.teacher.js');?>"></script>

</body>
</html>
