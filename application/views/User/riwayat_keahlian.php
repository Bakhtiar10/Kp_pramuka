<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
          <div class="box">
            <div class="box-header">
              <br>
              <h3 class="box-title">Data Keahlian</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>No</th>
                <th>Nama Keahlian</th>
                <th>Foto Keahlian</th>
                <th>Keterangan</th>

              </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                if($keahlian!=null){
                  foreach($keahlian as $k){
                ?>
              <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $k->nama?></td>
                    <td><?php echo $k->foto?></td>
                    <td><?php echo $k->ket?></td>
                  <td style="text-align: center;">
                  </td>
                </tr>
              <?php }
                  } else { ?>
               <td class="text-center" colspan="9"><i>Tidak Ada Data</i></td>
                  </tr>
                <?php } ?>

                </tfoot>
              </table>
            </div>
            </div>
            </div>
          </div>
          </section>
          <!-- /.box -->
          </div>
  <!-- /.content-wrapper -->
