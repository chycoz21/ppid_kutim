
<!-- content-header -->
<section class="content-header bg-white" height="70">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0 text-dark">
      Tambah Sosmed
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
            Tambah Sosmed
            </h3>  
          </div>
          <!-- /.card-header -->
          <div class="card-body pad">
            <div class="mb-3">
           
                <form method="post" action="<?= base_url('admin/dashboard/simpan_sosmed/');?>">
                <div class="form-group">
                  <label>Nama Sosmed</label>
                  
                  <input type="text" name="nama" class="form-control" id="nama" value="">
                  
                </div>  
                
                <div class="form-group">
                  <label>Url</label>
                  
                  <input type="text" name="url" id="url"  class="form-control" value="">
                  
                </div>  
           
                
               
                <div class="form-group">
                  <button type="submit" name="update" class="btn-sm btn-primary">Submit</button>
                </div>  
              </form>

              
            </div>
          </div>
        </div>
      </div>
      <!-- /.col-->
    </div>
    <!-- ./row -->
  </div>  
</section>  

