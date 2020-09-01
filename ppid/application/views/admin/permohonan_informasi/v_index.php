<!-- content-header -->
<section class="content-header bg-white" height="70">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0 text-dark">
                  Permohonan Informasi
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
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                          Permohonan Informasi
                        </h3>
                         </div>
                    <!-- /.card-header -->
                    <div class="card-body pad">
                        <div class="mb-3">





                            <!-- Main content -->
                            <section class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">

                                                <!-- /.card-header -->
                                                <h3>Status Permohonan</h3>
                                                <div class="card-body">
                                                    <table id="example2" class="table table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>id</th>
                                                                <th>Tanggal</th>
                                                                <th>User</th>
                                                                <th>Rincan</th>
                                                                <th>Tujuan</th>
                                                                <th>Memperoleh</th>
                                                                <th>Mendapatkan</th>
                                                                <th>Status</th>
                                                       
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        
                                                      <?php foreach($permohonan_informasi as $pi): ?>      
                                                        
                                                        
                                                        <tr>
                                                                <th><?php echo $pi->id ?></th>
                                                                <th><?php echo $pi->tanggal ?></th>
                                                                <th><a href="<?php echo base_url() ?>admin/dashboard/cekuser/<?php echo $pi->id_register?>" class="btn btn-sm btn-primary">Cek User</a></th>
                                                                <th><?php echo $pi->rincian ?></th>
                                                                <th><?php echo $pi->tujuan ?></th>
                                                                <th> <?php if ($pi->status_permintaan == "1") { ?>
                            <span>Melihat / Membaca / Mendengarkan / Mencatat</span>
                          <?php }else if ($pi->status_permintaan == "2") { ?> 
                            <span>Mendapat Salinan Informasi (Handphone / Soft Copy)</span>
                          <?php } ?></th>
                                                                <th> <?php if ($pi->status_permintaan == "1") { ?>
                            <span>Mendapatkan Informasi</span>
                          <?php }else if ($pi->status_permintaan == "2") { ?> 
                            <span>Mengambil Langsung</span>
                          <?php }else if ($pi->status_permintaan == "3") { ?> 
                            <span>Kurir</span>
                          <?php }else if ($pi->status_permintaan == "4") { ?> 
                            <span>POS</span>
                          <?php }else if ($pi->status_permintaan == "5") { ?> 
                            <span>Fakmsimili</span>
                          <?php }else if ($pi->status_permintaan == "6") { ?> 
                            <span>Email</span> 
                          <?php } ?></th>
                                                                <th> <?php if ($pi->status_permintaan == "1") { ?>
                            <span>Menunggu</span>
                          <?php }else if ($pi->status_permintaan == "2") { ?> 
                            <span>Di Terima</span>
                          <?php }else if ($pi->status_permintaan == "3") { ?>
                            Ditolak
                          <?php } ?></th>
                                                                <th><?php if ($pi->status_permintaan == 1) {
                                                                    # code...
                                                                ?><a class="btn btn-sm btn-success mr-3" href="<?php echo base_url() ?>admin/dashboard/terimapermintaan/<?php echo $pi->id ?>">Terima</a><a class="btn btn-sm btn-danger mr-3" href="<?php echo base_url() ?>admin/dashboard/tolakpermintaan/<?php echo $pi->id ?>">Tolak</a>
                                                                
                                                                <?php } ?></th>

                                                        </tr>
                                                        <?php endforeach;?> 

                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                            <th>id</th>
                                                                <th>Tanggal</th>
                                                                <th>User</th>
                                                                <th>Rincan</th>
                                                                <th>Tujuan</th>
                                                                <th>Memperoleh</th>
                                                                <th>Mendapatkan</th>
                                                                <th>Status</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>



                                                <!-- /.card-body -->
                                            </div>
                                          
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.container-fluid -->
                            </section>
                            <!-- /.content -->
                        </div>


                        <!-- Control Sidebar -->
                        <aside class="control-sidebar control-sidebar-dark">
                            <!-- Control sidebar content goes here -->
                        </aside>
                        <!-- /.control-sidebar -->
                    </div>
                    <!-- ./wrapper -->

                    <!-- jQuery -->
                    <script src="<?= base_url('assets/admin/') ?>plugins/jquery/jquery.min.js"></script>
                    <!-- Bootstrap 4 -->
                    <script src="<?= base_url('assets/admin/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <!-- DataTables -->
                    <script src="<?= base_url('assets/admin/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
                    <script src="<?= base_url('assets/admin/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
                    <script src="<?= base_url('assets/admin/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
                    <script src="<?= base_url('assets/admin/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
                    <!-- AdminLTE App -->
                    <script src="<?= base_url('assets/admin/') ?>dist/js/adminlte.min.js"></script>
                    <!-- AdminLTE for demo purposes -->
                    <script src="<?= base_url('assets/admin/') ?>dist/js/demo.js"></script>
                    <!-- page script -->
                    <script>
                        $(function() {
                            $("#example1").DataTable({
                                "responsive": true,
                                "autoWidth": false,
                            });
                            $('#example2').DataTable({
                                "paging": true,
                                "lengthChange": false,
                                "searching": false,
                                "ordering": true,
                                "info": true,
                                "autoWidth": false,
                                "responsive": true,
                            });
                        });
                    </script>


                </div>
            </div>
        </div>
    </div>
    <!-- /.col-->
    </div>
    <!-- ./row -->
    </div>
</section>