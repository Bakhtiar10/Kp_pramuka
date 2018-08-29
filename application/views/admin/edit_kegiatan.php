<div class="content-wrapper">
<!-- Main content -->
<section class="content container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <h3 class="animated fadeInleft">Edit Data Kegiatan</h3>
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
                'name'=>'editKegiatan',
                'class'=>'form-horizontal'
                );
              echo form_open('admin/editKegiatan/'.$kegiatan->id_kegiatan,$name);
            ?>
                <div class="panel-body" style="padding-bottom:30px;">
                <div class="col-md-12">
                <div class="form-group">
                  <label class="">Nama Kegiatan </label>
                    <input type="text" name="nama_kegiatan" id="nama_kegiatan" class="form-control" value="<?php echo $kegiatan->nama_kegiatan;?>">
                    <?php echo form_error('nama_kegiatan');?>
                </div>
                </div>

                <div class="form-group">
                <div class="col-md-12">
                  <label class="">Tanggal Kegiatan</label>
                    <input type="date" name="tgl_kegiatan" id="tgl_kegiatan" class="form-control" value="<?php echo $kegiatan->tgl_kegiatan;?>">
                    <?php echo form_error('tgl_kegiatan');?>
                </div>
                </div>

                <div class="form-group">
                <div class="col-md-12">
                  <label class="">Keterangan</label>
                    <input type="text" name="keterangan" id="keterangan" class="form-control" value="<?php echo $kegiatan->keterangan;?>">
                    <?php echo form_error('keterangan');?>
                </div>
                </div>
              <!-- /.box-body -->

              <div class="form-group">
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                  <a href="<?php echo base_url()?>admin/kegiatan"; 
                  <i class="btn btn-primary"></i> Kembali</a>
              </div>
            </form>
            </div>
            </div>
          </div>
          </section>
          </div>
          <!-- /.box -->
        