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
              <br>
              <h3 class="box-title">Data Kegiatan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>No</th>
                <th>Nama Kegiatan</th>
                <th>Tanggal Kegiatan</th>
                <th>Foto Kegiatan</th>
                <th>Keterangan Kegiatan</th>

                </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  if($kegiatan!=null){
                    foreach($kegiatan as $d){
                  ?>
                <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $d->nama_kegiatan?></td>
                    <td><?php echo $d->tgl_kegiatan?></td>
                    <td><img style="width: 50px;" src='<?= base_url().'uploads/'.$d->foto?>'></td>
                    <td><?php echo $d->keterangan?></td>
                  <td style="text-align: center;">
                  </td>
                </tr>
              <?php }
                  } else { ?>
               <td class="text-center" colspan="9"><i>Tidak Ada Data</i></td>
                  </tr>
                <?php } ?>

                </tfoot>
              </table>
            </div>
            </div>
            </div>
          </div>
          </section>
          <section class="content container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
        <h3 class="animated fadeInLeft">Upload Kegiatan</h3>
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- form start -->
            
            <?php
                $name = array(
                  'name'=>'addData',
                  'class'=>'form-horizontal'
                );
                echo form_open_multipart('User/addKegiatan/',$name);
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
              </div>
              
            </div>
            </div>
          </div>
          </section>
          </div>


        
