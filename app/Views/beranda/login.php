<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Halaman Singin</title>
    <link rel="website icon"  type="png" href="<?= base_url(); ?>assets/img/logo.png" width="50">
    
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

  
    <link href="<?= base_url(); ?>assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/dist/css/sign.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>assets/dist/css/sign.css" rel="stylesheet">
   </head>
    <body>    
      <div class="container">
        <div class="login-left">
          <div class="login-header">
          <a href="<?= base_url(); ?>">
            <img src="<?= base_url(); ?>assets/img/home.png" width="70"/>
            </a>
              <main class="form-signin w-100 m-auto">
                <?= view('Myth\Auth\Views\_message_block') ?>

                <form class="form-singnin" action="<?= url_to('login') ?>" method="post">
						        <?= csrf_field() ?>
                  <center><img class="mb-4" src="<?= base_url(); ?>assets/img/logo.png" alt="" width="120" height="65">
                  <h1 class="h3 mb-3 fw-normal">Welcome to Our Application</h1>
                  <p>Please login to use the platform</p>
                  </center>

                  <br>
                    
                  <div class="form-floating">
                    <?php if ($config->validFields === ['email']): ?>
						            <div class="form-group">
							            <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
								          name="login" placeholder="<?=lang('Auth.email')?>">
							            <div class="invalid-feedback">
								          <?= session('errors.login') ?>
							            </div>
						            </div>
                    <?php else: ?>
						            <div class="form-group">
							            <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
								          name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
							            <div class="invalid-feedback">
								          <?= session('errors.login') ?>
							            </div>
						            </div>
                      <?php endif; ?>
                  </div>
                      <br>
                  <div class="form-floating">
                    <div class="form-group">
                      <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
                      <div class="invalid-feedback">
								        <?= session('errors.password') ?>
							        </div>
						        </div>  
                  </div>

                  <button type="submit" ><?=lang('Auth.loginAction')?></button>
                  
                <hr>
                  <p class="mt-5 mb-3 text-muted">&copy; Multi Works,Tech 2023</p> 
                </form>
              

              </main>
 
          </div>
        </div>
            <div class="login-right">
              <br>
                <img class="gambar-kanan" src="<?= base_url(); ?>assets/img/kandang.jpeg" width="700" height="715">
            </div>
        </div>
  
        </body>
    </html>