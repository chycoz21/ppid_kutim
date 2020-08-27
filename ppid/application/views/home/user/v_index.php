<?php foreach($profil as $pf): ?>

    <?php foreach($permohon as $pm): ?>


  <!-- jumbotron -->
  <div class="card bg-dark text-white">
        <img class="card-img" src="<?php echo base_url() ?>assets/home/img/Profil1.jpg" alt="Card image">
        <div class="card-img-overlay text-center">
            <h1 class="card-title ">DASHBOARD</h1>
            <p><?php echo $pf->nama ?></p>
        </div>
    </div>
    <!-- akhir jumbotron -->


    <!-- table -->
    <div class="col-md-8 ">
            <div class="">
              
              <div class="row">
                

              <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

                  

                  <div class="site-section" id="services-section" style="margin-top: -40px;">
                    <div class="container" >
                      
                      <div class="tab">
                        
                        <div class="row">
                          
                                                        
                                <div class="col-md-3 col-lg-3">
                                  <a href="<?php echo base_url() ?>u/dashboard">
                                    <div class="block__35630">
                                      <div class="icon mb-0 text-center">
                                        <!-- <span class="glyphicon glyphicon-file"></span> -->
                                        <img src="https://ppid.kaltim.bawaslu.go.id/images/icon.jpg" alt="" style="height: 70px; width: auto;">
                                      </div>
                                      <h3 class="mb-3" style="text-align: center; height: 40px;">Informasi Setiap Saat</h3>
                                    </div>
                                  </a>
                                </div>


                                                        
                                <div class="col-md-3 col-lg-3">
                                  <a href="<?php echo base_url() ?>u/berkala">
                                    <div class="block__35630">
                                      <div class="icon mb-0 text-center">
                                        <!-- <span class="glyphicon glyphicon-file"></span> -->
                                        <img src="https://ppid.kaltim.bawaslu.go.id/images/icon.jpg" alt="" style="height: 70px; width: auto;">
                                      </div>
                                      <h3 class="mb-3" style="text-align: center; height: 40px;">Informasi Berkala</h3>
                                    </div>
                                  </a>
                                </div>


                                                        
                                <div class="col-md-3 col-lg-3">
                                  <a href="<?php echo base_url() ?>u/serta_merta">
                                    <div class="block__35630">
                                      <div class="icon mb-0 text-center">
                                        <!-- <span class="glyphicon glyphicon-file"></span> -->
                                        <img src="https://ppid.kaltim.bawaslu.go.id/images/icon.jpg" alt="" style="height: 70px; width: auto;">
                                      </div>
                                      <h3 class="mb-3" style="text-align: center; height: 40px;">Informasi Serta Merta</h3>
                                    </div>
                                  </a>
                                </div>


                                                        
                                <div class="col-md-3 col-lg-3">
                                  <a href="<?php echo base_url() ?>u/dikecualikan">
                                    <div class="block__35630">
                                      <div class="icon mb-0 text-center">
                                        <!-- <span class="glyphicon glyphicon-file"></span> -->
                                        <img src="https://ppid.kaltim.bawaslu.go.id/images/icon.jpg" alt="" style="height: 70px; width: auto;">
                                      </div>
                                      <h3 class="mb-3" style="text-align: center; height: 40px;">Informasi Dikecualikan</h3>
                                    </div>
                                  </a>
                                </div>
            </div>
          </div>
      </div>
  </div>
</div>
</div>
</div>
</div>
   <div class="row no-gutters my-5 justify-content-center">

        <div class="col-lg-6 mb-4">

            <div class="card">
                <div class="card-body">
                    <h4>LIST INFORMASI <?php echo $judul  ?></h4>
                    <table id="table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Nama File</th>
              
                                <th>Unduh</th>

                            </tr>
                        </thead>
                        <tbody>

                          
                          <?php foreach($info as $ss): ?>       
                            
                            
                            <tr>
                                <td><?php echo $ss['id_daftar_informasi'] ?></td>
                                <td><?php if($ss['id_kategori'] == 1) {
                                echo 'Informasi Setiap Saat';
                                }elseif ($ss['id_kategori'] == 2) {
                                  echo 'Informasi Berkala';
                                  }elseif ($ss['id_kategori'] == 3) {
                                    echo 'Informasi Serta Merta';
                                    }elseif ($ss['id_kategori'] == 4) {
                                      echo 'Informasi Dikecualikan';
                                      } ?></td>
                                <td><?php echo $ss['nama_file'] ?></td>
                                
                                <td class="text-center"><a href="<?php echo $ss['link_file'] ?>" type="button" class="btn btn-warning">Unduh</a>
                                </td>

                            </tr><?php endforeach;?> 
                            

                        </tbody>

                    </table>
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



    <!-- ikuti kami-->
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
