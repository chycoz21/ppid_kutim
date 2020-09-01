<?php $this->load->view('home/v_header');?>
<!-- jumbotron -->
<div class="card bg-dark text-white">
    <img class="card-img" src="<?php echo base_url() ?>assets/home/img/form_image.jpg" alt="Card image" style="min-height: 25vh;">
    <div class="card-img-overlay text-center">
        <h1 class="card-title ">INFORMASI SETIAP SAAT</h1>
    </div>
</div>
<!-- akhir jumbotron -->

<!-- table -->
<div class="row no-gutters my-5 justify-content-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card">
                    <div class="card-header bg-white">
                        <h4 class="card-title">LIST INFORMASI SETIAP SAAT</h4>
                    </div>
                    <div class="card-body">
                        <table id="table-saat-ini" class="table table-striped table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Nama File</th>
                                    <th>Unduh</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach ($listsaatini as $data) { ?>
                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td><?= $data['nama_file'];?></td>

                                    <td class="text-center">
                                       
                                    <?php if($this->session->userdata('status') == 2){ ?>
                                        <a target="_blank" class="btn-sm btn-warning" href="<?= $data['link_file'];?>">Unduh <i class="fa fa-download"></i></a>

                                    <?php }else{ ?>
                                        <button type="button" class="btn-sm btn-warning" data-toggle="modal" data-target="#exampleModalCenter">
Unduh <i class="fa fa-download"></i>
</button>
                                    <?php } ?>
                                    </td>
                        
                                </tr>
                                <?php $no++; } ?>
                            </tbody>
                        </table>
                    </div>    
                </div>    
            </div>
            <!-- akhir table -->

            <!-- sidebar -->
            <div class="col-lg-4 offset-lg-0">
                <div class="list-kategori mb-5 mx-5">
                    <h3>KATEGORI</h3>
                    <ul class="list-group list-group-flush">
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fas fa-folder-open text-warning mr-3"></i><a href="<?= base_url('in/Setiap-Saat');?>">Informasi Setiap
                            Saat</a>
                        </li>
                        <li class="list-group-item"><i class="fas fa-folder-open text-warning mr-3"></i><a href="<?= base_url('in/Berkala');?>">Informasi Berkala</a>
                        </li>
                        <li class="list-group-item"><i class="fas fa-folder-open text-warning mr-3"></i><a href="<?= base_url('in/Serta-Merta');?>">Informasi Serta Merta</a>
                        </li>
                        <li class="list-group-item"><i class="fas fa-folder-open text-warning mr-3"></i><a href="<?= base_url('in/Dikecualikan');?>">Informasi
                            Dikecualikan</a>
                        </li>
                    </ul>
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
                </ul>     <?php endforeach;?> 
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
<?php $this->load->view('home/v_footer');?>    

<!-- page script -->
<script>
  $(function () {
    $("#table-saat-ini").DataTable();
  });
</script>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
         <center> <h5>Gagal!</h5></center>
      Untuk mendownload file anda diharuskan login terdahulu, silahkan login!
      </div>

    <center>  <div class="col-lg-5">  <a href="<?php echo base_url() ?>m/login" class="btn btn-primary ">Login</a></div></center>

    <br><br>
    </div>
  </div>
</div>