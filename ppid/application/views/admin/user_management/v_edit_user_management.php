
<!-- content-header -->
<section class="content-header bg-white" height="70">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0 text-dark">
          User management
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
            <h3 class="card-title">          User management</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
     <?php foreach($user_management as $usr): ?>
   
        <form action="<?php echo base_url('admin/dashboard/simpan_edit_user_management') ?>/<?php echo $usr->id ?>" method="post">
       <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo $usr->nama ?>" placeholder="Nama" required>
                    </div>
       <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control"  value="<?php echo $usr->email ?>" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control"  value="<?php echo $usr->password ?>" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label>Hak Akses</label>
                        <select id="inputState" class="form-control" name="level">

                        <?php 
                  if ($usr->level == 1) {
                      echo '
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>';
                  }elseif ($usr->level == 2) {
                    echo ' 
                    <option value="2">2</option>
                    <option value="1">1</option>
                    <option value="3">3</option>';
                  }elseif ($usr->level == 3) {
                    echo '
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                    ';
                  }else {
                    echo '-';
                  }
                  
                  
                  ?>
      
      </select>


      <input type="submit" class="btn btn-xl btn-primary mt-3" value="Submit">
                    </div>
    
    </form>
       

     <?php endforeach; ?>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>  
    </div>
    <!-- ./row -->
  </div>  
</section>  
