
<nav class="navbar-default navbar-side" role="navigation">
  <div class="sidebar-collapse">
    <ul class="nav" id="main-menu">
      <li><a href="#"><i class="fa fa-user"></i> Daerah<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li><a href="<?php echo base_url('admin/daerah') ?>">Data Daerah</a></li>
        </ul>
      </li>

      <li><a href="#"><i class="fa fa-user"></i> Artikel<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li><a href="<?php echo base_url('admin/artikel') ?>">Data Artikel</a></li>
          <li><a href="<?php echo base_url('admin/artikel/tambah') ?>">Tambah Artikel</a></li>
        </ul>
      </li>

      <li><a href="#"><i class="fa fa-user"></i> Komentar<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li><a href="<?php echo base_url('admin/komentar') ?>">Data Komentar</a></li>
        </ul>
      </li>

      <li><a href="#"><i class="fa fa-user"></i>Admin<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li><a href="<?php echo base_url('admin/data_admin') ?>">Data Admin</a></li>


        </ul>
      </li>

    </ul>
 </div>
</nav>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
 <div id="page-inner">
     <div class="row">
         <div class="col-md-12">
          <h2><?php echo $title?></h2>
         </div>
     </div>
      <!-- /. ROW  -->
      <hr />

 <div class="row">
     <div class="col-md-12">
         <!-- Advanced Tables -->
         <div class="panel panel-default">
             <div class="panel-body">
                 <div class="table-responsive">
