<?php $this->load->view('admin/dashboard/v_header'); ?>
<!-- content-header -->
<section class="content-header bg-white" height="70">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0 text-dark">
          <?= $title;?>
          <small>Control panel</small>
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
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><?= $subtitle;?></h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <?php
            $berhasil = $this->session->flashdata('berhasil');
            if ($berhasil) {
              ?>
              <div class="alert alert-success text-white fade show" role="alert">
                <strong><?= $berhasil ?></strong>
              </div>
            <?php } ?>
            <table class="table table-bordered" width="100%">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th>Src Image</th>
                  <th>Caption</th>
                  <th>Link Url</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($listsliderimage as $data) { ?>
                <tr>  
                  <td class="text-center"><?= $no;?></td>
                  <td>
                    <?php if ($data['src_image'] == ''){?>
                      <img src="<?= base_url('assets/admin/upload/slider_image/default.png');?>" alt="Foto" width="120" height="150">
                    <?php }else{ ?>
                      <img src="<?= base_url('assets/admin/upload/slider_image/'.$data['src_image']);?>" alt="Foto" width="120" height="150">
                    <?php } ?>
                  </td>
                  <td><?= $data['caption'];?></td>
                  <td><?= $data['link_url'];?></td>
                  <td>
                    <a class="btn-sm btn btn-primary" href="<?= base_url('admin/dashboard/edit_slider_image/'.$data['id_slider']);?>"><i class="fa fa-pencil-alt"></i></a>
                  </td>
                </tr>
                <?php $no++; } ?>  
              </tbody>   
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>  
    </div>
    <!-- ./row -->
  </div>  
</section>  
<?php $this->load->view('admin/dashboard/v_footer'); ?>
