 <!-- start content  -->
<div id="content">
  <div class="tabs-wrapper text-center">
    <div class="panel box-shadow-none text-left content-header">
      <div class="panel-body" style="padding-bottom:0px;">
        <div class="col-md-12">
          <h3 class="animated fadeInLeft">Riwayat Penghargaan</h3>
              <br><br>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="col-md-12">
        <div class="panel">
          <div class="panel-heading">
            <h4>Riwayat Penghargaan</h4>
          </div>

    <div class="panel-body">
      <div class="col-md-6">
        <div class="alert alert-danger alert-border alert-dismissible fade in" role="alert">
          <h3>Gambar Tugas
                                          
             <?php 
              foreach($penghargaan as $d)                  
             ?>
                 <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
          </h3>
        </div>
      </div>

    <div class="col-md-6">
     <div class="alert alert-warning alert-border alert-dismissible fade in" role="alert">
       <h3>Nama
         <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        </h3>
        <p><?php echo $d->nama_penghargaan?></p>
      </div>
    </div>
                                   
    <div class="col-md-6">
     <div class="alert alert-primary alert-border alert-dismissible fade in" role="alert">
       <h3>Keterangan
         <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        </h3>
          <p><?php echo $d->keterangan?></p>
        
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>

  <?php if($this->session->flashdata('info')){ ?>
   <div class="alert alert-warning alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
     <?php echo $this->session->flashdata('info'); ?>
   </div>

  <?php } ?>

   <?php
    $name = array(
     'name'=>'addData',
       'class'=>'form-horizontal'
        );  
      echo form_open_multipart('User/addTugas/',$name);
   ?>
   <div class="col-md-12 modal-example">

  <div class="col-md-12">
   <div class="panel">
    <div class="panel-heading">
      <h4>Form Upload </h4>
    </div>
      
    <div class="panel-body">
     <div class="form-group">
       <label class="col-md-2 control-label text-right">No Anggota</label>
        <div class="col-md-4">
         <input type="text" name="id_anggota" class="form-control">
        </div>
      </div>
                       
    <div class="form-group">
     <label class="col-md-2 control-label text-right">Upload</label>
      <div class="col-md-4">
       <input type="file" name="gambar" class="form-control">
      </div>
     </div> 
    </div>

    <div class="form-group">
     <label class="col-md-2 control-label text-right"></label>
      <div class="col-md-4">
       <button  name="submit" value="submit" class="btn ripple-infinite btn-gradient btn-info">
        <div>
         <span>Save </span>
        </div>
       </button>
      </div>
    </div>
   </div>  
  </div>
 </div>
</div>

</div>

          <!-- end content -->

</div>
