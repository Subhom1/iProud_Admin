<div class="main-content">
<div class="content-inside">
<!-- Navbar -->
<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
   <div class="container-fluid">
      <!-- Brand -->
      <div class="row">
      <i class="ni ni-bold-left text-white mt-1 mr-3" style="cursor:pointer;" 
      onClick="javascript:history.go(-1)"></i>
      <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="#">EDIT COACH</a>
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
<div class="header bg-gradient-primary pb-6 pt-5 pt-md-8">
</div>

<div class="container mt--7">
   <div class="row">
      <div class="col-xl-12">
         <div class="card shadow-lg">
            <div class="card-header bg-white border-0">
               <div class="row align-items-center">
                  <div class="col-8">
                     <h3 class="mb-0">Coach Details</h3>
                  </div>
               </div>
            </div>
            <div class="card-body bg-white shadow-lg    ">
               <form action="<?php echo base_url();?>index.php/pages/coachupdate/<?php echo $coaches['userid']?>" method="POST">
                  <h6 class="heading-small text-muted mb-4">Coach information</h6>
                  <div class="pl-lg-4">
                     
                    <div class="row">
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label class="form-control-label" for="username">Full Name</label>
                              <input type="text" id="fullname" class="form-control form-control-alternative" name ="fullname" value="<?php echo $coaches['fullname']?>">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label class="form-control-label" for="email">Email address</label>
                              <input type="email" id="email" readonly="" class="form-control form-control-alternative" name ="email" value="<?php echo $coaches['email']?>">
                           </div>
                        </div>
                     </div><div class="row">
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label class="form-control-label" for="username">Bio</label>
                              <textarea class="form-control form-control-alternative" name="bio" rows="10" cols="50"><?php echo $coaches['bio']?></textarea>
                              <!-- <input type="text" id="fullname" class="form-control form-control-alternative bio" value="Lorem ipsum dolor sit amet consectetur adipisicing elit."> -->
                           </div>
                        </div>                  
                     </div>
                  </div>
                  <div class="form-group">
                  <hr class="my-4">
                  <button class="btn btn-danger text-center" type="submit">Update</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div></div>
</div>