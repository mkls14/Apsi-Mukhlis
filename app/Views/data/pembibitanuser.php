<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>
                <!-- Begin Page Content -->
                <div class="container-fluid mb-5 ">
                    
                    <!-- Page Heading -->
                    <br>
                    <h1>Data <?= $title ;?></h1>
                    <br>
                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success" role="alert" id="alert">
                            <?= session()->getFlashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                <div class="row" >
                    <div class="col-lg" style="background-color: #F5F5DC !important;">
                    <a href="" type="button" class="btn btn-secondary mb-3 mt-3"  data-toggle="modal" data-target="#bibitModal">Tambah Data</a>

                    <div class="col-lg bg-white">
                        <table id="userlist" class="table table-hover" >
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Jumlah Awal</th> 
                                    <th scope="col">Jumlah Mati</th>
                                    <th scope="col">Total</th>         
                                    <th scope="col">Action</th>         
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $i = 1; ?>
                                <?php foreach ($pembibitan as $p) : ?>
                                <tr>
                                <th scope="row"><?= $i; ?></th>
                                    <td><?= $p->tanggal; ?></td>
                                    <td><?= $p->jumlah_awal; ?></td>
                                    <td><?= $p->jumlah_akhir; ?></td>
                                    <td><?= $p->Total; ?></td>
                                    <td> 
                                    <a href="pembibitanUser/getpem/<?= $p->id; ?>" class="btn btn-sm btn-success" data-toggle="modal" data-target="#editbibitModal<?= $p->id; ?>">
                                            <i class="fas fa-edit"></i> Edit
                                    </a>
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
            

             <!-- menu Modal Tambah-->
             <div class="modal fade" id="bibitModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Baru </h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form action="<?php echo base_url('pembibitanUser/tambah') ; ?>" method="post">
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                                    <div class="col-sm-8 ml-3">
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jumlah_awal" class="col-sm-3 col-form-label">Jumlah Awal</label>
                                    <div class="col-sm-8 ml-3">
                                    <input type="number" class="form-control" id="jumlah_awal" name="jumlah_awal" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jumlah_akhir" class="col-sm-3 col-form-label">Jumlah Mati</label>
                                    <div class="col-sm-8 ml-3">
                                    <input type="number" class="form-control" id="jumlah_akhir" name="jumlah_akhir" placeholder="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>    
                    </div>
                    </div>
                </div>

            <!-- menu Modal Edit-->
            <?php foreach($pembibitan as $p) : ?>
            <div class="modal fade" id="editbibitModal<?= $p->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ubah Data </h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <form action="/pembibitanUser/ubahpem/<?= $p->id; ?>" method="post">
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                                        <div class="col-sm-8 ml-3">
                                            <input type="date" class="form-control" value="<?= $p->tanggal; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_awal" class="col-sm-3 col-form-label">Jumlah Awal</label>
                                        <div class="col-sm-8 ml-3">
                                        <input type="number" class="form-control" value="<?= $p->jumlah_awal; ?>" name="jumlah_awal"  readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_akhir" class="col-sm-3 col-form-label">Jumlah Mati</label>
                                        <div class="col-sm-8 ml-3">
                                        <input type="number" class="form-control" value="<?= $p->jumlah_akhir; ?>" name="jumlah_akhir" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                </div>
                            </form>    
                        </div>
                    </div>
            </div>
            <?php endforeach; ?>
                    <?= $this->endSection(); ?>               
                      

 