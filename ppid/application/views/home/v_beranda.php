<?php $this->load->view('home/v_header.php');?>
<!-- carousel  -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url();?>assets/home/img/slide1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?= base_url();?>assets/home/img/slide2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?= base_url();?>assets/home/img/slide3.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- akhir carousel --> 
<!-- pilihan informasi -->
<section style="background-color: #EEEEEF; padding: 4%;">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>PPID BAWASLU
                    <br>
                    KABUPATEN KUTAI TIMUR
                </h2>
                <hr>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-3 col-lg-3">
                <a href="#">
                    <div class="block__35630">
                        <div class="icon mb-0 text-center">
                            <img src="<?= base_url();?>assets/home/img/i_tiap_saat.png" alt="" style="height: 70px; width: auto;">
                        </div>
                        <h3 class="mb-3 mt-5" style="text-align: center; height: 90px;">Informasi Setiap Saat</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-lg-3">
                <a href="#">
                    <div class="block__35630">
                        <div class="icon mb-0 text-center">
                            <img src="<?= base_url();?>assets/home/img/i_berkala.png" alt="" style="height: 70px; width: auto;">
                        </div>
                        <h3 class="mb-3 mt-5" style="text-align: center; height: 90px;">Informasi Berkala</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-lg-3">
                <a href="#">
                    <div class="block__35630">
                        <div class="icon mb-0 text-center">
                            <img src="<?= base_url();?>assets/home/img/i_merta.png" alt="" style="height: 70px; width: auto;">
                        </div>
                        <h3 class="mb-3 mt-5" style="text-align: center; height: 90px;">Informasi Serta Merta</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-lg-3">
                <a href="#">
                    <div class="block__35630">
                        <div class="icon mb-0 text-center">
                            <img src="<?= base_url();?>assets/home/img/i_kecuali.png" alt="" style="height: 70px; width: auto;">
                        </div>
                        <h3 class="mb-3 mt-5" style="text-align: center; height: 90px;">Informasi Dikecualikan</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">Informasi yang Dihasilkan</h5>
            <p class="card-text">Disimpan, Dikelola, Dikirim dan/atau Diterima oleh Badan Publik Sesuai
            Undang-Undang</p>
            <a href="#permintaan" class="btn btn-warning btn-block">Formulir Permintaan Informasi</a>
        </div>
        <div class="card-header">
            <img src="<?= base_url();?>assets/home/img/form_image.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
</section>
<!-- akhir pilihan informasi -->

<!-- form permintaan -->
<section class="permintaan" id="permintaan">
    <div class="container mb-5">
        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <h2>FORMULIR
                    <br>
                PERMINTAAN INFORMASI</h2>
                <hr>
                Silahkan Isi Formulir yang tersedia untuk Memperoleh Informasi yang di perlukan.
            </div>
        </div>

        <!-- kontak kami -->
        <div class="row mt-5 justify-content-center">
            <!-- form permintaan left -->
            <div class="col-lg-6">
                <form class="mb-5">
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
                        <input type="file" style=" height: 50px;" name="file" class="form-control"
                        placeholder="Nama" required="" accept="image/x-png,image/gif,image/jpeg">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-lg-4">
                <ul class="list-group text-center">
                    <li class="list-group-item">
                        <h1>KONTAK KAMI</h1>
                    </li>
                    <li class="list-group-item"><i class="fas fa-phone"></i>
                        <br>0852 5052 4499
                    </li>
                    <li class="list-group-item"><i class="fas fa-envelope"></i>
                        <br>bawaslu.kutim@gmail.com
                    </li>
                    <li class="list-group-item"><i class="fas fa-home"></i>
                        <br>Jalan Yos Sudarso III Samping Bank BCA Kec. Sangatta Utara
                    </li>
                </ul>
                <div class="map mt-5 text-center img-thumbnail">
                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3354.891217197827!2d117.53497851011011!3d0.509608137686068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x320a3560177c8125%3A0xa579c3357baf94a3!2sBawaslu%20Kutai%20Timur!5e0!3m2!1sid!2sid!4v1597330863983!5m2!1sid!2sid"
                    width="340" height="340" frameborder="0" style="border:0;" allowfullscreen=""
                    aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
        <!-- akhir kontak kami -->
    </div>
</section>
<!-- akhir from permintaan -->

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
<?php $this->load->view('home/v_footer.php');?>