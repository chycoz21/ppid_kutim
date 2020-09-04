<!Doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url();?>assets/home/css/style.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/home/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/home/font/css/all.css">
    <link rel="icon" type="image/png" href="<?= base_url();?>assets/home/img/logo_bawas.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url();?>assets/home/datatable/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url();?>assets/home/datatable/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/home/datatable/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/home/datatable/css/responsive.bootstrap4.min.css">
    <title><?= $title;?></title>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f455873cc6a6a5947aebde4/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</head>

<body>
    <!-- menu -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('Beranda');?>">
                <img src="<?= base_url();?>assets/home/img/logo baru bawaslu kecil.png" alt="" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse justify-content-end navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('beranda');?>">Dashboard <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item  active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kategori
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item " href="<?php echo base_url("in/Setiap-Saat") ?>">Informasi Setiap Saat</a>
                            <a class="dropdown-item" href="<?php echo base_url("in/Berkala") ?>">Informasi Berkala</a>
                            <a class="dropdown-item" href="<?php echo base_url("in/Serta-Merta") ?>">Informasi Serta Merta</a>
                            <a class="dropdown-item" href="<?php echo base_url("in/Dikecualikan") ?>">Infromasi Dikecualikan</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url() ?>u/formulir">Formulir Permintaan <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url() ?>u/daftar">Daftar permintaan <span class="sr-only">(current)</span></a>
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
    