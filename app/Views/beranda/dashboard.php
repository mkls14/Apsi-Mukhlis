
<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>
                <!-- Begin Page Content -->
                <div class="container-fluid mt-5 " >
                    
                    <!-- Page Heading -->
                    <br>
                    <center>
                        <h1>ANDA BERHASIL MASUK !!!</h1>
                        <br>  
                        <img src="<?= base_url(); ?>assets/img/success.png" width="150"> 
                        <br>
                        <h6>Sebagai</h6>
                        <h3 class="text-black fw-bold mt-2"><?= user()->fullname; ?></h3>
                    </center>       
                </div>
                
                    
                
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<?= $this->endSection(); ?>
 