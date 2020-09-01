
    <!-- jumbotron -->
    <div class="card bg-dark text-white">
        <img class="card-img" src="<?php echo base_url() ?>assets/home/img/profil1.jpg" alt="Card image" style="min-height:20vh;">
        <div class="card-img-overlay text-center">
            <h1 class="card-title ">PROFIL SINGKAT</h1>
        </div>
    </div>
    <!-- akhir jumbotron -->


    <!-- table -->
    <div class="row no-gutters my-5 justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 ml-6">
                    <?php foreach($gambar as $gbr): ?>
                        <img src="<?php echo base_url("assets/admin/upload/profil_singkat/").$gbr->gambar ?>" alt="Foto Profil Singkat" style="width: 100%;">
                    <?php endforeach;?> 
                </div>
                <!-- akhir table -->

                <!-- sidebar -->
                <div class="col-lg-4 offset-lg-0">
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
        </div>    
    </div>
    <!-- akhir sidebar-->



    <!-- ikuti kami-->
    <section style="background-color: rgb(41, 39, 39); ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 p-3 text-center">
                    <img src="<?= base_url();?>assets/home/img/logo baru bawaslu1 kecil.png" width="70%">
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