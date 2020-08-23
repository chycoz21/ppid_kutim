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
              <form method="post" action="<?= base_url('admin/dashboard/actionprosedurpelayanan');?>" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Judul</label>
                  <input type="hidden" name="statusdata" value="Update Data">
                  <input type="hidden" name="id_prosedur_pelayanan" id="id_prosedur_pelayanan" value="<?= $id_prosedur_pelayanan;?>">
                  <input type="text" name="judul" id="judul" class="form-control" value="<?= $judul;?>">
                </div>  
                <div class="form-group">
                  <?php if ($foto == '') { ?>
                    <img src="<?= base_url('assets/admin/upload/prosedur_pelayanan/default.png');?>" alt="Foto" width="150" height="150">
                  <?php }else{ ?>  
                    <img src="<?= base_url('assets/admin/upload/prosedur_pelayanan/'.$foto);?>" alt="Foto" width="150" height="150">
                  <?php } ?>
                </div>  
                <div class="form-group">
                  <label>Foto</label>
                  <input type="file" name="foto" id="foto" class="form-control">
                  <span style="font-size: .9em; font-style: italic">
                    Foto berformat jpg dan png 
                  </span>
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
