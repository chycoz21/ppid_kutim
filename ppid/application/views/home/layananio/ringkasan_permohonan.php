<!-- jumbotron -->
    <div class="card bg-dark text-white">
        <img class="card-img" src="<?php echo base_url() ?>assets/home/img/profil1.jpg" alt="Card image">
        <div class="card-img-overlay text-center">
            <h1 class="card-title ">RINGKASAN LAYANAN INFORMASI</h1>
        </div>
    </div>
    <!-- akhir jumbotron -->

    <section>
        <div class="ringkasan">
            <div class="row no-gutters my-5 justify-content-center">
                <div class="col-lg-6 mb-5">
                    <img src="img/statistik.jpg" class="statistik-fluid" alt="Responsive image">
                    <div class="card">
                        <div class="card-body">

                            <table id="table" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Link</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Ringkasan Permohonan Informasi Bulanan</td>
                                        <td class="text-center"><button type="button"
                                                class="btn btn-warning">Unduh</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jumlah Permohonan Informasi yang Diberikan</td>
                                        <td class="text-center"><button type="button"
                                                class="btn btn-warning">Unduh</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Jumlah Permohonan Informasi yang Diberikan Sebagian dan Seluruhnya</td>
                                        <td class="text-center"><button type="button"
                                                class="btn btn-warning">Unduh</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Waktu Pemenuhan Permohonan Informasi Berdasarkan Hari</td>
                                        <td class="text-center"><button type="button"
                                                class="btn btn-warning">Unduh</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Ringkasan Laporan Layanan Informasi berdasarkan Alasan Penolakan </td>
                                        <td class="text-center"><button type="button"
                                                class="btn btn-warning">Unduh</button>
                                        </td>

                                    </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>


                </div>
                <!-- akhir alur -->

                <!-- sidebar -->
                <div class="col-lg-4 offset-lg-1">
                    <div class="list-kategori mb-5 mx-5">
                        <h3>KATEGORI</h3>
                        <ul class="list-group list-group-flush">

                            <li class="list-group-item"><i class="fas fa-folder-open text-warning mr-3"></i>Informasi
                                Setiap
                                Saat
                            </li>
                            <li class="list-group-item"><i class="fas fa-folder-open text-warning mr-3"></i>Informasi
                                Berkala
                            </li>
                            <li class="list-group-item"><i class="fas fa-folder-open text-warning mr-3"></i>Informasi
                                Serta
                                Merta</li>
                            <li class="list-group-item"><i class="fas fa-folder-open text-warning mr-3"></i>Informasi
                                Dikecualikan</li>
                        </ul>
                    </div>
                    <div class="form img-thumbnail p-5">
                        <a href="#permintaan" class="btn btn-warning btn-block">Formulir Permintaan Informasi</a>
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
                </ul>     <?php endforeach;?> 
                </div>
            </div>
        </div>
    </section>
    <!-- akhir sidebar-->





    <!-- hubungi kami -->
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
