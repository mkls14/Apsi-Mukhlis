<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>
                <!-- Begin Page Content -->
                <div class="container-fluid mb-5">
                    
                    <!-- Page Heading -->
                    <br>
                    <h1>Data <?= $title ;?></h1>
                    <br>
                <div class="row">
                    <div class="col-lg" style="background-color: #F5F5DC !important;">
                    
                    <div class="col-lg bg-white">
                        <table id="userlist" class="table table-hover" >
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Hari</th> 
                                    <th scope="col">Waktu</th>
                                    <th scope="col">Suhu</th>         
                                    <th scope="col">Kelembaban</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $i = 1; ?>
                                <?php foreach($logs as $s) : ?>
                                <tr>
                                <th scope="row"><?= $i; ?></th>
                                    <td><?= $s->tanggal; ?></td>
                                    <td><?= $s->hari; ?></td>
                                    <td><?= $s->waktu; ?></td>
                                    <td><?= $s->suhu; ?></td>
                                    <td><?= $s->kelembapan; ?></td>
                                    <td> 
                                        <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> hapus</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            

            <!-- menu Modal-->
            <div class="modal fade" id="bibitModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah User Baru </h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form action="<?= base_url('datas/users') ; ?>" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="masuk" name="masuk" placeholder="Tanggal Bergaubung">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                           
                        </div>
                        </form>
                    </div>
                    </div>
                    </div>
                    <?= $this->endSection(); ?>               
                      

 