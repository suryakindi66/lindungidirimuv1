<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets-login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/assets-login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets-login/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="/assets-login/css/style.css">
    <link rel="icon" href="/assets-landingpage/favicon.png">
    <title>Login Area</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="/assets-login/images/slider-dec-v3.png" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Daftar / Sign Up</h3>
              @if(session()->has('sukses-register'))
                <h5 style="color: green">Sukses Registrasi, Silahkan Login!</h5>
              @endif
              @if(session()->has('error-register'))
              <h3 style="color: red">Username Sudah Ada! Coba Yang Lain</h3>
            @endif
            </div>
            <form action="/register" method="post">
              @csrf
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="name" required>

              </div><br>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <span><a href="/login" class="forgot-pass">Go To Login</a></span> 
              </div>
              <div class="d-flex mb-5 align-items-center">
                <span><a href="/" class="forgot-pass"><- Back To Home</a></span> 
              </div>
              <input type="submit" value="Daftar" class="btn btn-block btn-info">

              </div>
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="/assets-login/js/jquery-3.3.1.min.js"></script>
    <script src="/assets-login/js/popper.min.js"></script>
    <script src="/assets-login/js/bootstrap.min.js"></script>
    <script src="/assets-login/js/main.js"></script>
  </body>
</html>