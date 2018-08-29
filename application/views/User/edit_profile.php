<div class="content-wrapper">
<!-- Main content -->
<section class="content container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <h3 class="animated fadeInleft">Edit Data Anggota</h3>
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
           
            <form action="<?php echo base_url()?>user/editProfile" method="post">
              <?php foreach($anggota as $anggota){?>

             <div class="panel-body" style="padding-bottom:30px;">
              <div class="col-md-12">
              <div class="form-group">
                <label class="col-sm-2 control-label text-right">Nama Lengkap</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $anggota->nama;?>"  name="nama"  id="nama" disabled>
                  </div>

                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" value="<?php echo $anggota->username;?>" name="username"  id="username">
                    <?php echo form_error('username');?>
                </div>

                <div class="form-group">
                  <label for="">password</label>
                  <input type="password" class="form-control" value="<?php echo $anggota->password;?>" name="password"  id="password">
                  <?php echo form_error('password');?>
                </div>
        
              <div class="form-group">
                  <a href="<?php echo base_url('User/form_edit/'.$anggota->id_anggota);?>"><i class="glyphicon glyphicon-edit"></i> Edit</a> 
              </div>
            
            </form>
            </div>
            </div>
          </div>
          </section>
          </div>
          <!-- /.box -->
        