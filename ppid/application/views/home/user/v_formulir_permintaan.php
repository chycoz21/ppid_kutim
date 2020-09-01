<?php $this->load->view('home/v_header.php');?>
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
                                 <form class="mb-3">
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
                              <img src="#" alt="Image" class="img-fluid rounded-circle" style="max-height: 150px; width: auto; display: block; margin: 0 auto;">           
              <br>
              <h3 class="text-black text-center">noor moch umar amrulloh m</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-black">Tanggal Lahir </span>
                  <span>13-11-1999</span>
                </li>
                <li class="d-block mb-3">
                  <span class="d-block text-black">Jenis Kelamin</span>
                  <span>Laki-laki</span>
                </li>
                <li class="d-block mb-3">
                  <span class="d-block text-black">Alamat</span>
                  <span>Jalan poros no 1 desa mukti utama</span>
                </li>
                <li class="d-block mb-3">
                  <span class="d-block text-black">Kota</span>
                  <span>Kutai timur</span>
                </li>
                <li class="d-block mb-3">
                  <span class="d-block text-black">E-mail</span>
                  <span>kingoemar11@gmail.com </span>
                </li>
                <li class="d-block mb-3">
                  <span class="d-block text-black"> No. Telp</span>
                  <span>081253401949</span>
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
<?php $this->load->view('home/v_footer.php');?>