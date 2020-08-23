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
                                                <h3>Alamat</h3>
                                                <div class="card-body">
                                                    <table id="example2" class="table table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>id</th>
                                                                <th>Alamat</th>
                                                                <th>No_Hp</th>

                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <?php foreach ($alamat as $alm) : ?>
                                                                <tr>
                                                                    <td><?php echo $alm->id ?></td>
                                                                    <td><?php echo $alm->alamat ?></td>
                                                                    <td><?php echo $alm->no_hp ?></td>


                                                                    <td><a href="<?php echo base_url('admin/dashboard/edit_pengaturan_alamat') ?>/<?php echo $alm->id ?>" class="btn btn-sm btn-primary">Edit</a>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; ?>

                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>id</th>
                                                                <th>Alamat</th>
                                                                <th>No_Hp</th>

                                                                <th>Aksi</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>



                                                <!-- /.card-body -->
                                            </div>
                                            <h3>Sodial Media</h3>
                                            <table id="example2" class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>id</th>
                                                        <th>Nama Sosmed</th>
                                                        <th>Link</th>

                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php foreach ($sosmed as $smd) : ?>
                                                        <tr>
                                                            <td><?php echo $smd->id ?></td>
                                                            <td><?php echo $smd->nama_media_sosial ?></td>
                                                            <td><?php echo $smd->nama_media_sosial ?></td>


                                                            <td><a href="<?php echo base_url('admin/dashboard/edit_user_management') ?>/<?php echo $alm->id ?>" class="btn btn-sm btn-primary">Edit</a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>

                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                    <th>id</th>
                                                        <th>Nama Sosmed</th>
                                                        <th>Link</th>

                                                        <th>Aksi</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
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