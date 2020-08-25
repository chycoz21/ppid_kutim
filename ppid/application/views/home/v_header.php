<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url();?>assets/home/css/style.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/home/font/css/all.css">
    <link rel="icon" type="image/png" href="<?= base_url();?>assets/home/img/logo_bawas.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url();?>assets/home/datatable/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url();?>assets/home/datatable/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/home/datatable/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/home/datatable/css/responsive.bootstrap4.min.css">
    <title><?= $title;?></title>
</head>

<body>
    <!-- menu -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="<?= base_url();?>assets/home/img/logo baru bawaslu kecil.png" alt="" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse justify-content-end navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('Beranda');?>">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class=" nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kategori
                        </a>
                        <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item " href="<?php echo base_url("in/Setiap-Saat") ?>">Informasi Setiap Saat</a>
                            <a class="dropdown-item" href="<?php echo base_url("in/Berkala") ?>">Informasi Berkala</a>
                            <a class="dropdown-item" href="<?php echo base_url("in/Serta-Merta") ?>">Informasi Serta Merta</a>
                            <a class="dropdown-item" href="<?php echo base_url("in/Dikecualikan") ?>">Infromasi Dikecualikan</a>
                        </div>
                    </li>
                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Layanan Informasi Online
                        </a>

                        <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?php echo base_url("l/alur_permohonan") ?>">Alur Permohonan Informasi</a>
                            <a class="dropdown-item" href="<?php echo base_url("l/cek_permohonan") ?>">Cek Status Permohonan Informasi</a>
                            <a class="dropdown-item" href="<?php echo base_url("l/ringkasan_permohonan") ?>">Ringkasan Layanan Informasi</a>
                        </div>
                    </li>
                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profil PPID
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?php echo base_url("p/dasar_hukum") ?>">Dasar Hukum</a>
                            <a class="dropdown-item" href="<?php echo base_url("p/profile_singkat") ?>">Profil Singkat</a>
                            <a class="dropdown-item" href="<?php echo base_url("p/tugas") ?>">Tugas Fungsi dan Wewenang</a>
                            <a class="dropdown-item" href="<?php echo base_url("p/struktur") ?>">Struktur PPID</a>
                            <a class="dropdown-item" href="<?php echo base_url("p/visi_misi") ?>">Visi dan Misi</a>

                        </div>
                    </li>
                    <li class="nav-item  active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Regulasi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?php echo base_url("r/List-Regulasi") ?>">List Regulasi</a>

                        </div>
                    </li>
                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Standart Layanan
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= base_url('sl/Hak-dan-Kewajiban-Pemohon-Informasi');?>">Hak dan Kewajiban Pemohon Informasi</a>
                            <a class="dropdown-item" href="<?= base_url('sl/Hak-dan-Kewajiban-Bawaslu-dalam-Pelayanan-Informasi');?>">Hak dan Kewajiban Bawaslu dalam Pelayanan Informasi</a>
                            <a class="dropdown-item" href="<?= base_url('sl/Maklumat-Pelayanan');?>">Maklumat Pelayanan</a>
                            <a class="dropdown-item" href="<?= base_url('sl/Prosedur-Pelayanan-Informasi');?>">Prosedur Pelayanan Informasi</a>
                            <a class="dropdown-item" href="<?= base_url('sl/Prosedur-Pengajuan-Keberatan');?>">Prosedur Pengajuan Keberatan</a>
                            <a class="dropdown-item" href="<?= base_url('sl/Prosedur-Permohonan-Penyelesaian-Sengketa-Informasi');?>">Prosedur Permohonan Penyelesaian Sengketa Informasi</a>
                            <a class="dropdown-item" href="<?= base_url('sl/Waktu-Layanan');?>">Waktu Layanan</a>
                            <a class="dropdown-item" href="<?= base_url('sl/Biaya-Layanan');?>">Biaya Layanan</a>
                        </div>
                    </li>

                    <li class="nav-item active">
                     <?php if($this->session->userdata('email')){ ?>
                        <a class="nav-link" href="<?php echo base_url() ?>m/logout">Logout</a>

                     <?php }else{
                        
                      ?>

<a class="nav-link" href="<?php echo base_url() ?>m/login">Login</a>

                     <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir menu -->

    