<div class="content-wrapper">
<!-- Main content -->
<section class="content container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <h3 class="animated fadeInLeft">Tambah Data Kegiatan</h3>
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- form start -->
            
            <?php
                $name = array(
                  'name'=>'addData',
                  'class'=>'form-horizontal'
                );
                echo form_open_multipart('admin/addKegiatan/',$name);
            ?>
             <div class="panel-body" style="padding-bottom:30px;">
             <div class="col-md-12">
               <div class="form-group">
               <label class="">Nama Kegiatan</label> <br>
                 <input type="text" name="nama_kegiatan" class="form-control">
                 </div>
               </div>
                <!-- select -->
                <div class="form-group">
                <div class="col-md-12">
                  <label class="">Tanggal </label>
                    <input type="date" name="tgl_kegiatan" class="form-control">
                </div>
                </div>

                <div class="form-group">
                <div class="col-md-12">
                  <label class="">Gambar</label>
                    <input type="file" name="foto" class="form-control">
                </div>
                </div>

                <div class="form-group">
                <div class="col-md-12">
                  <label class="">Keterangan </label>
                    <input type="text" name="keterangan" class="form-control">
                </div>
                </div>
                
                <div class="form-group">
                  <label class="col-md-1 control-label text-right"></label>
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                  <a href="<?php echo base_url('admin/kegiatan');?>" class="btn btn-primary"> Kembali</a>
              </div>
              
            </div>
            </div>
          </div>
          </section>
          </div>
          <!-- /.box -->
        