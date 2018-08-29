<?php
  foreach($golongan as $data) {
  $gol_pramuka[] = $data->gol_pramuka;
  $jumlah_gol[] =  $data->jumlah_gol; }
?>

<?php
  foreach($pendidikan as $data) {
  $tingkat_pendidikan[] = $data->tingkat_pendidikan;
  $jumlah_pendidikan[] =  $data->jumlah_pendidikan; }
?>

<?php
  foreach($jeniskelamin as $data) {
  $jenis_kelamin[] = $data->jenis_kelamin;
  $jumlah_jk[] =  $data->jumlah_jk; }
?>

<?php
  foreach($Data as $data) {
  $agama[] = $data->agama;
  $jumlah_agama[] =  $data->jumlah_agama; }
?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Grafik
    <small>Data</small>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-6">
      <!-- AREA CHART -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Golongan Pramuka</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="chart">
            <canvas id="canvas" style="height:250px"></canvas>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->


      <!-- DONUT CHART -->

      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">Sekolah</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <canvas id="canvas1" style="height:250px"></canvas>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </div>
    <!-- /.col (LEFT) -->
    <div class="col-md-6">
      <!-- LINE CHART -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Agama</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="chart">
            <canvas id="canvas2" style="height:250px"></canvas>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

      <!-- BAR CHART -->
      <div class="col-md-12">
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Jenis Kelamin</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="chart">
            <canvas id="canvas3" style="height:250px"></canvas>
          </div>
        </div>

        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </div>
    <!-- /.col (RIGHT) -->
  </div>
  <!-- /.row -->

</section>
<!-- /.content -->
</div>

</body> -->
<script src="<?php echo base_url()?>asset/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url()?>asset/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url()?>asset/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url()?>asset/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url()?>asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url()?>asset/bower_components/chart.js/Chart.js"></script>
<script src="<?php echo base_url()?>asset/bower_components/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url()?>asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>asset/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>asset/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()?>asset/dist/js/pages/dashboard.js"></script>
<script src="<?php echo base_url()?>asset/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>asset/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url()?>asset/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


<script>
var lineChartData = {
            labels : <?php echo json_encode($gol_pramuka);?>,
            datasets : [

                {
                    fillColor: "rgba(60,141,188,0.9)",
                    strokeColor: "rgba(60,141,188,0.8)",
                    pointColor: "#3b8bba",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(152,235,239,1)",
                    data : <?php echo json_encode($jumlah_gol);?>
                }

            ]

        }

    var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);

</script>

<script>
var lineChartData = {
            labels : <?php echo json_encode($tingkat_pendidikan);?>,
            datasets : [

                {
                    fillColor: "rgba(60,141,188,0.9)",
                    strokeColor: "rgba(60,141,188,0.8)",
                    pointColor: "#3b8bba",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(152,235,239,1)",
                    data : <?php echo json_encode($jumlah_pendidikan);?>
                }

            ]

        }

    var myLine = new Chart(document.getElementById("canvas1").getContext("2d")).Line(lineChartData);

</script>

<script>
var lineChartData = {
            labels : <?php echo json_encode($agama);?>,
            datasets : [

                {
                  fillColor: "rgba(60,141,188,0.9)",
                    strokeColor: "rgba(60,141,188,0.8)",
                    pointColor: "#3b8bba",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(152,235,239,1)",
                    data : <?php echo json_encode($jumlah_agama);?>
                }

            ]

        }

    var myLine = new Chart(document.getElementById("canvas2").getContext("2d")).Line(lineChartData);

</script>


<script>
var lineChartData = {
            labels : <?php echo json_encode($jenis_kelamin);?>,
            datasets : [

                {
                    fillColor: "rgba(60,141,188,0.9)",
                    strokeColor: "rgba(60,141,188,0.8)",
                    pointColor: "#3b8bba",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(152,235,239,1)",
                    data : <?php echo json_encode($jumlah_jk);?>
                }

            ]

        }

    var myLine = new Chart(document.getElementById("canvas3").getContext("2d")).Line(lineChartData);

</script>

