<!--------------Activity------------->
      <div class="col-lg-7 order-lg-1">
         <h1 class="font-weight-light text-grey">Activity Progress</h1>
         <div class="row justify-content-start mt-4">
            <div class="col-10">
            <?php foreach($usersact as $row){?>
               <div class="card card-stats mb-4">
                  <div class="card-body">
                     <div class="row">
                        <div class="col">
                           <h2 class="card-title text-uppercase text-danger text-weight-normal mb-0"><?php echo $row['pointsearned'];?> &nbsp;PTS</h2>
                           <span class="h4 font-weight-normal text-black mb-0"><?php echo $row['activityname']?></span>
                        </div>
                        <div class="col-auto">
                           <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                              <i class="fas fa-chart-bar"></i>
                           </div>
                        </div>
                     </div>
                     <div class="row ml-1 mt-4">
                        <div class="col-lg-3 p-0 m-0">
                           <div class="row">
                              <div class="col-lg-2 m-0"><i class="fa fa-clock fa-lg icon-shape-danger" data-toggle ="tooltip" data-placement="top" title="Last Activity Time" class="red-tooltip"></i></div>
                              <div class="col-lg-8 m-0"><p class="text-sm font-weight-bold">7 m ago</p></div>
                           </div>
                        </div>
                        <div class="col-lg-5 p-0 m-0">
                           <div class="row">
                              <div class="col-lg-2 m-0"><i class="fa fa-walking fa-lg icon-shape-danger" data-toggle ="tooltip" data-placement="top" title="Walking" class="red-tooltip"></i></div>
                              <div class="col-lg-8 p-0 m-0"><p class="text-sm font-weight-bold"><?php echo $row['activitytype']?> for <?php echo $hours = intval(($row['totalduration'])/60);?> h &nbsp;<?php echo $minutes = (intval($row['totalduration']) - ($hours * 60));?> m</p></div>
                              </div>
                           </div>
                        <div class="col-lg-3 p-0 m-0">
                           <div class="row">
                              <div class="col-lg-2 m-0">
                                 <i class="fa fa-fire  fa-lg icon-shape-danger" data-toggle ="tooltip" data-placement="top" title="Activity Level" class="red-tooltip"></i>
                              </div>
                              <div class="col-lg-8  m-0">
                                 <p class="text-sm font-weight-bold"><?php echo $row['notes']?></p>
                              </div>
                              </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php }?>
            </div>
         </div>
         <!---------Update Profile-------------->
      </div>
   </div>
</div>