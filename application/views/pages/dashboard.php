<div class="main-content">
<div class="content-inside">
<!-- Navbar -->
<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
   <div class="container-fluid">
      <!-- Brand -->
      <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="<?php echo base_url();?>index.php/pages/dashboard">Dashboard</a>
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
<div class="header bg-gradient-red pb-8 pt-5 pt-md-8">
   <div class="container-fluid mt--5">
      <div class="header-body">
         <!-- Card stats -->
         <div class="row mt-4">
            <div class="col-xl-3 col-lg-6">
               <div class="card card-stats mb-4 mb-xl-0">
                  <div class="card-body">
                     <div class="row">
                        <div class="col">
                           <h5 class="card-title text-uppercase text-muted mb-0">Total Trainee</h5>
                           <span class="h2 font-weight-bold mb-0"><?php echo $dstats['totaltrainee']; ?></span>
                        </div>
                        <div class="col-auto">
                           <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                              <i class="fas fa-chart-pie"></i>
                           </div>
                        </div>
                     </div>
                     <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span class="text-nowrap">Since last month</span>
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-6">
               <div class="card card-stats mb-4 mb-xl-0">
                  <div class="card-body">
                     <div class="row">
                        <div class="col">
                           <h5 class="card-title text-uppercase text-muted mb-0">Total Coaches</h5>
                           <span class="h2 font-weight-bold mb-0"><?php echo $dstats['totalcoach']; ?></span>
                        </div>
                        <div class="col-auto">
                           <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                              <i class="fas fa-chart-pie"></i>
                           </div>
                        </div>
                     </div>
                     <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 1.28%</span>
                        <span class="text-nowrap">Since last month</span>
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-6">
               <div class="card card-stats mb-4 mb-xl-0">
                  <div class="card-body">
                     <div class="row">
                        <div class="col">
                           <h5 class="card-title text-uppercase text-muted mb-0">Ratio (Coach:Trainee)</h5>
                           <span class="h2 font-weight-bold mb-0">1:<?php echo $dstats['percent']; ?></span>
                        </div>
                        <div class="col-auto">
                           <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                              <i class="fas fa-percent"></i>
                           </div>
                        </div>
                     </div>
                     <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-warning mr-2"> 1:<?php echo $dstats['percent']; ?></span>
                        <span class="text-nowrap">Last month</span>
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-6">
               <div class="card card-stats mb-4 mb-xl-0">
                  <div class="card-body">
                     <div class="row">
                        <div class="col">
                           <h5 class="card-title text-uppercase text-muted mb-0">Total users</h5>
                           <span class="h2 font-weight-bold mb-0"><?php echo $dstats['total']; ?></span>
                        </div>
                        <div class="col-auto">
                           <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                              <i class="fas fa-chart-pie"></i>
                           </div>
                        </div>
                     </div>
                     <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 2.2%</span>
                        <span class="text-nowrap">Since last month</span>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--------statistic graph-------->
<div class="container-fluid mt--7">
   <div class="row">
      <div class="col mb-5 mb-xl-0">
         <div class="card bg-gradient-default shadow">
            <div class="card-header bg-transparent">
               <div class="row align-items-center">
                  <div class="col">
                     <h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
                     <h2 class="text-white mb-0">Active Users</h2>
                  </div>
                  <div class="col">
                     <ul class="nav nav-pills justify-content-end">
                        <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales" data-update="{&quot;data&quot;:{&quot;datasets&quot;:[{&quot;data&quot;:[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}" data-prefix="" data-suffix="k">
                           <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                           <span class="d-none d-md-block">Month</span>
                           <span class="d-md-none">M</span>
                           </a>
                        </li>
                        <li class="nav-item" data-toggle="chart" data-target="#chart-sales" data-update="{&quot;data&quot;:{&quot;datasets&quot;:[{&quot;data&quot;:[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}" data-prefix="" data-suffix="k">
                           <a href="#" class="nav-link py-2 px-3" data-toggle="tab">
                           <span class="d-none d-md-block">Week</span>
                           <span class="d-md-none">W</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <!-- Chart -->
               <div class="chart">
                  <!-- Chart wrapper -->
                  <canvas id="chart-sales" class="chart-canvas"></canvas>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>