<div class="main-content">
<div class="content-inside">
<!-- Navbar -->
<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
   <div class="container-fluid">
      <!-- Brand -->
      <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="<?php echo base_url();?>index.php/pages/coach">Coach</a>
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
<div class="header bg-gradient-red pb-6 pt-5 pt-md-8">
</div>
<div class="container-fluid mt--8">
   <div class="row mt-5 justify-content-center">
      <div class="col-xl-10 mb-5 mb-xl-0">
         <div class="card shadow-lg">
            <div class="card-header border-0">
               <div class="row">
                  <div class="col-lg-7 mb-3">
                     <h3 class="mb-0">Coaches</h3>
                  </div>
                  <div class="col-lg-5 mb-3">
                     <form class="navbar-search navbar-search-light form-inline ">
                        <div class="form-group mb-0">
                           <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                 <i class="fas fa-search" style="color:#e1306ce6;"></i>
                                 <input class="form-control searchbox" placeholder="Search" type="text">
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div class="card-body bg-white shadow-lg px-5 mb-0">
         <?php if(count($result)==0){?><h3 class="text-danger font-weight-light text-center">No Coach Found</h3><?php }else{?> 
            <?php foreach($result as $row){?>
            <div class="row justify-content-center">
               <div class="col-lg-1 col-md-3 col-sm-auto">
                  <div class="avatar avatar-lg ml-md-1">  
                     <img class="img" src="<?php echo base_url();?>assets/img/theme/<?php echo $row['profilepic'];?>.jpg" alt="img">
                  </div>
               </div>
               <div class="col-lg-3 text-center">
                  <h4 class=""><?php echo $row['fullname'];?></h4><h5 class=""><?php echo $row['email'];?></h5>
                  
               </div>
               <div class="col-lg-3">
                  <p class="small text-center"><?php echo $row['bio'];?></p>
               </div>
               <div class="col-lg-3 text-center">
                  <div class="row">
                     <div class="col-sm-3"><a href="<?php echo base_url();?>index.php/pages/coachtrainee/<?php echo $row['userid'];?>" data-toggle="tooltip" data-placement="top" title="" class="red-tooltip" data-original-title="Trainees"><i class="fas fa-users"></i></a></div>
                     <div class="col-sm-3"><a href="<?php echo base_url();?>index.php/pages/coachedit/<?php echo $row['userid'];?>" data-toggle="tooltip" data-placement="top" title="" class="red-tooltip" data-original-title="Edit"><i class="far fa-edit"></i></a></div>
                     <div class="col-sm-3"><a href="<?php echo base_url();?>index.php/pages/sendMail" data-toggle="tooltip" data-placement="top" title="" class="red-tooltip" data-original-title="Resend Invitation"><i class="fas fa-paper-plane"></i></a></div>
                     <div class="col-sm-3"><a href="<?php echo base_url();?>index.php/pages/coachDelete/<?php echo $row['userid'];?>" data-toggle="tooltip" data-placement="top" title="" class="red-tooltip" data-original-title="Delete"><i class="fas fa-trash-alt"></i></a></div>
                  </div>
               </div>
            </div>
            <div class="col">
               <hr class="my-3">
            </div>
            <?php }?>
         <?php }?>
         </div>
         <div class="card-footer py-3">
            
         </div>
      </div>
   </div>
</div>