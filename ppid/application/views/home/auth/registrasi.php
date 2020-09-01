    <!-- jumbotron -->
    <div class="card bg-dark text-white">
        <img class="card-img" src="<?php echo base_url() ?>assets/home/img/profil1.jpg" alt="Card image" style="min-height: 20vh;">
        <div class="card-img-overlay text-center">
            <h1 class="card-title ">REGISTRASI</h1>
        </div>
    </div>
    <!-- akhir jumbotron -->


    <!-- table -->
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
                                 <form class="mb-3" method="POST" action="<?php echo base_url() ?>ac/simpan" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="">NIK</label>
                                                <input type="text" class="form-control" name="nik" placeholder="NIK" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nama</label>
                                                <input type="text" class="form-control" name="nama" placeholder="Nama" required="">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="">Alamat</label>
                                                    <textarea type="text" class="form-control" name="alamat" rows="4" placeholder="Alamat"
                                                        required=""></textarea>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Pekerjaan</label>
                                                    <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="">E-mail</label>
                                                    <input type="text" class="form-control" name="email" placeholder="E-mail" required="">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">No. Telp</label>
                                                    <input type="text" class="form-control" name="notelp" placeholder="No. Telp"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Password</label>
                                                <input type="password" class="form-control" name="password" placeholder="password"
                                                        required="">
                                            </div>
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
                    <li class="list-group-item"><i class="fas fa-folder-open text-warning mr-2"></i><a href="<?= base_url('in/Setiap-Saat');?>">Informasi Setiap Saat</a>
                    </li>
                    <li class="list-group-item"><i class="fas fa-folder-open text-warning mr-2"></i><a href="<?= base_url('in/Berkala');?>">Informasi Berkala</a>
                    </li>
                    <li class="list-group-item"><i class="fas fa-folder-open text-warning mr-2"></i><a href="<?= base_url('in/Serta-Merta');?>">Informasi Serta Merta</a>
                    </li>
                    <li class="list-group-item"><i class="fas fa-folder-open text-warning mr-2"></i><a href="<?= base_url('in/Dikecualikan');?>">Informasi Dikecualikan</a>
                    </li>
                </ul>
            </div>
            <div class="form img-thumbnail p-5">
                <a href="<?= base_url('beranda#permintaan');?>" class="btn btn-warning btn-block">Formulir Permintaan Informasi</a>
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
                    <img src="<?php echo base_url() ?>/assets/home/img/logo baru bawaslu1 kecil.png" width="70%">
                    <p class="text-white text-justify p-2">Bawaslu Kabupaten Kutai Timur menilai bahwa keterbukaan
                        informasi tidak hanya terkait dengan amanat regulasi atau undang-undang.
                        Keterbukaan informasi bagian dari kewajiban yang memang harus dipatuhi.
                        Sebab, publik memiliki hak atas informasi.</p>
                </div>
                <div class="col-md-7 p-5 text-center">
                    <h2 class="text-white">IKUTI KAMI</h2>
                    <?php foreach ($socmed as $data) { ?>
                        <a class="btn btn-warning mt-1" target="_blank" href="<?= $data['url'];?>" style="width:95px;"><i class="<?= $data['icon']?>"></i><br><?= $data['media_sosial'];?></a>
                    <?php } ?>  
                </div>
            </div>
        </div>
    </section>
    <!-- ikuti kami -->