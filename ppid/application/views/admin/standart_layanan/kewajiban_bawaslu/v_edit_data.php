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
      <div class="col-md-9">
        <div class="card card-outline card-primary">
          <div class="card-header">
            <h3 class="card-title">
              <?= $subtitle;?>
            </h3>  
          </div>
          <!-- /.card-header -->
          <div class="card-body pad">
            <div class="mb-3">
              <form method="post" action="<?= base_url('admin/dashboard/actionkewajibanbawaslu') ?>">
                  <div class="form-group">
                    <label>Judul</label>
                    <input type="hidden" name="statusdata" value="Update Data">
                    <input type="hidden" name="id_kewajiban_bawaslu" id="id_kewajiban_bawaslu" value="<?= (isset($id_kewajiban_bawaslu)) ? $id_kewajiban_bawaslu : "";?>">
                    <input type="text" name="judul" id="judul" class="form-control" value="<?= (isset($judul)) ? $judul : "";?>" height="10">
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="textarea" name="deskripsi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= (isset($deskripsi)) ? $deskripsi : "";?></textarea>
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

<!-- Page script -->
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>