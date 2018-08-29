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
            <div class="col-md-6">
              <!-- <a href="<?php echo base_url()?>Admin/user_add" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah Anggota</a> -->
              <a href="#" class="btn btn-sm btn-success"><i class="fa fa-file-pdf-o"></i> Export To Pdf</a>
              <a href="#" class="btn btn-sm btn-success"><i class="fa fa-file-excel-o"></i> Export To Excell</a>
            </div>
            <br> <br> <br>
              <h3 class="box-title">Data Anggota</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Tanggal Lahir</th>
                  <th>Gol Pramuka</th>
                  <th>Agama</th>
                  <th>Tingkat TKK</th>
                  <th>Bidang TKK</th>
                  <th>Jenis Kelamin</th>
                  <th>Gol Darah</th>
                  <th>Alamat</th>
                  <th>Nomor Handphone</th>

                </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  if($anggota!=null){
                    foreach($anggota as $d){
                  ?>
                <tr>
                  <td><?php echo $no++?></td>
                  <td><?php echo $d->nama_anggota?></td>
                  <td><?php echo $d->tgl_lahir?></td>
                  <td><?php echo $d->gol_pramuka?></td>
                  <td><?php echo $d->agama?></td>
                  <td><?php echo $d->tingkat_tkk?></td>
                  <td><?php echo $d->bidang_tkk?></td>
                  <td><?php echo $d->jenis_kelamin?></td>
                  <td><?php echo $d->gol_darah?></td>
                  <td><?php echo $d->alamat?></td>
                  <td><?php echo $d->no_hp?></td>
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
