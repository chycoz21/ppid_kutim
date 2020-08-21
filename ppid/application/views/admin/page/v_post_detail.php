<!DOCTYPE html>
<html>
<head>
    <title><?php echo $judul;?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/admin/css/bootstrap.css';?>">
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <h1><?php echo $judul;?></h1>
                <p><?php echo $deskripsi;?></p>
            </div>
        </div>
    </div>
 
    <script type="text/javascript" src="<?php echo base_url().'assets/admin/js/jquery-3.4.0.min.js';?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/admin/js/bootstrap.bundle.js';?>"></script>
</body>
</html>