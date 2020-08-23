
<!-- content-header -->
<section class="content-header bg-white" height="70">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0 text-dark">
      Struktur PPID
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
            <h3 class="card-title">Struktur PPID</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
           
             

            <table class="table table-bordered" width="100%">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th>Foto</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($struktur as $str) : ?>
                <tr>  
                  <td class="text-center"><?= $no;?></td>
                  <td><img src="<?php echo base_url('assets/admin/upload/struktur_ppid/'.$str->gambar) ?>" alt=""></td>
                  <td>
                    <a class="btn-sm btn btn-primary" href="<?php echo base_url('admin/dashboard/edit_struktur_ppid/') ?><?php echo $str->id ?>"><i class="fa fa-pencil-alt"></i></a>
                  </td>
                </tr>
                <?php endforeach; ?>
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
