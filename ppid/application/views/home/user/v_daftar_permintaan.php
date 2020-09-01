<?php $this->load->view('home/v_header.php');?>
    <!-- table -->
<div class="container-fluid">
        <div class="row">
          <div class="col-md-12 blog-content">
            <div class="mt-5">
              Keterangan : 
              <ul>
                <li>
                  <span class="bg-success text-success" style="height: 30px; width:30px;">.....</span> : Sudah Di Proses
                </li>
                <li>
                  <span class="bg-danger text-danger" style="height: 30px; width:30px;">.....</span> : Proses Di Tolak
                </li>
              </ul>

              <div class="row">
                <div class="col-lg-12 mb-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                  <div class="card">
                  <div class="card-header">
                    <h3>DAFTAR PERMINTAAN</h3>
                  </div>
                  <div class="card-body">

                    <div class="table-responsive">
                      <table class="table dataTable no-footer" id="datatable" style="font-size: 12px;">
                        <thead>
                          <tr>
                            <th>No.Pendaftaran</th>
                            <th>Tgl.Permintaan</th>
                            <th>Rincian Informasi</th>
                            <th>Tujuan Informasi</th>
                            <th style="width: 100px;">Memperoleh Informasi</th>
                            <th style="width: 100px;">Mendapatkan Informasi</th>
                            <th>Keterangan</th>
                            <th style="width: 150px;">Lihat</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="7" style="text-align: center; font-weight: bold;">Belum Ada Permintaan Informasi . . .</td>
                            </tr>
                        </tbody>
                      </table>
                    </div>

                  </div>
                  <div class="card-footer">
                    <i class="float-right">DAFTAR PERMINTAAN</i>
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

    <!-- akhir sidebar-->
    <!-- ikuti kami-->
    <section style="background-color: rgb(41, 39, 39); ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 p-3 text-center">
                    <img src="../../ppid/assets/home/img/logo baru bawaslu1 kecil.png" width="70%">
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