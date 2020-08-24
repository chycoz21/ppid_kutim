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
                            <a class="dropdown-item " href="#">Informasi Setiap Saat</a>
                            <a class="dropdown-item" href="#">Informasi Berkala</a>
                            <a class="dropdown-item" href="#">Informasi Serta Merta</a>
                            <a class="dropdown-item" href="#">Infromasi Dikecualikan</a>
                        </div>
                    </li>
                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Layanan Informasi Online
                        </a>

                        <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Alur Permohonan Informasi</a>
                            <a class="dropdown-item" href="#">Cek Status Permohonan Informasi</a>
                            <a class="dropdown-item" href="#">Ringkasan Layanan Informasi</a>
                        </div>
                    </li>
                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profil PPID
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Dasar Hukum</a>
                            <a class="dropdown-item" href="#">Profil Singkat</a>
                            <a class="dropdown-item" href="#">Tugas Fungsi dan Wewenang</a>
                            <a class="dropdown-item" href="#">Struktur PPID</a>
                            <a class="dropdown-item" href="#">Visi dan Misi</a>

                        </div>
                    </li>
                    <li class="nav-item  active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Regulasi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">List Regulasi</a>

                        </div>
                    </li>
                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Standart Layanan
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= base_url('Hak-dan-Kewajiban-Pemohon-Informasi');?>">Hak dan Kewajiban Pemohon Informasi</a>
                            <a class="dropdown-item" href="<?= base_url('Hak-dan-Kewajiban-Bawaslu-dalam-Pelayanan-Informasi');?>">Hak dan Kewajiban Bawaslu dalam Pelayanan Informasi</a>
                            <a class="dropdown-item" href="<?= base_url('Maklumat-Pelayanan');?>">Maklumat Pelayanan</a>
                            <a class="dropdown-item" href="<?= base_url('Prosedur-Pelayanan-Informasi');?>">Prosedur Pelayanan Informasi</a>
                            <a class="dropdown-item" href="<?= base_url('Prosedur-Pengajuan-Keberatan');?>">Prosedur Pengajuan Keberatan</a>
                            <a class="dropdown-item" href="<?= base_url('Prosedur-Permohonan-Penyelesaian-Sengketa-Informasi');?>">Prosedur Permohonan Penyelesaian Sengketa Informasi</a>
                            <a class="dropdown-item" href="<?= base_url('Waktu-Layanan');?>">Waktu Layanan</a>
                            <a class="dropdown-item" href="<?= base_url('Biaya-Layanan');?>">Biaya Layanan</a>
                        </div>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir menu -->

    