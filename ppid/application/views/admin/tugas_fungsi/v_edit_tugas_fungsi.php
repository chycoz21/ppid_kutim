<!-- content-header -->
<section class="content-header bg-white" height="70">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0 text-dark">
                    Dasar Hukum
                    <small>Control Panel</small>
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
            <div class="col-md-6">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            Dasar Hukum
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pad">
                        <div class="mb-3">

                            <?php foreach ($data as $prf) : ?>
                                <form method="post" action="<?= base_url('admin/dashboard/simpan_edit_tugas_fungsi/' . $prf->id); ?>" enctype="multipart/form-data">
                                    <div class="form-group">

                                        <div class="form-group">
                                            <?php if ($prf == '') { ?>
                                                Tidak Ada Gambar
                                            <?php } else { ?>
                                                <img src="<?= base_url('assets/admin/upload/tugas_fungsi/' . $prf->gambar); ?>" alt="Foto">
                                            <?php } ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar Profil Singkat</label>
                                            <input type="file" name="gambar" id="gambar" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="update" class="btn-sm btn-primary">Update Data</button>
                                        </div>
                                </form>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </div>
</section>