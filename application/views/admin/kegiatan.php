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
            <td>
            <div class="col-md-6">
              <a href="<?php echo base_url()?>admin/add_kegiatan" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
            </div>
            </td>
            <br> <br> <br>
              <h1 class="box-title">Program Gerakan Pramuka Indonesia</h1>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kegiatan</th>
                  <th>Tanggal </th>
                  <th>Gambar</th>
                  <th>Keterangan </th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  $no = 1;
                  if($kegiatan!=null){
                    foreach($kegiatan as $d){                  
                  ?>
                <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $d->nama_kegiatan?></td>
                    <td><?php echo $d->tgl_kegiatan?></td>
                    <td><img style="width: 50px;" src='<?= base_url().'uploads/'.$d->foto?>'></td>
                    <td><?php echo $d->keterangan?></td>
                    <td style="text-align: center;">
                    <a class='btn btn-Danger btn-xs' href="<?php echo base_url('admin/editKegiatan/'.$d->id_kegiatan);?>" class="">
                    <i class="glyphicon glyphicon-edit"></i></a>
                    <a class='btn btn-Danger btn-xs' href="<?php echo base_url('admin/deleteKegiatan/'.$d->id_kegiatan);?>" 
                    onclick= "functionDelete ('<?php echo base_url('admin/deleteKegiatan/' .$d->id_kegiatan);?>')">
                    <i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
                <?php }
                    } else { ?>
                 <td class="text-center" colspan="9"><i>Tidak Ada Data</i></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            </div>
            </div>
            </div>
          </div>
          </section>
          <!-- /.box -->
          </div>
  <!-- /.content-wrapper -->
