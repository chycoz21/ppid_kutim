<!-- content-header -->
<section class="content-header bg-white" height="70">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0 text-dark">
          Ganti Password
          <small>Ubah Password Anda</small>
        </h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- /.content-header -->

<!-- Main content -->
<section class="content mt-4">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="card card-outline card-primary">
          <div class="card-header">
            <h3 class="card-title">
              Ganti Password
            </h3>  
          </div>
          <!-- /.card-header -->
          <div class="card-body pad">
            <?php if(isset($_GET['alert'])){
                  if($_GET['alert'] == "sukses"){echo "<div class='alert alert-success'>Password telah diubah!</div>";
                }else if($_GET['alert'] == "gagal"){echo "<div class='alert alert-danger'>Maaf, password lama yang anda masukkan salah!</div>";
                }
              }
              ?>
            <div class="mb-3">
              <form method="post" action="<?php echo base_url('admin/dashboard/ganti_password_aksi') ?>">
                  <div class="form-group">
                    <label>Password Lama</label>
                    <input type="password" name="password_lama" class="form-control" placeholder="Masukkan Password Lama Anda ..">
                    <?php echo form_error('password_lama'); ?>
                  </div>
                  <hr>
                  <div class="form-group">
                    <label>Password Baru</label>
                    <input type="password" name="password_baru" class="form-control" placeholder="Masukkan Password Baru ..">
                    <?php echo form_error('password_baru'); ?>
                  </div>
                  <div class="form-group">
                    <label>Konfirmasi Password Baru</label>
                    <input type="password" name="konfirmasi_password" class="form-control" placeholder="Ulangi Password Baru ..">
                    <?php echo form_error('konfirmasi_password'); ?>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn-sm btn-primary" value="Ganti Password">
                  </div>  
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- /.col-->
    </div>
    <!-- ./row -->
  </div>  
</section>  