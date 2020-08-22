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
            <button class="float-right btn-sm btn-primary"><a class="text-white" href="<?= base_url('admin/dashboard/tambah_daftar_informasi');?>">Tambah Data</a></button>
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
            <table id="table-daftar-informasi" class="table table-bordered table-responsive" width="100%">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th>Nama File</th>
                  <th>Link File</th>
                  <th>Kategori Informasi</th>
                  <th class="text-center">Status</th>
                  <th>Aksi</th> 
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($listdaftarinformasi as $data) { ?>
                <tr>  
                  <td class="text-center"><?= $no;?></td>
                  <td><?= $data['nama_file'];?></td>
                  <td><?= $data['link_file'];?></td>
                  <td><?= $data['nama_kategori'];?></td>
                  <td>
                    <?php if ($data['status'] == "1") { ?>
                      <span class="badge badge-pill badge-success">Publish</span>
                    <?php }else if ($data['status'] == "0") { ?> 
                      <span class="badge badge-pill badge-danger">Tidak Publish</span>
                    <?php } ?>
                  </td>
                  <td>
                    <a class="btn-sm btn btn-primary" href="<?= base_url('admin/dashboard/edit_daftar_informasi/'.$data['id_daftar_informasi']);?>"><i class="fa fa-pencil-alt"></i></a>
                    <a class="mt-1 btn-sm btn btn-danger" href="<?= base_url('admin/dashboard/actiondaftarinformasi');?>" data-toggle="modal" data-target="#hapus-data<?= $data['id_daftar_informasi'];?>"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="hapus-data<?= $data['id_daftar_informasi'];?>" tabindex="-1" aria-labelledby="hapus-data" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <form method="post" action="<?= base_url('admin/dashboard/actiondaftarinformasi');?>">
                        <div class="modal-header">
                          <h5 class="modal-title" id="hapus-data">Hapus Data</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Apakah anda ingin menghapus data ini?</p>
                          <input type="hidden" name="statusdata" value="Hapus Data">
                          <input type="hidden" name="id_daftar_informasi" id="id_daftar_informasi" value="<?= $data['id_daftar_informasi'];?>">
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
    $("#table-daftar-informasi").DataTable();
  });
</script>