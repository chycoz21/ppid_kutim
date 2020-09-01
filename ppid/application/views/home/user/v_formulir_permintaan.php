   <!-- jumbotron -->

   <?php foreach($profil as $pf): ?>
    <?php foreach($permohon as $pm): ?>
   <div class="card bg-dark text-white">
        <img class="card-img" src="<?php echo base_url() ?>/assets/home/img/Profil1.jpg" alt="Card image">
        <div class="card-img-overlay text-center">
            <h1 class="card-title ">Formulir PERMINTAAN</h1>
            <p>nama</p>
        </div>
    </div>
    <!-- akhir jumbotron -->

 <div class="row no-gutters my-5 justify-content-center">

        <div class="col-lg-6 mb-5">

            <div class="card">
                <div class="card-body">
<div class="col-md-12 justify-content-center">
            <div class="mt-6">
              <div class="row">
                     <div class="col-lg-12">
                        <div class="card">
                        <div class="card-header text-white bg">
                        Silahkan Registrasi Terlebih Dahulu
                      </div>
                            <div class="card-body">
                                 <form class="mb-3" method="POST" action="<?php echo base_url() ?>user/dashboard/acfp">
                                            <div class="form-group">
                                                 <label for="">Rincian Informasi Yang Di Butuhkan</label>
                                                <textarea name="rincian" id="" class="form-control"
                                                    placeholder="Rincian Informasi Yang Di Butuhkan" cols="30" rows="5"
                                                    required=""></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Tujuan Penggunaan Informasi</label>
                                                <textarea name="tujuan" id="" class="form-control" placeholder="Tujuan Penggunaan Informasi"
                                                    cols="30" rows="5" required=""></textarea>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="">Memperoleh Informasi</label>
                                                    <select name="memperoleh" id="" class="form-control" required="">
                                                        <option value="">Memperoleh Informasi</option>
                                                        <option value="1">Melihat / Membaca / Mendengarkan / Mencatat</option>
                                                        <option value="2">Mendapat Salinan Informasi (Handphone / Soft Copy)</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Mendapatkan Informasi</label>
                                                    <select name="mendapatkan" id="" class="form-control" required="">
                                                        <option value="1">Mendapatkan Informasi</option>
                                                        <option value="2">Mengambil Langsung</option>
                                                        <option value="3">Kurir</option>
                                                        <option value="4">POS</option>
                                                        <option value="5">Fakmsimili</option>
                                                        <option value="6">Email</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                    </form>
                    </div>
                </div>                           
            </div>
        </div>
    </div>
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
                  <span><?php echo $pf->email ?></span>
                </li>
                <li class="d-block mb-3">
                  <span class="d-block text-black"> No. Telp</span>
                  <span><?php echo $pf->notelp ?></span>
                </li>
              </ul>
              <a href="<?php echo base_url("user/dashboard/update_profile/").$pf->id ?>" class="btn btn-primary btn-md text-white upd">Update Profil</a><p></p>
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


            <?php foreach($kontak as $ktk): ?>       
        <ul class="list-group text-center mt-5">
            <li class="list-group-item">
                <h1>KONTAK KAMI</h1>
            </li>
            <li class="list-group-item"><i class="fas fa-phone"></i>
                <br><?php echo $ktk->no_hp  ?>
            </li>
            <li class="list-group-item"><i class="fas fa-envelope"></i>
                <br><?php echo $ktk->email  ?>
            </li>
            <li class="list-group-item"><i class="fas fa-home"></i>
                <br><?php echo $ktk->alamat  ?>
            </li>
        </ul>     
    <?php endforeach;?>    
        </div>
    </div>
    <!-- akhir sidebar-->
    <?php endforeach;?>    
    <?php endforeach;?>    