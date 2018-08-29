<div class="content-wrapper">
<!-- Main content -->
<section class="content container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <h3 class="animated fadeInleft">Edit Data sekolah</h3>
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- form start -->
              <div class="box-body">
                <div class="form-group">
                <?php if($this->session->flashdata('info')){ ?>
                <div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $this->session->flashdata('info'); ?>
                </div>
            <?php } ?>
            <?php 
              $name = array(
                'name'=>'editSekolah',
                'class'=>'form-horizontal'
                );
              echo form_open('admin/editSekolah/'.$sekolah->id,$name);
            ?>
                <div class="form-group">
                  <label for="nama">Nama Sekolah</label>
                  <input type="text" name="nama" id="nama" value="<?php echo $sekolah->nama;?>"
                  class="form-control">
                </div>

                <div class="form-group">
                    <label for="no_gudep">No Gudep</label>
                    <input type="text" name="no_gudep" id="no_gudep" value="<?php echo $sekolah->no_gudep;?>"
                    class="form-control">
                </div>

              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" value="<?php echo $sekolah->alamat;?>"
                class="form-control">
              </div>
             
              <!-- /.box-body -->

              <div class="form-group">
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                  <a href="<?php echo base_url()?>admin/data_sekolah"; 
                  <i class="btn btn-primary"></i> Kembali</a>
              </div>
            </form>
            </div>
            </div>
          </div>
          </section>
          </div>
          <!-- /.box -->
        