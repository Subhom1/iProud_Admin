<div class="col-lg-5 order-lg-2 mb-5 ">
         <div class="card card-profile shadow">
            <div class="row justify-content-center">
               <div class="col-lg-3 order-lg-2">
                  <div class="card-profile-image">
                     <a href="#">
                     <img src="<?php echo base_url();?>assets/img/theme/<?php echo $users['profilepic'];?>.jpg" class="rounded-circle">
                     </a>
                  </div>
               </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
               <div class="d-flex justify-content-between">
                  <!-- <a href="#" class="btn btn-sm btn-info mr-4">Message</a> -->
                  <a href="<?php echo base_url();?>index.php/pages/traineeDelete/<?php echo $users['userid'];?>" class="btn btn-sm btn-danger float-right">Delete user</a>
               </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
               <div class="row">
                  <div class="col">
                     <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                     </div>
                  </div>
               </div>
               <div class="text-center">
                  <h3><?php echo $users['fullname']; ?></h3>
                  <div class="h4 mt-3"><?php echo $users['gender'];?> - 28 Years Old </div>
                  <p>LEVEL - GRIZZLY BEAR</p>
                  <hr class="my-4">
                  <h2>Personal Details</h2>
                  <div class="row justify-content-end"><a href="<?php echo base_url();?>index.php/pages/editprofile/<?php echo $users['userid'];?>" class="btn btn-outline-danger btn-sm mr-2">Edit</a></div>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="row justify-content-center">
                  <div class="col-sm-4">
                     <h5 class="mt-2">Height:</h5>
                  </div>
                  <div class="col-sm-8">
                     <div class="form-group focused">
                        <input type="text" id="input-username" class="form-control form-control-alternative" readonly="" placeholder="Height" value="<?php echo $users['height'];?><?php echo $users['heightunit'];?>">
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-sm-4">
                     <h5 class="mt-2">Weight:</h5>
                  </div>
                  <div class="col-sm-8">
                     <div class="form-group focused">
                        <input type="text" id="input-username" class="form-control form-control-alternative"  readonly="" placeholder="Weight" value="<?php echo $users['weight'];?><?php echo $users['weightunit'];?>">
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-sm-4">
                     <h5 class="mt-2">Activity:</h5>
                  </div>
                  <div class="col-sm-8">
                     <div class="form-group focused">
                        <input type="text" id="input-username" class="form-control form-control-alternative" readonly="" placeholder="Activity" value="<?php echo $users['doexercise'];?>">
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-sm-4">
                     <h5 class="mt-2">Challenges:</h5>
                  </div>
                  <div class="col-sm-8">
                     <div class="form-group focused">
                        <input type="text" id="input-username" class="form-control form-control-alternative" readonly="" placeholder="Challenges" value="<?php echo $users['challengesfaceCSV'];?>">
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-sm-4">
                     <h5 class="mt-2">Looking for:</h5>
                  </div>
                  <div class="col-sm-8">
                     <div class="form-group focused">
                        <input type="text" id="input-username" class="form-control form-control-alternative" readonly="" placeholder="Looking for" value="<?php echo $users['needsCSV'];?>">
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-sm-4">
                     <h5 class="mt-2">Relationship Status:</h5>
                  </div>
                  <div class="col-sm-8">
                     <div class="form-group focused">
                        <input type="text" id="input-username" class="form-control form-control-alternative" readonly="" placeholder="Relationship Status" value="<?php echo $users['relationshipstatus'];?>">
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-sm-4">
                     <h5 class="mt-2">Children:</h5>
                  </div>
                  <div class="col-sm-8">
                     <div class="form-group focused">
                        <input type="text" id="input-username" class="form-control form-control-alternative" readonly="" placeholder="Children" value="<?php echo $users['noofchildren'];?>">
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-sm-4">
                     <h5 class="mt-2">Work Schedule:</h5>
                  </div>
                  <div class="col-sm-8">
                     <div class="form-group focused">
                        <input type="text" id="input-username" class="form-control form-control-alternative" readonly="" placeholder="Work Schedule" value="<?php echo $users['workingschedule'];?>">
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-sm-4">
                     <h5 class="mt-2">Working Hours (Weekly):</h5>
                  </div>
                  <div class="col-sm-8">
                     <div class="form-group focused">
                        <input type="text" id="input-username" class="form-control form-control-alternative" readonly="" placeholder="Working Hours (Weekly)" value="<?php echo $users['workingweekhours'];?>">
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-sm-4">
                     <h5 class="mt-2">Working Hours (Daily):</h5>
                  </div>
                  <div class="col-sm-8">
                     <div class="form-group focused">
                        <input type="text" id="input-username" class="form-control form-control-alternative" readonly="" placeholder="Working Hours (Daily)" value="<?php echo $users['workingdailyhours'];?>">
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-sm-4">
                     <h5 class="mt-2">Walking Hours (Weekly):</h5>
                  </div>
                  <div class="col-sm-8">
                     <div class="form-group focused">
                        <input type="text" id="input-username" class="form-control form-control-alternative" readonly="" placeholder="Walking Hours (Weekly)" value="Null">
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-sm-4">
                     <h5 class="mt-2">Walking Hours (Daily):</h5>
                  </div>
                  <div class="col-sm-8">
                     <div class="form-group focused">
                        <input type="text" id="input-username" class="form-control form-control-alternative" readonly="" placeholder="Walking Hours (Daily)" value="<?php echo $users['dailywalkinghours'];?>">
                     </div>
                  </div>
               </div>
               
               <div class="row justify-content-center">
                  <div class="col-sm-4">
                     <h5 class="mt-2">Bad habits:</h5>
                  </div>
                  <div class="col-sm-8">
                     <div class="form-group focused">
                        <input type="text" id="input-username" class="form-control form-control-alternative" readonly="" placeholder="Bad Habits" value="<?php echo $users['badhabitsCSV'];?>">
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-sm-4">
                     <h5 class="mt-2">Allergies:</h5>
                  </div>
                  <div class="col-sm-8">
                     <div class="form-group focused">
                        <input type="text" id="input-username" class="form-control form-control-alternative" readonly="" placeholder="Allergies" value="<?php echo $users['foodallergiesCSV'];?>">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>