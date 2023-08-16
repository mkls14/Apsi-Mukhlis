<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    
                    <!-- Page Heading -->
                    <br>
                    <h1><?= $title ;?></h1>
                    <br>
                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success" role="alert" id="alert">
                            <?= session()->getFlashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    
                <div class="row">
                    <div class="col-lg">
                    
                        
                        <a href="<?= base_url('register1');?>" class="btn btn-secondary mb-3"><i class="fas fa-user-plus"></i>  Tambah User </a>
                    
                    <div class="col-lg bg-white">
                        <table id="userlist" class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">Email</th> 
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Role</th>         
                                    <th scope="col">Status User</th>         
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $i = 1; ?>
                                <?php foreach($users as $user) : ?>
                                <tr>
                                <th scope="row"><?= $i; ?></th>
                                    <td><?= $user->username; ?></td>
                                    <td><?= $user->email; ?></td>
                                    <td><?= $user->fullname; ?></td>
                                    <td><?= $user->name; ?></td>
                                    <td><?= $user->active == '1' ? 'Aktif' : 'Non Aktif'; ?></td>
                                    <td>
                                        <a href="accessuser/getuser1/<?= $user->userid; ?>" class="btn btn-sm btn-success" data-toggle="modal" data-target="#edituserModal<?= $user->userid; ?>">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                         <!--<a href="accessuser/getuser1/<?= $user->userid; ?>" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#passworduserModal<?= $user->userid; ?>">
                                            <i class="fas fa-solid fa-key"></i> Ubah Sandi
                                        </a>-->
                                        <a href="accessuser/getuser1/<?= $user->userid; ?>" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapususerModal<?= $user->userid; ?>">
                                            <i class="fas fa-trash-alt"></i> Hapus
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
 
<!-- menu Modal Edit-->
<?php foreach($users as $user) : ?>
            <div class="modal fade" id="edituserModal<?= $user->userid; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ubah Data Users</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <form action="/accessuser/ubah1/<?= $user->userid; ?>" method="post">
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label for="username" class="col-sm-3 col-form-label">username</label>
                                        <div class="col-sm-8 ml-3">
                                            <input type="text" class="form-control" value="<?= $user->username; ?>" name="username" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-8 ml-3">
                                        <input type="text" class="form-control" value="<?= $user->email; ?>" name="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fullname" class="col-sm-3 col-form-label">Full Name</label>
                                        <div class="col-sm-8 ml-3">
                                        <input type="text" class="form-control" value="<?= $user->fullname; ?>" name="fullname">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="active" class="col-sm-3 col-form-label">Status </label>
                                        <select class="col-sm-8 ml-3 form-control" name="active">
                                            <option value="">---Pilih Status Account---</option>
                                            <option class="text-success" value="1">Aktif</option>
                                            <option class="text-danger" value="0">Non-Aktif</option>
                                        </select>
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

<!-- menu Modal Password-->
<?php foreach($users as $user) : ?>
            <div class="modal fade" id="passworduserModal<?= $user->userid; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ubah Sandi Users</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <form action="<?= base_url("/accessuser/changePassword/{$user->userid}") ?>" method="post">
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label for="username" class="col-sm-3 col-form-label">username</label>
                                        <div class="col-sm-8 ml-3">
                                            <input type="text" class="form-control" value="<?= $user->username; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-8 ml-3">
                                        <input type="text" class="form-control" value="<?= $user->email; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="new_password" class="col-sm-3 col-form-label">Password Baru</label>
                                        <div class="col-sm-8 ml-3">
                                        <input type="password" class="form-control" name="new_password" required>
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
<?php endforeach; ?>

<!-- menu Modal Hapus-->
<?php foreach($users as $user) : ?>
            <div class="modal fade" id="hapususerModal<?= $user->userid; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Peringatan !</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="ml-3 mt-2">Email : <?= $user->email; ?></div>
                        <div class="ml-3">User Name : <?= $user->username; ?></div>
                        <div class="modal-body">Apakah Anda Yakin ingin Menghapus User Tersebut?</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                            <a class="btn btn-danger" href="/accessuser/hapus/<?= $user->userid; ?>">Hapus</a>
                        </div>
                    </div>
                </div>
            </div>
<?php endforeach; ?>

                    
                    
<?= $this->endSection(); ?>               
                      

 