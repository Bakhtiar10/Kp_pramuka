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
            <div>
                <a href="<?php echo base_url()?>admin/add_anggota" ><button class="btn ripple-infinite btn-3d btn-success">
              <div><i class="fa fa-plus"></i>
               <span>Tambah</span>
              </div>
              </button>
              </a> 
              <a href="<?php echo base_url()?>admin/laporan_anggota" ><button class="btn ripple-infinite btn-3d btn-success">
              <div><i class="fa fa-print"></i>
                <span>Print Pdf</span>
              </div>
              </button>
              </a> 
              </div>
            </div>
            <br> <br> <br>
              <h3 class="box-title">Data Anggota</h3>
            </div>
            <!-- /.box-header -->
            <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Agama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Gol Darah</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
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
                        <td><?php echo $d->nama?></td>
                        <td><?php echo $d->agama?></td>
                        <td><?php echo $d->jenis_kelamin?></td>
                        <td><?php echo $d->tgl_lahir?></td>
                        <td><?php echo $d->gol_darah?></td>
                        <td><?php echo $d->alamat?></td>
                            <td style="text-align: center;">
                          <a class='btn ripple-infinite btn-round btn-edit' href="<?php echo base_url('admin/editAnggota/'.$d->id_anggota);?>"  class=""><i class="glyphicon glyphicon-edit"></i> </a>
                         <a class='btn ripple-infinite btn-round btn-delete' href="<?php echo base_url('admin/deleteAnggota/'.$d->id_anggota);?>" onclick="functionDelete('<?php echo base_url('admin/deleteAnggota/'.$d->id_anggota);?>')"><i class="glyphicon glyphicon-trash"></i> </a> 
                      </td>
                        </tr>
                         <?php }
                    } else { ?>
                         <td class="text-center" colspan="9"><i>Tidak Ada Data</i></td>
                    </tr>
                  <?php } ?>
                </tbody>
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
