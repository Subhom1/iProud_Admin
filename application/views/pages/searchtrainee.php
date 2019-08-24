<div class="main-content">
<div class="content-inside">
<!-- Navbar -->
<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
   <div class="container-fluid">
      <!-- Brand -->
      <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="<?php echo base_url();?>index.php/pages/trainee">Trainee</a>
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
<div class="header bg-gradient-red pb-6 pt-5 pt-md-8"></div>
<div class="container-fluid mt--8">
   <div class="row mt-5 justify-content-center">
      <div class="col-xl-10 mb-5 mb-xl-0">
         <div class="card shadow-lg">
            <div class="card-header border-0">
               <div class="row">
                  <div class="col-lg-7 mb-3">
                     <h3 class="mb-0">Trainees</h3>
                  </div>
                  <div class="col-lg-5 mb-3">
                     <form class="navbar-search navbar-search-light form-inline " action="<?php echo base_url();?>index.php/pages/searchtrainee" method="GET" >
                        <div class="form-group mb-0">
                           <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                 <i class="fas fa-search" style="color:#e1306ce6;" ></i>
                                 <input class="form-control searchbox" placeholder="Search" type="text" name="key">
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-5">
                     <div class="dropdown">
                        <button type="button" class="btn btn-danger btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">All Coaches</button>
                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 27px, 0px);">
                           <?php for($i=0;$i<count($coaches);$i++){?>
                           <a class="dropdown-item" href="<?php echo base_url();?>index.php/pages/coachtrainee/<?php echo $coaches[$i]['userid']?>"><?php echo $coaches[$i]['fullname'];?></a>
                           <?php }?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="card-body bg-white shadow-lg px-5 mb-0">
         <?php if(count($result)==0){?><h3 class="text-danger font-weight-light text-center">No Trainee Found</h3><?php }else{?>
            <?php foreach($result as $row){?>
            <div class="row">
               <div class="col-md-10 col-sm-10">
                  <div class="row justify-content-center">
                     <div class="col-lg-4">
                        <div class="row mb-2 justify-content-center">
                           <div class="col-sm-4">
                              <div class="avatar avatar-lg">
                                 <img class="img" src="<?php echo base_url();?>assets/img/theme/<?php echo $row['profilepic']?>.jpg" alt="img">
                              </div>
                           </div>
                           <div class="col-sm-8">
                              <div class="row">
                                 <h4 class="ml-3"><?php echo $row['fullname']?></h4>
                              </div>
                              <div class="row">
                                 <h5 class="ml-3"><?php echo $row['email']?></h5>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2">
                        <p class="small font-weight-bold"><span style="color:#e1306ce6;">Points :</span>&nbsp;<?php echo $row['totalpts']?></p>
                     </div>
                     <div class="col-lg-2 ">
                        <p class="small font-weight-bold"><span style="color:#e1306ce6;">Level :</span>&nbsp;<?php echo $row['userlevel'] == '' ? 0 : $row['userlevel']?></p>
                     </div>
                     <div class="col-lg-2">
                        <p class="small font-weight-bold"><span style="color:#e1306ce6;">Coach :</span>&nbsp;<?php echo $row['coachname']?></p>
                     </div>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2">
                  <div class="dropdown">
                     <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="fas fa-ellipsis-v"></i>
                     </a>
                     <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-160px, 31px, 0px);">
                        <a class="dropdown-item" href="<?php echo base_url();?>index.php/pages/profile/<?php echo $row['userid'];?>"><i class="fas fa-chart-bar text-danger"></i>Progress</a>
                        <a class="dropdown-item" href="<?php echo base_url();?>index.php/pages/editprofile/<?php echo $row['userid'];?>"><i class="fas fa-edit text-danger"></i>Edit</a>
                        <a class="dropdown-item" href="sendEmail?to=<?php echo $row['email'];?>"><i class="fas fa-envelope text-danger"></i>Resend Invitation</a>
                        <a class="dropdown-item" href="<?php echo base_url();?>index.php/pages/traineeDelete/<?php echo $row['userid'];?>" data-toggle="modal"><i class="fas fa-trash text-danger"></i>Delete</a>   
                     </div>
                  </div>
               </div>
            </div>
            <div class="col">
               <hr class="my-3">
            </div>
            <?php }?>
            <?php }?>
         </div>
         <!----------Pagination in Card Footer---------->
         <div class="card-footer py-3">
            
         </div>
      </div>
   </div>
</div>