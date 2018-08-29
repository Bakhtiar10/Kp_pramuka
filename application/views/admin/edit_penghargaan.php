<div class="content-wrapper">
<!-- Main content -->
<section class="content container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <h3 class="animated fadeInleft">Edit Data Pengharagaan</h3>
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
                'name'=>'editPenghargaan',
                'class'=>'form-horizontal'
                );
              echo form_open('admin/editPenghargaan/'.$penghargaan->id,$name);
            ?>
                <div class="panel-body" style="padding-bottom:30px;">
                <div class="col-md-12">
                <div class="form-group">
                  <label class="">Jenis Penghargaan </label>
                    <input type="text" name="jenis_penghargaan" id="jenis_penghargaan" class="form-control" value="<?php echo $penghargaan->jenis_penghargaan;?>">
                    <?php echo form_error('jenis_penghargaan');?>
                </div>
                </div>

                <div class="form-group">
                <div class="col-md-12">
                  <label class="">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?php echo $penghargaan->tanggal;?>">
                    <?php echo form_error('tanggal');?>
                </div>
                </div>

                <div class="form-group">
                <div class="col-md-12">
                  <label class="">Keterangan</label>
                    <input type="text" name="keterangan" id="keterangan" class="form-control" value="<?php echo $penghargaan->keterangan;?>">
                    <?php echo form_error('keterangan');?>
                </div>
                </div>
              <!-- /.box-body -->

              <div class="form-group">
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                  <a href="<?php echo base_url()?>admin/penghargaan"; 
                  <i class="btn btn-primary"></i> Kembali</a>
              </div>
            </form>
            </div>
            </div>
          </div>
          </section>
          </div>
          <!-- /.box -->
        