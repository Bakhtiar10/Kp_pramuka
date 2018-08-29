<div class="content-wrapper">
<!-- Main content -->
<section class="content container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <h3 class="animated fadeInleft">Edit Profile</h3>
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
                'name'=>'editProfile',
                'class'=>'form-horizontal'
                );
              echo form_open('user/editProfile/'.$anggota->id_anggota,$name);
            ?>
                <div class="panel-body" style="padding-bottom:30px;">
                <div class="col-md-12">
                <div class="form-group">
                  <label class="">Nama </label>
                    <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $anggota->nama;?>">
                    <?php echo form_error('nama');?>
                </div>
                </div>

                <div class="form-group">
                <div class="col-md-12">
                  <label class="">Username</label>
                    <input type="text" name="username" id="username" class="form-control" value="<?php echo $anggota->username;?>">
                    <?php echo form_error('username');?>
                </div>
                </div>

                <div class="form-group">
                <div class="col-md-12">
                  <label class="">Sekolah</label>
                    <input type="text" name="id" id="id" class="form-control" value="<?php echo $anggota->id_anggota;?>">
                    <?php echo form_error('id');?>
                </div>
                </div>

                <div class="form-group">
                <div class="col-md-12">
                  <label class="">Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control" value="<?php echo $anggota->jenis_kelamin;?>">
                    <?php echo form_error('jenis_kelamin');?>
                </div>
                </div>

                <div class="form-group">
                <div class="col-sm-12 padding-0">
                <label for="">Agama</label> <br>
                    <input type="radio" name="agama" value="Islam" id="agama"> Islam
                         <?php echo form_error('Islam');?> &nbsp; &nbsp;
                     <input type="radio" name="agama" value="Kristen" id="agama"> Kristen
                         <?php echo form_error('Kristen');?> &nbsp; &nbsp;
                      <input type="radio" name="agama" value="Budha" id="agama"> Budha
                        <?php echo form_error('Budha');?> &nbsp; &nbsp;
                      <input type="radio" name="agama" value="Hindu" id="agama"> Hindu
                        <?php echo form_error('Hindu');?> &nbsp; &nbsp;
                      <input type="radio" name="agama" value="Katholik" id="agama"> Katholik
                        <?php echo form_error('Katholik');?> &nbsp; &nbsp;
                </div>
                </div>

                <div class="form-group">
                <div class="col-md-12">
                    <label class="">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" id="tgl_lahir" value="<?php echo $anggota->tgl_lahir;?>" class="form-control">
                     <?php echo form_error('tgl_lahir');?>
                </div>
                </div>
               

                <div class="form-group">
                <div class="col-md-12">
                  <label class="">Gol Darah</label>
                    <input type="text" name="gol_darah" id="gol_darah" class="form-control" value="<?php echo $anggota->gol_darah;?>">
                    <?php echo form_error('gol_darah');?>
                </div>
                </div>

                <div class="form-group">
                <div class="col-md-12">
                    <label class="">Password</label>
                    <input type="text" name="password" value="<?php echo $anggota->password;?>" id="password" class="form-control">
                    <?php echo form_error('password');?>
                </div>
                </div>

                <div class="form-group">
                <div class="col-md-12">
                    <label class="">Level</label>
                    <input type="text" name="level" value="<?php echo $anggota->level;?>" id="level" class="form-control">
                 <?php echo form_error('level');?>
                </div>
                </div>
              
               
                <div class="form-group">
                <div class="col-md-12">
                    <label class="">Alamat</label>
                    <input type="text" name="alamat" value="<?php echo $anggota->alamat;?>" id="alamat" class="form-control">
                    <?php echo form_error('alamat');?>
                </div>
                </div>

                <div class="form-group">
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                  <a href="<?php echo base_url()?>User/edit_profile"; 
                  <i class="btn btn-primary"></i> Kembali</a>
                </div>
              <!-- /.box-body -->

                
              </div>
            <?php }?>
            </form>
            </div>
            </div>
          </div>
          </section>
          </div>
          <!-- /.box -->
        