
<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>
                <!-- Begin Page Content -->

                <!-- Page Heading -->
            <div class="container-fluid ">
                <br>
                    <center>
                        <h1> Monitoring Suhu dan Kelembaban</h1>
                    </center>
                <br>
                <div class="card-group">
                <div class="card" style="background-color: #F5F5DC !important;">
              
                    <!-- Content Row -->
                    <div class="row mt-3 justify-content-center">
                    
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <img src="<?= base_url(); ?>assets/img/gsuhu.png" width="55"> 
                                        </div>
                                        <div class="col ">
                                            <center>
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Suhu</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="pastesuhuadmin"></div>
                                        </div> 
                                        </center>      
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- kelembaban -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <img src="<?= base_url(); ?>assets/img/gkelembaban.png" width="60"> 
                                        </div>
                                        <div class="col ">
                                            <center>
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Kelembaban</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="pastekelembabanadmin"></div>
                                        </div> 
                                        </center>      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    

                    <div class="row mt-3 justify-content-center">
                       
                        <!-- Area Chart -->
                        <div class="col-xl-7 col-lg-7 ml-3">
                            <div class="card shadow mb-4">
                                <div>
                                <img src="<?= base_url(); ?>assets/img/team/<?= user()->user_image; ?>" width="200px" alt="Deskripsi Gambar" style="float: left; margin-right: 10px; margin-left: 10px;">
                                <br>
                                <center>
                                    <h2>Identitas Admin</h2>
                                </center>
                                <br>
                                 <h5> Nama   : <b><?= user()->fullname; ?></b></h5>
                                <br>
                                 <h5> Alamat : <b><?= user()->alamat; ?></b></h5>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
                </div>
            </div>
                   

                    

<?= $this->endSection(); ?>
 