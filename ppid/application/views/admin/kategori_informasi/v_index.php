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
            <button class="float-right btn-sm btn-primary"><a class="text-white" href="<?= base_url('admin/dashboard/tambah_kategori_informasi');?>">Tambah Data</a></button>
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
            <table id="table-kategori" class="table table-bordered">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th>Nama Kategori</th>
                  <th>Icon Kategori</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($listkategoriinformasi as $data) { ?>
                <tr>
                  <td class="text-center"><?= $no;?></td>
                  <td><?= $data['nama_kategori'];?></td>
                  <td><?= $data['icon'];?></td>
                  <td>
                    <a class="btn-sm btn btn-primary" href="<?= base_url('admin/dashboard/edit_kategori_informasi/'.$data['id_kategori']);?>"><i class="fa fa-pencil-alt"></i></a>
                    <a class="btn-sm btn btn-danger" href="<?= base_url('admin/dashboard/actionkategoriinformasi');?>" data-toggle="modal" data-target="#hapus-data<?= $data['id_kategori'];?>"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="hapus-data<?= $data['id_kategori'];?>" tabindex="-1" aria-labelledby="hapus-data" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <form method="post" action="<?= base_url('admin/dashboard/actionkategoriinformasi');?>">
                        <div class="modal-header">
                          <h5 class="modal-title" id="hapus-data">Hapus Data</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Apakah anda ingin menghapus data ini?</p>
                          <input type="hidden" name="statusdata" value="Hapus Data">
                          <input type="hidden" name="id_kategori" id="id_kategori" value="<?= $data['id_kategori'];?>">
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

<script>
  $(function () {
    $("#table-kategori").DataTable();
  });
</script>
