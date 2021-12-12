<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="endless admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, endless admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="http://laravel.pixelstrap.com/endless/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="http://laravel.pixelstrap.com/endless/assets/images/favicon.png" type="image/x-icon">
    <title>SIPB | Login</title>
    <!-- Google font-->
<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- Font Awesome-->
<link rel="stylesheet" type="text/css" href="http://laravel.pixelstrap.com/endless/assets/css/fontawesome.css">
<!-- ico-font-->
<link rel="stylesheet" type="text/css" href="http://laravel.pixelstrap.com/endless/assets/css/icofont.css">
<!-- Themify icon-->
<link rel="stylesheet" type="text/css" href="http://laravel.pixelstrap.com/endless/assets/css/themify.css">
<!-- Flag icon-->
<link rel="stylesheet" type="text/css" href="http://laravel.pixelstrap.com/endless/assets/css/flag-icon.css">
<!-- Feather icon-->
<link rel="stylesheet" type="text/css" href="http://laravel.pixelstrap.com/endless/assets/css/feather-icon.css">

<!-- Bootstrap css-->
<link rel="stylesheet" type="text/css" href="http://laravel.pixelstrap.com/endless/assets/css/bootstrap.css">
<!-- App css-->
<link rel="stylesheet" type="text/css" href="http://laravel.pixelstrap.com/endless/assets/css/style.css">
<link id="color" rel="stylesheet" href="http://laravel.pixelstrap.com/endless/assets/css/light-1.css" media="screen">
<!-- Responsive css-->
<link rel="stylesheet" type="text/css" href="http://laravel.pixelstrap.com/endless/assets/css/responsive.css">  </head>
  <body main-theme-layout="main-theme-layout-1">
    <!-- Loader starts-->
    <!-- <div class="loader-wrapper">
      <div class="loader bg-white">
        <div class="whirly-loader"> </div>
      </div>
    </div> -->
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
      
      <!-- Page Body Start-->
      <!-- login page start-->
      <div class="authentication-main">
        <div class="row">
          <div class="col-md-12">
            <div class="auth-innerright">
              <div class="authentication-box">
                <div class="card mt-4">
                  <div class="card-body">
                    <div class="text-center">
                      <h4>LOGIN</h4>
                      <div class="card-body">
                      <h6>Enter your Username and Password </h6>
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                      <div class="form-floating">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email" autofocus>
                      </div>

                      <div class="form-group">
                        <label class="col-form-label">Password</label>
                        <input id="password" type="password" class="form-control " name="password" required autocomplete="current-password">
                      </div>

                      
                      <div class="form-group form-row mt-3 mb-0">
                        <button class="btn btn-primary btn-block" type="submit">Login</button>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                          Lupa Password?
                      </a>
                      </div>
                   
                      
      
                      <div class="form-group form-row mt-3 mb-0">
                        <a class="btn btn-secondary btn-block" href="{{ route('register') }}" type="submit">Registrasi</a>
                      </div>
      
                      
                     
      
                      <div class="login-divider"></div>
                      <div class="social mt-3">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- login page end-->
            <!-- Page Body End-->
          </div>
        </body>
      </html>