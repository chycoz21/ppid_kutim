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
              <form method="post" action="<?= base_url('admin/dashboard/actiondaftarinformasi') ?>">
                  <div class="form-group">
                    <label>Nama File</label>
                    <input type="text" name="nama_file" class="form-control" placeholder="Nama File">
                  </div>
                  <div class="form-group">
                    <label>Link File</label>
                    <input type="text" name="link_file" class="form-control" placeholder="Link File">
                  </div>
                  <div class="form-group">
                    <label>Kategori Informasi</label>
                    <input type="hidden" name="statusdata" value="Tambah Data">
                    <select name="id_kategori" class="form-control select2">
                      <?php foreach ($listkategoriinformasi as $data) { ?>
                        <option value="<?= $data['id_kategori'];?>"><?= $data['nama_kategori'];?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                      <option value="1">Publish</option>
                      <option value="0">Tidak Publish</option>
                    </select>
                  </div>  
                  <div class="form-group">
                    <button type="submit" class="btn-sm btn-primary">Simpan Data</button>
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

<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2();

  })
</script>