<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>iProud
      </title>
      <!-- Favicon -->
      <link href="<?php echo base_url();?>assets/img/brand/favicon.png" rel="icon" type="image/png">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
      <!-- Icons -->
      <!-- <link href="<?php echo base_url();?>assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet"> -->
      <link href="<?php echo base_url();?>assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
      <!-- CSS Files -->
      <link href="<?php echo base_url();?>assets/css/iproud.css" rel="stylesheet">
   </head>
   <body class="bg-default">
      <div class="main-content">
      <div class="content-inside">
      <!-- Navbar -->
      <!-- Header -->
      <div class="header bg-gradient-red py-7 py-lg-8">
         <div class="container">
            <div class="header-body text-center mb-7">
               <div class="row justify-content-center">
                  <div class="col-lg-5 col-md-6">
                     <h1 class="text-white display-2">Welcome Admin!</h1>
                     
                  </div>
               </div>
            </div>
         </div>
         <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
               <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
         </div>
      </div>
      <!-- Page content -->
      <div class="container mt--9">
         <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
               <div class="card bg-secondary shadow border-0">
                  <div class="card-body px-lg-4 py-lg-4">
                     <div class="row justify-content-center">
                        <img src="<?php echo base_url();?>assets/img/brand/pink.png" width="150px" height="50px" class="img img-fluid mt-3 mb-3">
                     </div>
                     <form  action="<?php echo base_url();?>index.php/pages/login_verify" method="POST">
                        <div class="form-group mt-3 ml-6">
                           <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                              </div>
                              <input class="form-control" placeholder="Email" type="email" name="email"  required>
                           </div>
                        </div>
                        <div class="form-group ml-6">
                           <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                              </div>
                              <input class="form-control" placeholder="Password" type="password" name="password" required>
                           </div>
                        </div>
               <?php if(isset($_GET['error'])){?><span class="d-block alert alert-danger p-2">Wrong Email / Password !</span><?php }?>
                           <!-- <div class="custom-control custom-control-alternative custom-checkbox ml-6">
                              <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                              <label class="custom-control-label" for=" customCheckLogin">
                              <span class="text-muted">Remember me</span>
                              </label>
                           </div> -->
                        <div class="form-group text-center">
                           <input class="btn btn-danger text-center my-4 text-white" type="submit" value="Login">
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <footer class="py-5">
            <div class="container">
               <div class="row align-items-center justify-content-xl-between">
                  <div class="col-xl-6">
                     <div class="copyright text-center text-xl-left text-muted">
                        © 2019 <a href="https://www.iproud.ai" class="font-weight-bold ml-1" target="_blank">iProud</a>
                     </div>
                  </div>
                  <div class="col-xl-6">
                     <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                        <li class="nav-item">
                           <a href="https://www.iproud.ai" class="nav-link" target="_blank">iProud</a>
                        </li>
                        <li class="nav-item">
                           <a href="https://www.iproud.ai" class="nav-link" target="_blank">About Us</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </footer>
      </div>
      <!--   Core   -->
      <script src="<?php echo base_url();?>assets/js/plugins/jquery/dist/jquery.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <!--   Optional JS   -->
      <!--   Argon JS   -->
      <script src="<?php echo base_url();?>assets/js/argon-dashboard.min.js?v=1.1.0"></script>
      <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
      <script>
         window.TrackJS &&
           TrackJS.install({
             token: "ee6fab19c5a04ac1a32a645abde4613a",
             application: "argon-dashboard-free"
           });
      </script>
   </body>
</html>