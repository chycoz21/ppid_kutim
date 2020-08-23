<?php $this->load->view('admin/dashboard/v_header'); ?>
<!-- content-header -->
<section class="content-header bg-white" height="70">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0 text-dark">
          <?= $subtitle;?>
          <small>Control Panel</small>
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
              <?= $subtitle;?>
            </h3>  
          </div>
          <!-- /.card-header -->
          <div class="card-body pad">
            <div class="mb-3">
              <form method="post" action="<?= base_url('admin/dashboard/actionkategoriinformasi') ?>">
                  <div class="form-group">
                    <label>Nama Kategori</label>
                    <input type="hidden" name="statusdata" value="Update Data">
                    <input type="hidden" name="id_kategori" id="id_kategori" value="<?= (isset($id_kategori)) ? $id_kategori : "";?>">
                    <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" value="<?= (isset($nama_kategori)) ? $nama_kategori : "";?>">
                  </div>
                  <div class="form-group">
                    <label>Icon Kategori</label>
                    <input type="text" name="icon_kategori" id="icon_kategori" class="form-control" value="<?= (isset($icon)) ? $icon : "";?>">
                  </div>
                  <div class="form-group">
                    <button type="submit" name="update" class="btn-sm btn-primary">Update Data</button>
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
<?php $this->load->view('admin/dashboard/v_footer'); ?>