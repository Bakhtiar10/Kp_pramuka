<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>asset/dist/img/images.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Pramuka Indonesia</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Home</li>
        <li><a href="<?php echo base_url()?>admin/index"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Data </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url()?>admin/report_upload"><i class="fa fa-cloud-upload"></i> Data Upload</a></li>
            <li class="active"><a href="<?php echo base_url()?>admin/data_anggota"><i class="fa fa-address-book"></i> Data Anggota</a></li>
            <li class="active"><a href="<?php echo base_url()?>admin/data_sekolah"><i class="fa fa-institution"></i> Data Sekolah</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa-file-code-o fa"></i>
            <span>Report</span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url()?>admin/laporanpdf"><i class="fa-file-pdf-o fa"></i>Export To PDF</a></li>
            <li class="active"><a href="<?php echo base_url()?>admin/laporanexcell"><i class="fa-file-excel-o fa"></i>Export To Excell</a></li>
          </ul>
          <li class="treeview">
          <a href="#">
            <i class=" fa-retweet fa"></i>
            <span>Posting</span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url()?>admin/kegiatan"><i class=" fa-rocket fa"></i>Posting Kegiatan</a></li>
            <li class="active"><a href="<?php echo base_url()?>admin/penghargaan"><i class="glyphicon glyphicon-king"></i>Posting Penghargaan</a></li>
          </ul>

          <li><a href="<?php echo base_url()?>admin/logout"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>

        </li>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>