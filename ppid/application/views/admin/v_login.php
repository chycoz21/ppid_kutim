
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PPID KUTIM | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url();?>assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url();?>assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url();?>assets/admin/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/admin/css/style.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?= base_url();?>index2.html">PPID KUTIM</a>
  </div>
  <!-- /.login-logo -->
  <?php
    if(isset($_GET['alert'])){
      if($_GET['alert']=="gagal"){
        echo "<div class='alert alert-danger font-weight-bold text-center'>Maaf! Username & Password Salah</div>";
    }else if($_GET['alert']=="belum_login"){
      echo "<div class='alert alert-danger font-weight-bold text-center'>Anda Harus Login Terlebih Dulu!</div>";
    }else if($_GET['alert']=="logout"){
      echo "<div class='alert alert-success font-weight-bold text-center'>Anda Telah Logout!</div>";
    }else if($_GET['alert']=="device"){
      echo "<div class='alert alert-danger font-weight-bold text-center'>Akun Anda Login Di Device Lain</div>";
    }
  }
  ?>
  <div class="card">
    <div class="card-body login-card-body">
      <div>
        <p class="text-center"><img src="<?php echo base_url() ?>/assets/home/img/logo_bawas.png"  class="col-3 mb-2"></p>
      </div>


      <form method="post" action="<?= base_url('admin/login/aksi');?>">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <label>
              <a href="<?php echo base_url('admin/login');?>">kembali</a>
            </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn  btn-block text-light bg">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url();?>assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url();?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url();?>assets/admin/dist/js/adminlte.min.js"></script>

</body>
</html>
