<div class="main-content">
<div class="content-inside">
<!-- Navbar -->
<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
   <div class="container-fluid">
      <!-- Brand -->
      <div class="row"><i class="ni ni-bold-left text-white mt-1 mr-3" style="cursor:pointer;" 
      onClick="javascript:history.go(-1)"></i>
      <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="#">Trainee Profile</a>
      </div>
      <!-- User -->
      <ul class="navbar-nav align-items-center d-none d-md-flex">
         <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="<?php echo base_url();?>assets/img/theme/admin.png">
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
                     <span class="mb-0 text-sm  font-weight-bold">Admin</span>
                  </div>
               </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
               <div class=" dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome! Admin</h6>
               </div>
               <a href="<?php echo base_url();?>index.php/pages/logout" class="dropdown-item">
               <i class="ni ni-user-run"></i>
               <span>Logout</span>
               </a>
            </div>
         </li>
      </ul>
   </div>
</nav>
<!-- End Navbar -->
<!-- Header -->
<div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="max-height: 500px; background-image: url(<?php echo base_url();?>assets/img/theme/profile-cover.jpg); background-size: cover; background-position:center top;">
   <!-- Mask -->
   <span class="mask bg-gradient-red opacity-7"></span>
   <!-- Header container -->
   <div class="container-fluid d-flex align-items-center">
      <div class="row">
         <div class="col-lg-12">
            <h1 class="display-2 text-white">Hello!</h1>
            <h1 class="display-2 text-white"><?php echo $users['fullname'];?></h1>
            <!-- <a href="#!" class="btn btn-info">Edit profile</a> -->
         </div>
      </div>
   </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--7">
   <!--------------------Trainee Details---------------------->
   <div class="row">
      
      