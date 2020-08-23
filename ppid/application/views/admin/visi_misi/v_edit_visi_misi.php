

 <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/admin/css/bootstrap.css'; ?>">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/admin/summernote/summernote-bs4.css'; ?>">


<!-- content-header -->
<section class="content-header bg-white" height="70">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0 text-dark">
          Visi Misi
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
       Visi Misi
            </h3>
              </div>
          <!-- /.card-header -->
          <div class="card-body pad">
            <div class="mb-3">
            

            <?php foreach($visi_misi as $vm): ?>
                <form action="<?php echo base_url('admin/dashboard/simpan_edit_misi/'); ?><?php echo $vm->id ?>" method="post">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" value="<?php echo $vm->judul ?>" name="judul" class="form-control" placeholder="Judul" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea id="summernote" name="deskripsi"><?php echo $vm->deskripsi ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            <?php endforeach;?>
            </div>
          </div>
        </div>
      </div>
      <!-- /.col-->
    </div>
    <!-- ./row -->
  </div>  
</section>  

<script type="text/javascript" src="<?php echo base_url() . 'assets/admin/js/jquery-3.4.0.min.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/admin/js/bootstrap.bundle.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/admin/summernote/summernote-bs4.js'; ?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote({
                height: "300px",
                callbacks: {
                    onImageUpload: function(image) {
                        uploadImage(image[0]);
                    },
                    onMediaDelete: function(target) {
                        deleteImage(target[0].src);
                    }
                }
            });

            function uploadImage(image) {
                var data = new FormData();
                data.append("image", image);
                $.ajax({
                    url: "<?php echo site_url('admin/dashboard/upload_image') ?>",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: data,
                    type: "POST",
                    success: function(url) {
                        $('#summernote').summernote("insertImage", url);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            }

            function deleteImage(src) {
                $.ajax({
                    data: {
                        src: src
                    },
                    type: "POST",
                    url: "<?php echo site_url('admin/dashboard/delete_image') ?>",
                    cache: false,
                    success: function(response) {
                        console.log(response);
                    }
                });
            }

        });
    </script>