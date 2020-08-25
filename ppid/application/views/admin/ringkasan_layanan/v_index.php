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
            <button class="float-right btn-sm btn-primary"><a class="text-white" href="<?= base_url('admin/dashboard/tambah_ringkasan_layanan');?>">Tambah Data</a></button>
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
            <table id="table-ringkasan-layanan" class="table table-bordered table-responsive" width="100%">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th>Judul</th>
                  <th>Link File</th>
                  <th>Aksi</th> 
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($listringkasanlayanan as $data) { ?>
                <tr>  
                  <td class="text-center"><?= $no;?></td>
                  <td><?= $data['judul'];?></td>
                  <td><?= $data['link_file'];?></td>
                  <td>
                    <a class="btn-sm btn btn-primary" href="<?= base_url('admin/dashboard/edit_ringkasan_layanan/'.$data['id_ringkasan_layanan']);?>"><i class="fa fa-pencil-alt"></i></a>
                    <a class="mt-1 btn-sm btn btn-danger" href="<?= base_url('admin/dashboard/actionringkasanlayanan');?>" data-toggle="modal" data-target="#hapus-data<?= $data['id_ringkasan_layanan'];?>"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="hapus-data<?= $data['id_ringkasan_layanan'];?>" tabindex="-1" aria-labelledby="hapus-data" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <form method="post" action="<?= base_url('admin/dashboard/actionringkasanlayanan');?>">
                        <div class="modal-header">
                          <h5 class="modal-title" id="hapus-data">Hapus Data</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Apakah anda ingin menghapus data ini?</p>
                          <input type="hidden" name="statusdata" value="Hapus Data">
                          <input type="hidden" name="id_ringkasan_layanan" id="id_ringkasan_layanan" value="<?= $data['id_ringkasan_layanan'];?>">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="mr-auto btn-sm btn-default" data-dismiss="modal">Batal</button>
                          <button type="submit" class="btn-sm btn-danger">Hapus Data</button>
                        </div>
                      </form>  
                    </div>
                  </div>
                </div>
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

<!-- page script -->
<script>
  $(function () {
    $("#table-ringkasan-layanan").DataTable();
  });
</script>