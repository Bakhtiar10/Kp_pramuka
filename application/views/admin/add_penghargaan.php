<div class="content-wrapper">
<!-- Main content -->
<section class="content container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <h3 class="animated fadeInLeft">Tambah Data Penghargaan</h3>
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- form start -->
            
            <?php
                $name = array(
                  'name'=>'addData',
                  'class'=>'form-horizontal'
                );
                echo form_open_multipart('admin/addPenghargaan/',$name);
            ?>
                 <div class="box-body">
                 <div class="form-group">
                 <div class="col-md-12">
                 <label class="">Jenis Penghargaan</label>
                 <input type="text" name="jenis_penghargaan" class="form-control">
                 </div>
                 </div>

                 <div class="form-group">
                <div class="col-md-12">
                  <label class="">Gambar</label>
                    <input type="file" name="foto" class="form-control"> 
                </div>
                </div>
                 <!-- select -->
                 <div class="form-group">
                 <div class="col-md-12">
                 <label class="">Tanggal </label>
                   <input type="date" name="tanggal" class="form-control"> 
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
                <a href="<?php echo base_url('admin/penghargaan');?>" class="btn btn-primary"> Kembali</a>
            </div>
          </form>
          </div>
          </div>
        </div>
        </section>
        </div>
        <!-- /.box -->
        