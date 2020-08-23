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
                  <th>Judul</th>
                  <th>Foto</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($listmaklumatpelayanan as $data) { ?>
                <tr>  
                  <td class="text-center"><?= $no;?></td>
                  <td><?= $data['judul'];?></td>
                  <td><img src="<?= base_url('assets/admin/upload/maklumat_pelayanan/'.$data['foto']);?>" alt="Foto" width="120" height="150"></td>
                  <td>
                    <a class="btn-sm btn btn-primary" href="<?= base_url('admin/dashboard/edit_maklumat_pelayanan/'.$data['id_maklumat_pelayanan']);?>"><i class="fa fa-pencil-alt"></i></a>
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
