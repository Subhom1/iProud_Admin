<div class="main-content">
<div class="content-inside">
<!-- Navbar -->
<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
   <div class="container-fluid">
      <!-- Brand -->
      <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="<?php echo base_url();?>index.php/pages/invite">Invite</a>
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
               <div class="dropdown-divider"></div>
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
<div class="header bg-gradient-red pb-7 pt-5 pt-md-8">
</div>
<div class="container-fluid mt--8">
   <div class="row">
      <div class="col-xl-6 mb-5 mb-xl-0">
         <div class="card bg-white shadow-lg">
            <div class="card-header bg-transparent">
               <div class="row align-items-center">
                  <div class="col">
                     <h2 class="text-danger mb-0">Invite Coach</h2>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <form action="<?php echo base_url();?>index.php/pages/inviteuser" method="POST">
                  <div class="row justify-content-center">
                     <div class="col-sm-8">
                        <div class="form-group focused">
                           <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Name" value="" name="fullname">
                        </div>
                     </div>
                  </div>
                  <div class="row justify-content-center">
                     <div class="col-sm-8">
                        <div class="form-group focused">
                           <input type="text" id="input-email" class="form-control form-control-alternative" placeholder="Email" value="" name="email">
                        </div>
                     </div>
                  </div>
                  <div class="row justify-content-center">
                     <div class="col-sm-4 form-group text-center">
                        <button  type="submit" class=" btn btn-outline-danger">Invite</button>
                     </div>
                     <p class="text-muted font-weight-bold  text-center small mt-2">*On inviting a coach, a welcome email will and auto generated password will be sent to registered email.</p>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <div class="col-xl-6 mb-5 mb-xl-0">
         <div class="card bg-white shadow-lg">
            <div class="card-header bg-transparent">
               <div class="row align-items-center">
                  <div class="col">
                     <h2 class="text-danger mb-0">Invite Trainee</h2>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <form action="<?php echo base_url();?>index.php/pages/inviteuser" method="POST">
                  <div class="row justify-content-center">
                     <div class="col-sm-8">
                        <div class="form-group focused">
                           <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Name" value="" name="fullname" required>
                        </div>
                     </div>
                  </div>
                  <div class="row justify-content-center">
                     <div class="col-sm-8">
                        <div class="form-group focused">
                           <input type="text" id="input-email" class="form-control form-control-alternative" placeholder="Email" value="" name="email" required>
                        </div>
                     </div>
                  </div>
                  <div class="row justify-content-center">
                     <div class="col-sm-4 form-group text-center">
                        <button type="submit" class="btn btn-outline-danger">Invite</button>
                     </div>
                     <p class="text-muted font-weight-bold text-center small mt-2">*On inviting a Trainee, a welcome email will and auto generated password will be sent to registered email.</p>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>