
    
    
    
    
    
    



                <?php foreach($profil as $pf): ?>

<?php foreach($permohon as $pm): ?>


<!-- jumbotron -->
<div class="card bg-dark text-white">
    <img class="card-img" src="<?php echo base_url() ?>assets/home/img/Profil1.jpg" alt="Card image">
    <div class="card-img-overlay text-center">
        <h1 class="card-title ">EDIT PROFILE</h1>
        <p><?php echo $pf->nama ?></p>
    </div>
</div>
<!-- akhir jumbotron -->


<div class="row no-gutters my-5 justify-content-center">

    <div class="col-lg-6 mb-4">

        <div class="card">
            <div class="card-body">
            <div class="card-body">
                                 <form class="mb-3" method="POST" action="<?php echo base_url("user/dashboard/simpan_edit/".$pf->id) ?>" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="">NIK</label>
                                                <input type="text" class="form-control" value="<?php echo $pf->nik ?>" name="nik" placeholder="NIK" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nama</label>
                                                <input type="text" class="form-control" value="<?php echo $pf->nama ?>" name="nama" placeholder="Nama" required="">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="">Alamat</label>
                                                    <textarea type="text" class="form-control"  name="alamat" rows="4" placeholder="Alamat"
                                                        required=""><?php echo $pf->alamat ?></textarea>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Pekerjaan</label>
                                                    <input type="text" class="form-control" value="<?php echo $pf->pekerjaan ?>" name="pekerjaan" placeholder="Pekerjaan">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="">E-mail</label>
                                                    <input type="text" class="form-control" value="<?php echo $pf->email ?>" name="email" placeholder="E-mail" required="">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">No. Telp</label>
                                                    <input type="text" class="form-control" value="<?php echo $pf->notelp ?>" name="notelp" placeholder="No. Telp"
                                                        required="">
                                                </div>
                                            </div>
                                           
                                           
                                            
                                            <div class="form-group">
                                                <label for="">Upload KTP</label>
                                                <input type="file" style=" height: 50px;" name="ktp" class="form-control"
                                                    placeholder="Nama" required="" accept="image/x-png,image/gif,image/jpeg">
                                            </div>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </form>
                            </div>
             
            </div>
        </div>


    </div>
    <!-- akhir table -->


    <!-- sidebar -->
    <div class="col-lg-4 offset-lg-1 mb-10">
         <div class="sidebar-box">
            <div class="mb-5 mx-5 mt-2">
                          <img src="<?php echo base_url() ?>assets/ktp/<?php echo $pm->ktp  ?>" alt="Image" class="img-fluid rounded-circle" style="max-height: 150px; width: auto; display: block; margin: 0 auto;">           
          <br>
          <h3 class="text-black text-center"><?php echo $pf->nama ?></h3>
          <ul class="list-unstyled footer-link">
          
         
            <li class="d-block mb-3">
              <span class="d-block text-black">Alamat</span>
              <span><?php echo $pf->alamat ?></span>
            </li>
           
            <li class="d-block mb-3">
              <span class="d-block text-black">E-mail</span>
              <span><?php echo $pf->email ?> </span>
            </li>
            <li class="d-block mb-3">
              <span class="d-block text-black"> No. Telp</span>
              <span><?php echo $pf->notelp ?></span>
            </li>
          </ul>
          <a href="#" class="btn btn-primary btn-md text-white upd">Update Profil</a><p></p>
        <br>
    </div>
</div>
        <div class="list-kategori mb-5 mx-5 mt-2">
            <h3>KATEGORI</h3>
            <ul class="list-group list-group-flush">

                <li class="list-group-item"><i class="fas fa-folder-open text-warning mr-3"></i>Informasi Setiap
                    Saat
                </li>
                <li class="list-group-item"><i class="fas fa-folder-open text-warning mr-3"></i>Informasi Berkala
                </li>
                <li class="list-group-item"><i class="fas fa-folder-open text-warning mr-3"></i>Informasi Serta
                    Merta</li>
                <li class="list-group-item"><i class="fas fa-folder-open text-warning mr-3"></i>Informasi
                    Dikecualikan</li>
            </ul>
        </div>


        <ul class="list-group text-center mt-5">
            <li class="list-group-item">
                <h1>KONTAK KAMI</h1>
            </li>
            <li class="list-group-item"><i class="fas fa-phone"></i>
                <br>0852 5052 4499</li>
            <li class="list-group-item"><i class="fas fa-envelope"></i>
                <br>bawaslu.kutim@gmail.com</li>
            <li class="list-group-item"><i class="fas fa-home"></i>
                <br>Jalan Yos Sudarso III Samping Bank BCA Kec. Sangatta Utara</li>
        </ul>
    </div>
</div>
<!-- akhir sidebar-->



<!-- ikuti kaasdmi-->
<section style="background-color: rgb(41, 39, 39); ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 p-3 text-center">
                <img src="img/logo baru bawaslu1 kecil.png" width="70%">
                <p class="text-white text-justify p-2">Bawaslu Kabupaten Kutai Timur menilai bahwa keterbukaan
                    informasi tidak hanya terkait dengan amanat regulasi atau undang-undang.
                    Keterbukaan informasi bagian dari kewajiban yang memang harus dipatuhi.
                    Sebab, publik memiliki hak atas informasi.</p>
            </div>
            <div class="col-md-6 p-5 text-center">
                <h2 class="text-white">IKUTI KAMI</h2>
                <button type="button" class="btn btn-warning"><i class="fab fa-facebook"></i><br>Facebook</button>
                <button type="button" class="btn btn-warning"><i class="fab fa-instagram"></i><br>Instagram</button>
                <button type="button" class="btn btn-warning"><i class="fab fa-twitter"></i><br>Twitter</button>
                <button type="button" class="btn btn-warning"><i class="fab fa-youtube"></i><br>Youtube</button>
            </div>
        </div>
    </div>
</section>
<!-- ikuti kami -->

<?php endforeach; ?>

<?php endforeach; ?>



