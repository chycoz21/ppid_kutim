<?php foreach($profil as $pf): ?>

  <?php foreach($permohon as $pm): ?>


    <!-- jumbotron -->
    <div class="card bg-dark text-white">
      <img class="card-img" src="<?php echo base_url() ?>assets/home/img/Profil1.jpg" alt="Card image" alt="Card image" style="min-height:25vh;">
      <div class="card-img-overlay text-center">
        <h1 class="card-title ">DASHBOARD</h1>
        <p><?php echo $pf->nama ?></p>
      </div>
    </div>
    <!-- akhir jumbotron -->


    <!-- table -->
    <div class="row no-gutters my-5 justify-content-center ">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-5 ">
            <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
              <div class="site-section" id="services-section" style="margin-top: -40px;">
                <div class="container">
                  <div class="tab">
                    <div class="row my-3">
                      <?php foreach ($listkategori as $data) { ?>
                        <div class="col-md-3 col-lg-3 mt-2">
                          <a href="<?php echo base_url(''.$data['link']) ?>">
                            <div class="block__35630">
                              <div class="icon mb-0 text-center">
                                <img src="<?= base_url('assets/admin/upload/kategori/'.$data['icon']);?>" alt="" style="height: 70px; width: auto;">
                              </div>
                              <h6 class="mb-3 mt-5" style="text-align: center; height: 40px;"><?= $data['nama_kategori'];?></h6>
                            </div>
                          </a>
                        </div>
                      <?php } ?>  
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <h4>LIST SELURUH INFORMASI</h4>
                <div class="table-responsive">
                  <table id="table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Nama File</th>

                        <th>Unduh</th>

                      </tr>
                    </thead>
                    <tbody>


                      <?php $no=1; foreach($info as $ss): ?>       


                      <tr>
                        <td><?= $no;?></td>
                        <td><?php if($ss['id_kategori']) {
                          echo ''.$ss['nama_kategori'];
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

                      </tr>
                      <?php $no++; endforeach;?> 


                    </tbody>
                  </table>
                </div>  
              </div>
            </div>
          </div>


        <!-- sidebar -->
        <div class="col-lg-4 offset-lg-1 mb-5">
             <div class="sidebar-box">
                <div class="mb-5 mx-5 mt-2">
                              <img src="<?php echo base_url() ?>assets/ktp/<?php echo $pf->ktp  ?>" alt="Image" class="img-fluid rounded-circle" style="max-height: 150px; width: auto; display: block; margin: 0 auto;">          
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
              <li class="list-group-item"><i class="fas fa-folder-open text-warning mr-2"></i><a href="<?= base_url('in/Setiap-Saat');?>">Informasi Setiap
              Saat</a>
              </li>
              <li class="list-group-item"><i class="fas fa-folder-open text-warning mr-2"></i><a href="<?= base_url('in/Berkala');?>">Informasi Berkala</a>
              </li>
              <li class="list-group-item"><i class="fas fa-folder-open text-warning mr-2"></i><a href="<?= base_url('in/Serta-Merta');?>">Informasi Serta Merta</a>
              </li>
              <li class="list-group-item"><i class="fas fa-folder-open text-warning mr-2"></i><a href="<?= base_url('in/Dikecualikan');?>">Informasi
              Dikecualikan</a>
              </li>
            </ul>
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

<?php endforeach; ?>

<?php endforeach; ?>

<?php $this->load->view('home/v_footer'); ?>