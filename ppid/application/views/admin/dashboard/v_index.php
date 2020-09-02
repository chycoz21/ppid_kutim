<?php $this->load->view('admin/dashboard/v_header'); ?>
<!-- content-header -->
<section class="content-header bg-white" height="70">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0 text-dark">
          Dashboard
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
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <?php foreach ($listhitungdaftarinformasi as $data) { ?>
              <h3><?= $data['daftar_informasi'];?></h3>
            <?php } ?>  
            <p>Daftar Informasi</p>
          </div>
          <div class="icon">
            <i class="fa fa-th"></i>
          </div>
          <a href="<?= base_url('admin/dashboard/daftar_informasi');?>" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <?php foreach ($listhitungregulasi as $data) { ?>
              <h3><?= $data['regulasi'];?></h3>
            <?php } ?>  
            <p>Data Regulasi</p>
          </div>
          <div class="icon">
            <i class="fas fa-copy"></i>
          </div>
          <a href="<?= base_url('admin/dashboard/regulasi');?>" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <?php foreach ($listhitungringkasanlayanan as $data) { ?>
              <h3><?= $data['ringkasan_layanan'];?></h3>
            <?php } ?>  
            <p>Data Ringkasan Layanan</p>
          </div>
          <div class="icon">
            <i class="fa fa-file"></i>
          </div>
          <a href="<?= base_url('admin/dashboard/ringkasan_layanan');?>" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <?php foreach ($listhitungkategoriinformasi as $data) { ?>
              <h3><?= $data['kategori']?></h3>
            <?php } ?>  
            <p>Data Kategori Informasi</p>
          </div>
          <div class="icon">
            <i class="fa fa-info"></i>
          </div>
          <a href="<?= base_url('admin/dashboard/kategori_informasi');?>" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-12 connectedSortable">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">
                  Dashboard
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body pad">
                <div class="mb-3">
                  Anda Berhasil Login.<br>anda login sebagai<br>Username :<?php echo $this->session->userdata('username') ?><br>level :<?php echo $this->session->userdata('level') ?><br>id pengguna :<?php echo $this->session->userdata('id') ?>
                </div>
              </div>
            </div>
          </div>
          <!-- /.col-->
        </div>
        <!-- ./row -->
      </section>
      <!-- /.Left col -->
    </div>
    <!-- /.row (main row) -->
     <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-12 connectedSortable">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-warning">
              <div class="card-header">
                <h3 class="card-title">
                  Formulir Permintaan Sedang Diproses
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="table-responsive">
                <div class="card-body pad">
                  <div class="mb-3">
                    <?php
                      $berhasil = $this->session->flashdata('sukses');
                      if ($berhasil) {
                    ?>
                      <div class="alert alert-success text-white fade show" role="alert">
                        <strong><?= $berhasil ?></strong>
                      </div>
                    <?php } ?>
                    <table id="table-formulir-permintaan-diproses" class="table table-bordered" width="100%">
                      <thead>
                        <tr>
                          <th class="text-center">No</th>
                          <th>Nama</th>
                          <th>Rincian Informasi</th>
                          <th>Tujuan Informasi</th>
                          <th>Memperoleh Informasi</th>
                          <th>Mendapatkan Informasi</th>
                          <th>Status Permintaan</th>
                          <th>Aksi</th> 
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; foreach ($listpermohonaninformasi as $data) { ?>
                        <tr>  
                          <td class="text-center"><?= $no;?></td>
                          <td><?= $data['nama'];?></td>
                          <td><?= $data['rincian'];?></td>
                          <td><?= $data['tujuan'];?></td>
                          <td>
                            <?php if ($data['memperoleh'] == "1") { ?>
                              <span>Melihat / Membaca / Mendengarkan / Mencatat</span>
                            <?php }else if ($data['memperoleh'] == "2") { ?> 
                              <span>Mendapat Salinan Informasi (Handphone / Soft Copy)</span>
                            <?php } ?>
                          </td>
                          <td>
                            <?php if ($data['mendapatkan'] == "1") { ?>
                              <span>Mendapatkan Informasi</span>
                            <?php }else if ($data['mendapatkan'] == "2") { ?> 
                              <span>Mengambil Langsung</span>
                            <?php }else if ($data['mendapatkan'] == "3") { ?> 
                              <span>Kurir</span>
                            <?php }else if ($data['mendapatkan'] == "4") { ?> 
                              <span>POS</span>
                            <?php }else if ($data['mendapatkan'] == "5") { ?> 
                              <span>Fakmsimili</span>
                            <?php }else if ($data['mendapatkan'] == "6") { ?> 
                              <span>Email</span> 
                            <?php } ?>
                          </td>
                          <td>
                            <?php if ($data['status_permintaan'] == "1") { ?>
                              <span class="badge badge-pill badge-warning text-white">Menunggu</span>
                            <?php }else if ($data['status_permintaan'] == "2") { ?> 
                              <span class="badge badge-pill badge-success text-white">Sudah Di Proses</span>
                            <?php }else if ($data['status_permintaan'] == "3") { ?> 
                              <span class="badge badge-pill badge-danger text-white">Proses Di Tolak</span>
                            <?php } ?>
                          </td>
                          <td>
                              <a class="mt-1 btn-sm btn btn-primary" href="<?= base_url('admin/dashboard/actiondaftarinformasi');?>" data-toggle="modal" data-target="#konfirmasi-data<?= $data['id'];?>"><i class="fa fa-pencil-alt"></i></a>
                          </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="konfirmasi-data<?= $data['id'];?>" tabindex="-1" aria-labelledby="hapus-data" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <form method="post" action="<?= base_url('admin/dashboard/actionpermohonaninformasi');?>">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="hapus-data">Konfirmasi data permintaan users</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <label>Status Permintaan</label>
                                  <input type="hidden" name="id" id="id" value="<?= $data['id'];?>">
                                  <select class="form-control" name="status_permintaan">
                                    <option value="2">Sudah Di Proses</option>
                                    <option value="3">Proses Di Tolak</option>
                                  </select>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="mr-auto btn-sm btn-default" data-dismiss="modal">Batal</button>
                                  <button type="submit" class="btn-sm btn-primary">Konfirnmasi Data</button>
                                </div>
                              </form>  
                            </div>
                          </div>
                        </div>
                        <?php $no++; } ?>  
                      </tbody>   
                    </table>
                  </div>
                </div>
              </div>  
            </div>
          </div>
          <!-- /.col-->
        </div>
        <!-- ./row -->
      </section>
      <!-- /.Left col -->
    </div>
    <!-- /.row (main row) -->
     <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-12 connectedSortable">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">
                  Konfirmasi Data User
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="table-responsive">
                <div class="card-body pad">
                  <div class="mb-3">
                    <?php
                      $berhasil = $this->session->flashdata('berhasil');
                      if ($berhasil) {
                    ?>
                      <div class="alert alert-success text-white fade show" role="alert">
                        <strong><?= $berhasil ?></strong>
                      </div>
                    <?php } ?>
                    <table id="table-konfirmasi-data-users" class="table table-bordered" width="100%">
                      <thead>
                        <tr>
                          <th class="text-center">No</th>
                          <th>NIK</th>
                          <th>Nama</th>
                          <th>Rincian Informasi</th>
                          <th>Tujuan Informasi</th>
                          <th>Memperoleh Informasi</th>
                          <th>Mendapatkan Informasi</th>
                          <th>Foto</th>
                          <th class="text-center">Status</th>
                          <th>Aksi</th> 
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; foreach ($listregistrasi as $data) { ?>
                        <tr>  
                          <td class="text-center"><?= $no;?></td>
                          <td><?= $data['nik'];?></td>
                          <td><?= $data['nama'];?></td>
                          <td><?= $data['rincian'];?></td>
                          <td><?= $data['tujuan'];?></td>
                          <td>
                            <?php if ($data['memperoleh'] == "1") { ?>
                              <span>Melihat / Membaca / Mendengarkan / Mencatat</span>
                            <?php }else if ($data['memperoleh'] == "2") { ?> 
                              <span>Mendapat Salinan Informasi (Handphone / Soft Copy)</span>
                            <?php } ?>
                          </td>
                          <td>
                            <?php if ($data['mendapatkan'] == "1") { ?>
                              <span>Mendapatkan Informasi</span>
                            <?php }else if ($data['mendapatkan'] == "2") { ?> 
                              <span>Mengambil Langsung</span>
                            <?php }else if ($data['mendapatkan'] == "3") { ?> 
                              <span>Kurir</span>
                            <?php }else if ($data['mendapatkan'] == "4") { ?> 
                              <span>POS</span>
                            <?php }else if ($data['mendapatkan'] == "5") { ?> 
                              <span>Fakmsimili</span>
                            <?php }else if ($data['mendapatkan'] == "6") { ?> 
                              <span>Email</span> 
                            <?php } ?>
                          </td>
                          <td><img src="<?= base_url('assets/ktp/'.$data['ktp']);?>" alt="KTP" width="120" height="120"></td>
                          <td>
                            <?php if ($data['status'] == "1") { ?>
                              <span class="badge badge-pill badge-danger">Belum AKtif</span>
                            <?php } ?>
                          </td>
                          <td>
                            <?php if ($data['status'] == "1") { ?>
                              <a class="mt-1 btn-sm btn btn-primary" href="<?= base_url('admin/dashboard/actiondaftarinformasi');?>" data-toggle="modal" data-target="#konfirmasi-data<?= $data['id'];?>"><i class="fa fa-pencil-alt"></i></a>
                             <?php }else{ ?>
                            <?php } ?>
                          </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="konfirmasi-data<?= $data['id'];?>" tabindex="-1" aria-labelledby="hapus-data" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <form method="post" action="<?= base_url('admin/dashboard/actionregistrasi');?>">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="hapus-data">Konfirmasi User</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <p>Apakah anda ingin konfirmasi data ini?</p>
                                  <input type="hidden" name="id" id="id" value="<?= $data['id'];?>">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="mr-auto btn-sm btn-default" data-dismiss="modal">Batal</button>
                                  <button type="submit" class="btn-sm btn-primary">Konfirnmasi Data</button>
                                </div>
                              </form>  
                            </div>
                          </div>
                        </div>
                        <?php $no++; } ?>  
                      </tbody>   
                    </table>
                  </div>
                </div>
              </div>  
            </div>
          </div>
          <!-- /.col-->
        </div>
        <!-- ./row -->
      </section>
      <!-- /.Left col -->
    </div>
    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
</section>
<?php $this->load->view('admin/dashboard/v_footer'); ?>
<!-- page script -->
<script>
  $(function () {
    $("#table-formulir-permintaan-diproses").DataTable();
  });
</script>
<script type="text/javascript">
  $(function () {
     $("#table-konfirmasi-data-users").DataTable();
  });
</script>


