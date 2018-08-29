<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>asset/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Form User</p>
          <a><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Home</li>
        <li><a href="<?php echo base_url()?>User/index"><i class="fa fa-home"></i> <span>Beranda</span></a></li>
        </li>
          <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-king"></i>
            <span>Report</span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url()?>User/kegiatan"><i class="fa fa-circle-o"></i>Kegiatan</a></li>
            <li class="active"><a href="<?php echo base_url()?>User/keahlian"><i class="fa fa-circle-o"></i>Keahlian</a></li>
            <li class="active"><a href="<?php echo base_url()?>User/index"><i class="fa fa-circle-o"></i>Tugas</a></li>
            <li class="active"><a href="<?php echo base_url()?>User/penghargaan"><i class="fa fa-circle-o"></i>Penghargaan</a></li>
          </ul>
        </li>
        
        <li>
        <a href="<?php echo base_url()?>login">
        <i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
