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
              <a href="<?php echo base_url()?>admin/add_penghargaan" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
            </div>
            </td>
            <br> <br> <br>
              <h1 class="box-title">Penghargaan Pramuka Indonesia</h1>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Jenis Penghargaan</th>
                  <th>Gambar</th>
                  <th>Tanggal </th>
                  <th>Keterangan </th>
                  <th>Aksi</th>
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
                    <td><img style="width: 50px;" src='<?= base_url().'uploads/'.$d->foto?>'></td>
                    <td><?php echo $d->tanggal?></td>
                    <td><?php echo $d->keterangan?></td>
                    <td style="text-align: center;">
                    <a class='btn btn-Danger btn-xs' href="<?php echo base_url('admin/editPenghargaan/'.$d->id);?>" class="">
                    <i class="glyphicon glyphicon-edit"></i></a>
                    <a class='btn btn-Danger btn-xs' href="<?php echo base_url('admin/deletePenghargaan/'.$d->id);?>" 
                    onclick= "functionDelete ('<?php echo base_url('admin/deletePenghargaan/' .$d->id);?>')">
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
          </section>
          <!-- /.box -->
          </div>
  <!-- /.content-wrapper -->
