
<!-- content-header -->
<section class="content-header bg-white" height="70">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0 text-dark">
      Edit Alamat
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
            Edit Alamat
            </h3>  
          </div>
          <!-- /.card-header -->
          <div class="card-body pad">
            <div class="mb-3">
             <?php foreach($edit as $edt) :?>
                <form method="post" action="<?= base_url('admin/dashboard/simpan_edit_alamat/'.$edt->id);?>">
                <div class="form-group">
                  <label>Alamat</label>
                  
                  <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $edt->alamat;?>">
                  
                </div>  
                
                <div class="form-group">
                  <label>Nomor Hp</label>
                  
                  <input type="text" name="no_hp" id="no_hp"  class="form-control" value="<?php echo $edt->no_hp;?>">
                  
                </div>  
                
               
                <div class="form-group">
                  <button type="submit" name="update" class="btn-sm btn-primary">Update</button>
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

