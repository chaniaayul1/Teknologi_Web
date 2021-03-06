<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets\css\login.css'); ?>" rel="stylesheet">
</head>

<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="<?php echo base_url('assets\img\login2.jpg'); ?>" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <!-- <img src="http://[::1]/TekWebTubes/TekWebTubes/assets\img\login.jpg" alt="logo" class="logo" >
                --><h1><b><i>Be.U</i></b><h1>
              </div>
              <p class="login-card-description">Sign into your account</p>
              <form action="<?php echo site_url('CLogin/proseslogin'); ?>" method="POST">
                  <div class="form-group">
                    <label for="ID_Nama" class="sr-only">ID_Nama</label>
                    <input type="id" name="ID_Nama" id="email" class="form-control" placeholder="ID">
                  </div>
                  <div class="form-group mb-4">
                    <label for="Password" class="sr-only">Password</label>
                    <input type="password" name="Password" id="Password" class="form-control" placeholder="***********">
                  </div>
                  <br>
                  
                    <?php echo $this->session->userdata("error"); ?>
                  <br>

                  <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Login" >
                </form>
                <a href="#!" class="forgot-password-link">Forgot password?</a>
                <p class="login-card-footer-text">Don't have an account? <a href="<?php echo base_url('/CSignup'); ?>" class="text-reset">Register here</a></p>
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
