<div class="content-wrapper">
<!-- Main content -->
<section class="content container-fluid">
      <div class="row">
        <!-- left column -->
          <!-- general form elements -->
            <!-- form start -->
              <div class="box-body">
                <div class="form-group">
                <?php if($this->session->flashdata('info')){ ?>
                <div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $this->session->flashdata('info'); ?>
                </div>
            <?php } ?>
                  </div>
              </div>
              <div class="col-md-12">
              <div class="box box-primary">
              
                <div class="box-header">
                <div class="col-md-12">
                <h3 class="animated fadeInleft">Data Upload</h3>
                    <table id="datatables-example" class="table table-striped table-bordered" width="90%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Anggota</th>
                          <th>Nama Kegiatan</th>
                          <th>Tanggal</th>
                          <th>Gambar</th>
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
                          <td><?php echo $d->nama?></td>
                          <td><?php echo $d->nama_kegiatan?></td>
                          <td><?php echo $d->tgl_kegiatan?></td>
                          <td><img style="width: 100px;" src='<?= base_url().'uploads/'.$d->foto ?>'></td>
                            <td style="text-align: center;">
                          <a class='btn ripple-infinite btn-round btn-edit' href="<?php echo base_url('admin/editKegiatan/'.$d->id_kegiatan);?>"  class=""><i class="glyphicon glyphicon-edit"></i> </a>
                         <a class='btn ripple-infinite btn-round btn-delete' href="<?php echo base_url('admin/deleteKegiatan/'.$d->id_kegiatan);?>" onclick=""><i class="glyphicon glyphicon-trash"></i> </a> 
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
            </div>
          <!-- end: content -->