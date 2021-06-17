<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url(); ?>assets/images/Logo PASIM.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$this->session->userdata('display_name');?> <?=$this->session->userdata('id');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Cari...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li class="">
          <a href="<?php echo site_url('dashboardjs'); ?>">
            <i class="fa fa-home"></i> <span>DASHBOARD</span>
          </a>
        </li>
        <!-- <li class="">
          <a href="<?= site_url('instrumenjs'); ?>">
            <i class="fa fa-users"></i> <span>DATA INSTRUMEN</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i> 
            </span>
          </a>
         <!--  <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-pencil"></i> Tambah Data Akta</a></li>  
          </ul>
        </li> -->
        <li class="">
          <!-- a href="<?= site_url('#'); ?>">
            <i class="fa fa-user"></i> <span>DATA PIHAK TERKAIT</span>
            <span class="pull-right-container">
            </span>
          </a> -->
         <!--  <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-pencil"></i> Tambah Data Akta</a></li>  
          </ul> -->
        <li class="">
          <a href="<?= site_url('perkarajs');?>">
            <i class="fa fa-envelope"></i> <span>PERDATA</span>
            <span class="pull-right-container">
            <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </span>
          </a>
          <!-- <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-pencil"></i> Tambah Data Perkawinan</a></li>  
          </ul> -->
        </li>
        </li>     
        <li class="">
          <a href="<?= site_url('masukjs');?>">
            <i class="fa fa-mortar-board"></i> <span>INSTRUMEN MASUK</span>
            <span class="pull-right-container">
            <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </span>
          </a>
          <!-- <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-pencil"></i> Tambah Data Perkawinan</a></li>  
          </ul> -->
        </li>
        </li>        
        <!-- <li class="treeview active">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Berita</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= site_url(); ?>"><i class="fa fa-tags"></i> Kategori</a></li>
            <li><a href="<?= site_url(); ?>"><i class="fa fa-folder"></i> Semua Berita</a></li>  
            <li><a href="<?= site_url(); ?>"><i class="fa fa-pencil"></i> Tulis Berita</a></li>  
          </ul>
        </li>
        <li class="treeview ">
          <a href="#">
            <i class="fa fa-photo"></i>
            <span>Galeri</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= site_url(); ?>"><i class="fa fa-tags"></i> Album</a></li>
            <li><a href="<?= site_url(); ?>"><i class="fa fa-folder"></i> Foto</a></li>  
          </ul>
        </li>
        <li class="">
          <a href="<?php echo site_url(); ?>" target="_blank">
            <i class="fa fa-rocket"></i> <span>Lihat Web</span>
          </a>
        </li> -->
        
      </ul>
    </section>
    <!-- /.sidebar -->