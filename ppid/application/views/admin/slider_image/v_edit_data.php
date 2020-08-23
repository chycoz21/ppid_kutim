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
              <form method="post" action="<?= base_url('admin/dashboard/actionsliderimage');?>" enctype="multipart/form-data">  
                <div class="form-group">
                  <?php if ($src_image == '') { ?>
                    <img src="<?= base_url('assets/admin/upload/slider_image/default.png');?>" alt="Src Image" width="150" height="150">
                  <?php }else{ ?>  
                    <img src="<?= base_url('assets/admin/upload/slider_image/'.$src_image);?>" alt="Src Image" width="150" height="150">
                  <?php } ?>
                </div>  
                <div class="form-group">
                  <label>Src Image</label>
                  <input type="hidden" name="id_slider" id="id_slider" value="<?= $id_slider;?>">
                  <input type="file" name="src_image" id="src_image" class="form-control">
                  <span style="font-size: .9em; font-style: italic">
                    Image berformat jpg dan png 
                  </span>
                </div>
                <div class="form-group">
                  <label>Caption</label>
                  <input type="text" name="caption" id="caption" class="form-control" value="<?= $caption;?>">
                </div>
                <div class="form-group">
                  <label>Link Url</label>
                  <input type="text" name="link_url" id="link_url" class="form-control" value="<?= $link_url;?>">
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
