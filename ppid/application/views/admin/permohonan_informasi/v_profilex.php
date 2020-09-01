

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


 <?php foreach($user as $usr): ?> 
    
    
                            <!-- Main content -->
                            <section class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">

                                                <!-- /.card-header -->
                                              
                                                <div class="card-body">
                                                    
                                            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  NIK : <?php echo  $usr->nik?>
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b><?php echo  $usr->nama?></b></h2>
                      <p class="text-muted text-sm"><b>Pekerjaan: </b><?php echo  $usr->pekerjaan?> </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat: <?php echo  $usr->alamat?></li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Email #: <?php echo  $usr->email?></li>
                
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> No Hp #: <?php echo  $usr->notelp?></li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="<?php echo base_url('assets/ktp/').$usr->ktp ?>" alt="" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    
                  </div>
                </div>
              </div>
<?php endforeach;?> 


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