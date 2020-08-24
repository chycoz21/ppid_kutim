<!-- content-header -->
<section class="content-header bg-white" height="70">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0 text-dark">
          User Management
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
              User Management
            </h3>
            <button class="float-right btn-sm btn btn-primary"><a href="<?php echo base_url('admin/dashboard/tambah_user_management') ?>" class="text-white">Tambah User</a></button>
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
                        <div class="card-body">
                          <table id="example2" class="table table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>id</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Hak Akses</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>
                            <tbody>

                              <?php foreach ($user_management as $usr) : ?>
                                <tr>
                                  <td><?php echo $usr->user_id ?></td>
                                  <td><?php echo $usr->user_nm ?></td>
                                  <td><?php echo $usr->user_email ?></td>
                                  <td><?php echo $usr->user_usrnm ?></td>
                                  <td><?php
                                      if ($usr->user_lvl == 1) {
                                        echo '<span class="badge badge-pill badge-primary">Administrator</span>';
                                      } elseif ($usr->user_lvl == 2) {
                                        echo '<span class="badge badge-pill badge-danger">Editor</span>';
                                      } elseif ($usr->user_lvl == 3) {
                                        echo '<span class="badge badge-pill badge-warning">Distributor</span>';
                                      } else {
                                        echo '<span class="badge badge-pill badge-warning">Di Blokir</span>';
                                      }


                                      ?></td>

                                  <td><a href="<?php echo base_url('admin/dashboard/edit_user_management') ?>/<?php echo $usr->user_id ?>" class="btn btn-sm btn-primary">Edit</a>
                                    <?php if ($usr->user_lvl < 4) {
                                    ?>
                                      <a href="<?php echo base_url('admin/dashboard/blokir_user_management') ?>/<?php echo $usr->user_id ?>" class="btn btn-sm btn-danger ml-2">Blokir</a>

                                    <?php } else { ?>

                                      <a href="<?php echo base_url('admin/dashboard/unblokir_user_management') ?>/<?php echo $usr->user_id ?>" class="btn btn-sm btn-success ml-2">UnBlokir</a>

                                    <?php } ?></td>
                                </tr>
                              <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                              <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Hak Akses</th>
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