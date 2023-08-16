<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <br>
    <h1><?= $title; ?></h1>
    <br>
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success" role="alert" id="alert">
                <?= session()->getFlashdata('success'); ?>
                
            </div>
        <?php endif; ?>
    <div class="card-group">
        <div class="card" style="background-color: #F5F5DC !important;">
            <br>
            <div class="text-right">
            <a href="accessuser/getuser/<?= user()->id; ?>" type="button" class="btn btn-secondary btn-lg mr-3"  data-toggle="modal" data-target="#profileModal">Edit Data</a>
            </div>
            <center>
                <img src="<?= base_url(); ?>assets/img/team/<?= user()->user_image; ?> " width="150">
                <br>
                <a href="accessuser/getuser/<?= user()->id; ?>" data-toggle="modal" data-target="#fotoModal">Ubah Foto Frofil</a>
            </center>
            <div class="card-body">
                <center>
                    <h1 class="card-title"><b><?= user()->fullname; ?></b></h1>
                </center>
                <br>
                <main class="container border">
                    <div class="row">
                        <div class="col-md-6 col-12 py-1">
                            <center>
                                <h3>Email </h3>
                            </center>
                        </div>
                        <div class="col-md-5 col-12 py-1 text-white">
                            <main class="container border bg-secondary border border-primary rounded-pill">
                                <h4><?= user()->email; ?></h4>
                            </main>
                        </div>
                        <div class="col-md-6 col-12 py-1 sm-3">
                            <center>
                                <h3>User</h3>
                            </center>
                        </div>
                        <div class="col-md-5 col-12 py-1 text-white">
                            <main class="container border bg-secondary border border-primary rounded-pill">
                                <h4><?= user()->username; ?></h4>
                            </main>
                        </div>
                        <div class="col-md-6 col-12 py-1 sm-3">
                            <center>
                                <h3>Jabatan</h3>
                            </center>
                        </div>
                        <div class="col-md-5 col-12 py-1 text-white">
                            <main class="container border bg-secondary border border-white rounded-pill text-body-white">
                                <h4><?= user()->jabatan; ?></h4>
                            </main>
                        </div>
                        <div class="col-md-6 col-12 py-1 sm-3">
                            <center>
                                <h3>Alamat </h3>
                            </center>
                        </div>
                        <div class="col-md-5 col-12 py-1 text-white">
                            <main class="container border bg-secondary border border-white rounded-pill text-body-white">
                                <h4><?= user()->alamat; ?></h4>
                            </main>
                        </div>
                        <div class="col-md-6 col-12 py-1 sm-3">
                            <center>
                                <h3>Tempat Lahir </h3>
                            </center>
                        </div>
                        <div class="col-md-5 col-12 py-1 text-white">
                            <main class="container border bg-secondary border border-white rounded-pill text-body-white">
                                <h4><?= user()->tempat_lahir; ?></h4>
                            </main>
                        </div>
                        <div class="col-md-6 col-12 py-1 sm-3">
                            <center>
                                <h3>Tanggal Lahir </h3>
                            </center>
                        </div>
                        <div class="col-md-5 col-12 py-1 text-white">
                            <main class="container border bg-secondary border border-white rounded-pill text-body-white">
                                <h4><?= user()->tanggal_lahir; ?></h4>
                            </main>
                        </div>
                    </div>
                </main>
                
            </div>
        </div>
    </div>

</div>
            <!-- menu Modal Edit-->
            <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ubah Data Profile</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <form action="accessuser/ubah/<?= user()->id; ?>" method="post">
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label for="fullname" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-8 ml-3">
                                            <input type="text" class="form-control" value="<?= user()->fullname; ?>" name="fullname" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                                        <div class="col-sm-8 ml-3">
                                            <input type="text" class="form-control" value="<?= user()->jabatan; ?>" name="jabatan" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-8 ml-3">
                                        <input type="text" class="form-control" value="<?= user()->email; ?>" name="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="username" class="col-sm-3 col-form-label">Username</label>
                                        <div class="col-sm-8 ml-3">
                                        <input type="text" class="form-control" value="<?= user()->username; ?>" name="username" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-sm-8 ml-3">
                                            <input type="text" class="form-control" value="<?= user()->alamat; ?>" name="alamat" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-8 ml-3">
                                        <input type="text" class="form-control" value="<?= user()->tempat_lahir; ?>" name="tempat_lahir" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-8 ml-3">
                                        <input type="date" class="form-control" value="<?= user()->tanggal_lahir; ?>" name="tanggal_lahir" >
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                </div>
                            </form>    
                        </div>
                    </div>
            </div>
            <!-- menu Modal Edit foto-->
            <div class="modal fade" id="fotoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ubah Foto Profile</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <form action="accessuser/ubahfoto/<?= user()->id; ?>" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="form-group row">
                                    <label for="profile_picture" class="ml-3">Foto Profil Baru:</label>
                                        <div class="col-sm-8 ml-3">
                                            <input type="file" name="profile_picture" value="<?= user()->gambar; ?>" id="profile_picture">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </form>    
                        </div>
                    </div>
            </div>



<?= $this->endSection(); ?>