
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PPID | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url();?>assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url();?>assets/admin/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url();?>assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url();?>assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url();?>assets/admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url();?>assets/admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url();?>assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url();?>assets/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url();?>assets/admin/plugins/summernote/summernote-bs4.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url();?>assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/admin/')?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/admin/')?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">



</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-primary">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-user"></i>
          <span class="hidden-xs">HAK AKSES : <b><?php echo $this->session->userdata('level') ?></b></span>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url().'admin/dashboard'?>" class="brand-link">
      <img src="<?= base_url();?>assets/admin/img/logo_bawas.png" alt="Foto Bawaslu" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <!-- logo for regular state and mobile devices -->
      <span class="brand-text logo-lg font-weight-light"><b>Admin</b>PPID</span>
      <!-- <span class="brand-text font-weight-light">AdminLTE 3</span> -->
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url();?>assets/admin/img/logo_bawas.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <!-- <a href="#" class="d-block">Alexander Pierce</a> -->
          <?php 
          $id_user = $this->session->userdata('id');
          $user = $this->db->query("select*from user where user_id='$id_user'")->row(); ?>
          <a href="<?php echo base_url().'admin/dashboard'?>" class="d-block"><?php echo $user->user_nm; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/dashboard'?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>  
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                KATEGORI
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/dashboard/kategori_informasi');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Informasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/dashboard/daftar_informasi');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Informasi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/dashboard/ringkasan_layanan'?>" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                RINGKASAN LAYANAN
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/dashboard/artikel'?>" class="nav-link">
              <i class="nav-icon fas fa-pencil-alt"></i>
              <p>
                ARTIKEL
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/dashboard/page'?>" class="nav-link">
              <i class="nav-icon fa fa-file"></i>
              <p>
                PAGES
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/dashboard/user_management'?>" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                USER & HAK AKSES
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/dashboard/peraturan'?>" class="nav-link">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                PERATURAN
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/dashboard/slider_image'?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                SLIDER IMAGE
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                PROFIL
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/dashboard/visi_misi'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visi & Misi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>#</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/dashboard/struktur_ppid'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Struktur PPID</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/dashboard/profil_singkat'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profil Singkat PPID</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/dashboard/dasar_hukum'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dasar Hukum</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/dashboard/tugas_fungsi'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tugas Dan Fungsi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/dashboard/regulasi'?>" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                REGULASI
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                STANDART LAYANAN
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/dashboard/kewajiban_pemohon');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kewajiban Pemohon</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/dashboard/kewajiban_bawaslu');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kewajiban Bawaslu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/dashboard/maklumat_pelayanan');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Maklumat Pelayanan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/dashboard/prosedur_pelayanan');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Prosedur Pelayanan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/dashboard/prosedur_pengajuan');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Prosedur Pengajuan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/dashboard/prosedur_permohonan');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Prosedur Permohonan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/dashboard/waktu_layanan');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Waktu Layanan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/dashboard/biaya_layanan');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Biaya Layanan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/dashboard/ganti_password'?>" class="nav-link">
              <i class="nav-icon fa fa-lock"></i>
              <p>
                GANTI PASSWORD
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/dashboard/keluar'?>" class="nav-link">
              <i class="nav-icon fa fa-share"></i>
              <p>
                KELUAR
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  
  