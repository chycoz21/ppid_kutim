    <!-- jumbotron -->
    <div class="card bg-dark text-white">
        <img class="card-img" src="<?php echo base_url() ?>assets/home/img/Profil1.jpg" alt="Card image">
        <div class="card-img-overlay text-center">
            <h1 class="card-title ">LOGIN</h1>
        </div>
    </div>
    <!-- akhir jumbotron -->


    <!-- table -->
    <div class="row no-gutters my-5 justify-content-center">

        <div class="col-lg-6 mb-5">

            <div class="card">
                <div class="card-body">
<div class="col-md-12 justify-content-center">
            <div class="mt-5">
              <div class="row">
                <div class="col-lg-12 mb-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                  
                  <form action="<?php echo base_url() ?>ac/verivikasi" method="POST" role="form">
                    
                    <div class="card">
                      <div class="card-header text-white bg">
                        Silahkan Login untuk melanjutkan
                      </div>
                      <div class="card-body">
                        
                        <div class="container">
                        <?= $this->session->flashdata('message'); ?>

                          <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email" id="" placeholder="Username" required="" autofocus="" autocomplete="off">
                          </div>

                          <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" id="" placeholder="Password" required="" autofocus="" autocomplete="off">
                          </div>

                          <div class="form-group">
                          <a href="<?php echo base_url() ?>m/registrasi">
                            <p>
                              <i class="btn btn-success">Belum punyak akun, silahkan klik di sini untk registrasi</i>
                            </p>
                          </a>
                          </div>
                        </div>

                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-info float-right">Login</button>
                      </div>
                    </div>
                </form>
                </div>
                
              </div>
            </div>
          </div>
                </div>
            </div>


        </div>
        <!-- akhir table -->


        <!-- sidebar -->
        <div class="col-lg-4 offset-lg-1">
            <div class="list-kategori mb-5 mx-5">
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
            <div class="form img-thumbnail p-5">
                <a href="#permintaan" class="btn btn-warning btn-block">Formulir Permintaan Informasi</a>
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