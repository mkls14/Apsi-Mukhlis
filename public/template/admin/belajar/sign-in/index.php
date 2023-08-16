<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Halaman Singin</title>
    <link rel="website icon"  type="png" href="../images/logo.png" width="50">
    
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

    

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="sign-in.scss" rel="stylesheet">
   </head>
    <body>
    
      <div class="container">
        <div class="login-left">
          <div class="login-header">
          <a href="../../../index.html"><img src="../images/home.png" width="70"/></a>
              <main class="form-signin w-100 m-auto">
                <form class="form-singnin" action="cek_login.php" method="post">
                  <center><img class="mb-4" src="../assets/brand/logo.png" alt="" width="120" height="65">
                  <h1 class="h3 mb-3 fw-normal">Welcome to Our Application</h1>
                  <p>Please login to use the platform</p>
                  </center>

                  <br>

                  <div class="form-floating">
                    <input type="text" class="form-control" placeholder="Username" name="username">
                    <label>Username</label>
                  </div>
                  <br>
                  <div class="form-floating">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <label>Password</label>
                  </div>
                  <br>
  
                  <button type="submit">Sign in</button>
                  <p class="mt-5 mb-3 text-muted">&copy; Multi Works,Tech 2023</p>

                  
                </form>
              </main>
 
          </div>
        </div>
            <div class="login-right">
              <br>
                <img class="gambar-kanan" src="../images/gambar3.jpg" width="700" height="715">
            </div>
              
                
              
              
            
        </div>
    
    </body>
</html>
