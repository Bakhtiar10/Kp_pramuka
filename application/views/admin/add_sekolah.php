<div class="content-wrapper">
<!-- Main content -->
<section class="content container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <h3 class="animated fadeInleft">Tambah Data sekolah</h3>
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- form start -->
            <form role="form" action="<?php echo base_url()?>admin/addSekolah" method="post">
          
              <div class="box-body">
                <div class="form-group">
                <?php if($this->session->flashdata('info')){ ?>
                <div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $this->session->flashdata('info'); ?>
                </div>
            <?php } ?>
                 
                <div class="form-group">
                  <label for="nama">Nama Sekolah</label>
                  <input type="text" class="form-control" name="nama" placeholder="Masukan Sekolah">
                </div>

                <div class="form-group">
                  <label for="no gudep">No Gudep</label>
                  <input type="text" class="form-control" name="no_gudep" placeholder="Masukan No">
                </div>

                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat">
                </div>
             
              <!-- /.box-body -->

              <div class="form-group">
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                  <a href="<?php echo base_url('admin/data_sekolah');?>" class="btn btn-primary"> Kembali</a>
              </div>
            </form>
            </div>
            </div>
          </div>
          </section>
          </div>
          <!-- /.box -->
        