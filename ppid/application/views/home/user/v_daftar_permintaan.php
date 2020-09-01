   <!-- jumbotron -->
   <div class="card bg-dark text-white">
        <img class="card-img" src="../../ppid/assets/home/img/Profil1.jpg" alt="Card image">
        <div class="card-img-overlay text-center">
            <h1 class="card-title ">DAFTAR PERMINTAAN</h1>
            <p>nama</p>
        </div>
    </div>
    <!-- akhir jumbotron -->


    <!-- table -->
<div class="container-fluid">
        <div class="row">
          <div class="col-md-12 blog-content">
            <div class="mt-5">
              Keterangan : 
              <ul>
              <li>
                  <span class="bg-warning text-warning" style="height: 30px; width:30px;">.....</span> : Menunggu
                </li>
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
                           <?php foreach($data as $dta): ?>   
                            
                            <th><?php echo $dta->id ?></th>
                            <th><?php echo $dta->tanggal ?></th>
                            <th><?php echo $dta->rincian ?></th>
                            <th><?php echo $dta->tujuan ?></th>

                            <th style="width: 200px;">  <?php if ($dta->memperoleh == "1") { ?>
                            <span>Melihat / Membaca / Mendengarkan / Mencatat</span>
                          <?php }else if ($dta->memperoleh == "2") { ?> 
                            <span>Mendapat Salinan Informasi (Handphone / Soft Copy)</span>
                          <?php } ?></th>



                            <th style="width: 100px;"> <?php if ($dta->mendapatkan == "1") { ?>
                            <span>Mendapatkan Informasi</span>
                          <?php }else if ($dta->mendapatkan == "2") { ?> 
                            <span>Mengambil Langsung</span>
                          <?php }else if ($dta->mendapatkan == "3") { ?> 
                            <span>Kurir</span>
                          <?php }else if ($dta->mendapatkan == "4") { ?> 
                            <span>POS</span>
                          <?php }else if ($dta->mendapatkan == "5") { ?> 
                            <span>Fakmsimili</span>
                          <?php }else if ($dta->mendapatkan == "6") { ?> 
                            <span>Email</span> 
                          <?php } ?></th>   
                            <th> <?php if ($dta->status_permintaan == "1") { ?>
                            <span><span class="bg-warning text-warning" style="height: 30px; width:30px;">.....</span></span>
                          <?php }else if ($dta->status_permintaan == "2") { ?> 
                            <span><span class="bg-success text-success" style="height: 30px; width:30px;">.....</span></span>
                          <?php }else if ($dta->status_permintaan == "3") { ?>
                            <span class="bg-danger text-danger" style="height: 30px; width:30px;">.....</span>
                          <?php } ?></th>
                            <th style="width: 150px;">Lihat</th>     </tr>
                            <?php endforeach;?> 
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