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
                <a href="<?php echo base_url()?>admin/add_sekolah" ><button class="btn ripple-infinite btn-3d btn-success">
              <div><i class="fa fa-plus"></i>
               <span>Tambah</span>
              </div>
              </button>
              </a> 
              <a href="<?php echo base_url()?>Laporan" ><button class="btn ripple-infinite btn-3d btn-success">
              <div><i class="fa fa-print"></i>
                <span>Print Pdf</span>
              </div>
              </button>
              </a> 
              </div>
            </div>
            <br> <br> <br>
              <h3 class="box-title">Data Sekolah</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Sekolah</th>
                  <th>No Gudep</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  $no = 1;
                  if($sekolah!=null){
                    foreach($sekolah as $d){                  
                  ?>
                <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $d->nama?></td>
                    <td><?php echo $d->no_gudep?></td>
                    <td><?php echo $d->alamat?></td>
                    <td style="text-align: center;">
                    <a class='btn btn-Danger btn-xs' href="<?php echo base_url('admin/editSekolah/'.$d->id);?>" class="">
                    <i class="glyphicon glyphicon-edit"></i></a>
                    <a class='btn btn-Danger btn-xs' href="<?php echo base_url('admin/deleteSekolah/'.$d->id);?>" 
                    onclick= "functionDelete ('<?php echo base_url('admin/deleteSekolah/' .$d->id);?>')">
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
