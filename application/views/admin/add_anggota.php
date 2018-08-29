<div class="content-wrapper">
<!-- Main content -->
<section class="content container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- form start -->
            <form role="form" action="<?php echo base_url()?>admin/addAnggota" method="post">
            <?php
                $name = array(
                  'name'=>'addData',
                  'class'=>'form-horizontal'
                );
            ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
                  <?php echo form_error('nama');?>
                </div>
              
                <div class="form-group">
                  <label for="">Username</label>
                  <input type="text" class="form-control" name="username" placeholder="Masukan Username">
                  <?php echo form_error('username');?>
                </div>
                <!-- select -->
                <div class="form-group">
                  <label for="">Sekolah</label>
                  <input type="text" class="form-control" name="sekolah" placeholder="Masukan Sekolah">
                  <?php echo form_error('sekolah');?>
                </div>

                <div class="form-group">
                  <label for="">Golongan Pramuka</label>
                  <select name="gol_pramuka" class="form-control">
                   <option value="Pramuka Siaga">Pramuka Siaga</option>
                   <option value="Pramuka Penggalang">Pramuka Penggalang</option>
                   <option value="Pramuka Penegak">Pramuka Penegak</option>
                   <option value="Pramuka Pandega">Pramuka Pandega</option>
                  </select>
                </div>

                <!-- select -->
                <div class="form-group">
                  <label for="">Jenis Kelamin</label> <br>
                  <input type="radio" name="jenis_kelamin" value="L"> Laki-Laki
                      <?php echo form_error('jenis_kelamin');?> &nbsp; &nbsp;
                  <input type="radio" name="jenis_kelamin" value="P"> Perempuan
                      <?php echo form_error('jenis_kelamin');?>
                </div>

                <div class="form-group">
                  <label for="">Agama</label> <br>
                  <input type="radio" name="agama" value="Islam"> Islam
                    <?php echo form_error('Islam');?> &nbsp; &nbsp;
                  <input type="radio" name="agama" value="Kristen"> Kristen
                    <?php echo form_error('Kristen');?> &nbsp; &nbsp;
                  <input type="radio" name="agama" value="Katholik"> Katholik
                    <?php echo form_error('Katholik');?> &nbsp; &nbsp;
                  <input type="radio" name="agama" value="Hindu"> Hindu
                    <?php echo form_error('Hindu');?> &nbsp; &nbsp;
                  <input type="radio" name="agama" value="Budha"> Budha
                    <?php echo form_error('Budha');?> &nbsp; &nbsp;
                    <br>
                </div>
                
                <div class="form-group">
                  <label for="">tanggal Lahir</label>
                  <input type="date" class="form-control" name="tgl_lahir" placeholder="">
                  <?php echo form_error('tgl_lahir');?>
                </div>
                </select>
                <!-- select -->
                <div class="form-group">
                  <label for="">Gol Darah</label> <br>
                  <input type="radio" name="gol_darah" value="A"> A
                      <?php echo form_error('A');?> &nbsp; &nbsp;
                  <input type="radio" name="gol_darah" value="B"> B
                      <?php echo form_error('B');?> &nbsp; &nbsp;
                  <input type="radio" name="gol_darah" value="AB"> AB
                      <?php echo form_error('AB');?> &nbsp; &nbsp;
                  <input type="radio" name="gol_darah" value="B"> O
                      <?php echo form_error('O');?> &nbsp; &nbsp;
                </div>

                <div class="form-group">
                  <label for="passsword">Password</label>
                  <input type="text" class="form-control" name="password" placeholder="Masukan Password">
                  <?php echo form_error('password');?>
                </div>

                <div class="form-group">
                  <label for="">Level</label>
                  <select name="level" class="form-control">
                  <option value="admin">admin</option>
                   <option value="user">user</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="">Tingkat Pendidikan</label>
                  <select name="tingkat_pendidikan" class="form-control">
                  <option value="SD">SD</option>
                  <option value="SMP">SMP</option>
                  <option value="SMA">SMA/SMK</option>
                   </select>
                </div>
                
                <div class="form-group">
                <label for="">Alamat</label> <br>
                  <div class="col-md-3">
                    <select name="id_provinsi" id="id_provinsi" class="form-control" data-live-search="true">
                      <option style="margin: 50px;" class="selectpicker form-control">--Pilih Provinsi--</option>
                        <?php foreach($provinsi as $k):?>
                        <option  value="<?php echo $k->id_provinsi;?>"><?php echo $k->nama_provinsi;?></option>
                          <?php endforeach;?>
                             </select>
                </div>  

                <div class="col-md-3">
                  <select name="id_kabupaten" id="id_kabupaten" class="form-control" data-live-search="true">
                    <option style="margin: 50px;" class="selectpicker form-control">--Pilih Kabupaten--</option>
                      <?php foreach($kabupaten as $k):?>
                    <option  value="<?php echo $k->id_kabupaten;?>"><?php echo $k->nama_kabupaten;?></option>
                      <?php endforeach;?>
                  </select> 
                </div>
                 
                <div class="col-md-3">
                    <select name="id_kecamatan" id="id_kecamatan" class="form-control" data-live-search="true">
                      <option style="margin: 50px;" class="selectpicker form-control">--Pilih Kecamatan--</option>
                        <?php foreach($kecamatan as $k):?>
                      <option  value="<?php echo $k->id_kecamatan;?>"><?php echo $k->nama_kecamatan;?></option>
                          <?php endforeach;?>
                </select>
                </div>
                      
                <div class="form-group">
                  <label for=""></label>
                  <input type="text" class="form-control" name="alamat" placeholder="Masukan alamat">
                  <?php echo form_error('alamat');?>
                </div>

                 <!-- select -->
              <!-- /.box-body -->

              <div class="form-group">
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                  <a href="<?php echo base_url('admin/data_anggota');?>" class="btn btn-primary"> Kembali</a>
              </div>
            </form>
            </div>
            </div>
          </div>
          </section>
          </div>
          <!-- /.box -->
        