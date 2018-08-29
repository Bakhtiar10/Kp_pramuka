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
              <h3 class="box-title">Data Penghargaan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>No</th>
                <th>Jenis Penghargaan</th>
                <th>Tanggal Penghargaan</th>
                <th>Foto Penghargaan</th>
                <th>Keterangan Penghargaan</th>

                </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  if($penghargaan!=null){
                    foreach($penghargaan as $d){
                  ?>
                <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $d->jenis_penghargaan?></td>
                    <td><?php echo $d->tanggal?></td>
                    <td><img style="width: 50px;" src='<?= base_url().'uploads/'.$d->foto?>'></td>
                    <td><?php echo $d->keterangan?></td>
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
