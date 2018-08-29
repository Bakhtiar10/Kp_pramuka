<!-- start: content -->
<div class="content-wrapper">
  <div class="panel">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
          <div class="box">
            <div class="box-header">
            <div class="col-md-6">
        <h1 class="animated fadeInLeft">Selamat Datang di Dashboard </h1>
      </div>
    </div>
 
        <div class="col-md-12" style="padding:20px;">
          <div class="box">
            <div class="box-header">
            <div class="col-md-12">
              <h4><span class="icon-notebook icons"></span> Agenda</h4>
            </div>

              <?php 
                foreach($kegiatan as $d){                  
              ?>
              
                <div class="panel-body padding-0">
                  <div class="col-md-12 col-xs-12 col-md-12 padding-0 box-v4-alert">
                    <h2><?php echo $d->nama_kegiatan?></h2>
                      <p><?php echo $d->keterangan?></p>
                        <b><span class="icon-clock icons"></span><?php echo $d->tgl_kegiatan?></b>
                  </div>
                <div class="calendar">
                </div>
            <?php }?>
        </div>
      </div>
    </div>
  </div>
</div>