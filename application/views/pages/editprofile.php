<div class="main-content">
<div class="content-inside">
<!-- Navbar -->
<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
   <div class="container-fluid">
      <!-- Brand -->
      <div class="row">
      <i class="ni ni-bold-left text-white mt-1 mr-3" style="cursor:pointer;" 
      onClick="javascript:history.go(-1)"></i>
      <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="#"><h4 class="text-white"><?php echo $users['fullname'];?></h4></a>
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
<div class="container mt--8">
   <div class="row">
      <div class="col-xl-12">
         <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
               <div class="row align-items-center">
                  <div class="col-8">
                     <h3 class="mb-0">Edit Trainee Details</h3>
                  </div>
               </div>
            </div>
            <div class="card-body bg-white shadow-lg    ">
               <form action="<?php echo base_url();?>index.php/pages/updatetrainee/<?php echo $users['userid'];?>" method="POST">
                  <h6 class="heading-small text-muted mb-4">Trainee information</h6>
                  <div class="pl-lg-4">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label class="form-control-label" for="username">Full Name</label>
                              <input type="text" name="fullname" class="form-control form-control-alternative" value="<?php echo $users['fullname'];?>">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label class="form-control-label" for="email">Email address</label>
                              <input type="email" name="email" readonly="" class="form-control form-control-alternative" value="<?php echo $users['email'];?>">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label class="form-control-label" for="dob">Date of Birth</label>
                              <div class="input-group input-group-alternative">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                 </div>
                                 <input class="form-control datepicker" placeholder="Select date" type="text" value="<?php echo $users['dob'];?>" name="dob">
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label class="form-control-label d-block" for="email">Gender</label>
                              <label class="radio-inline mr-5 pt-3"><input type="radio" value="Male" name="gender" <?php if($users['gender']== 'Male'){echo 'checked';} ?>>  Male</label>
                              <label class="radio-inline mr-5 pt-3"><input type="radio" value="Female" name="gender" <?php if($users['gender']== 'Female'){echo 'checked';} ?>>  Female</label>
                              <label class="radio-inline mr-5 pt-3"><input type="radio" value="Prefer not to say" name="gender" <?php if($users['gender']== 'Prefer not to say'){echo 'checked';} ?>>  Prefer not to say</label>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label class="form-control-label d-block">Relationship Status</label>
                              <label class="radio-inline mr-5 pt-3"><input type="radio" value="Single" name="relationshipstatus" <?php if($users['relationshipstatus']== 'Single'){echo 'checked';} ?>>  Single</label>
                              <label class="radio-inline mr-5 pt-3"><input type="radio" value="Cohabitant" name="relationshipstatus" <?php if($users['relationshipstatus']== 'Cohabitant'){echo 'checked';} ?>>  Cohabitant</label>
                              <label class="radio-inline mr-5 pt-3"><input type="radio" value="Married" name="relationshipstatus" <?php if($users['relationshipstatus']== 'Married'){echo 'checked';} ?>>  Married</label>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label class="form-control-label d-block" for="email">Number of Children</label>
                              <label class="radio-inline mr-5 pt-3"><input type="radio" name="noofchildren" value="None" <?php if($users['noofchildren']== 'None'){echo 'checked';} ?>>  None</label>
                              <label class="radio-inline mr-5 pt-3"><input type="radio" name="noofchildren" value="One" <?php if($users['noofchildren']== 'One'){echo 'checked';} ?>>  One</label>
                              <label class="radio-inline mr-5 pt-3"><input type="radio" name="noofchildren" value="Two" <?php if($users['noofchildren']== 'Two'){echo 'checked';} ?>>  Two</label>
                              <label class="radio-inline mr-5 pt-3"><input type="radio" name="noofchildren" value="Three or more"<?php if($users['noofchildren']== 'Three or more'){echo 'checked';} ?>>  Three or more</label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <hr class="my-4">
                  <h6 class="heading-small text-muted mb-4">BMI Information</h6>
                  <div class="pl-lg-4">
                     <div class="row">
                        <div class="col-lg-2">
                           <div class="form-group">
                              <label class="form-control-label" for="height">Height</label>
                              <input type="text" name="height" class="form-control form-control-alternative" onkeyup="updateBMI()" value="<?php echo $users['height'];?>">
                           </div>
                        </div>
                        <div class="col-lg-2">
                           <div class="form-group">
                              <label class="form-control-label">Height Unit</label>
                              <select class="form-control" name="heightunit" onchange="updateBMI()" id="heightunit">
                                 <?php if($users['heightunit']  == "ft"){?>   
                                 <option value="cm">cm</option>
                                 <option value="ft" selected="">ft</option>
                                 <?php } else{?>
                                 <option value="cm" selected="">cm</option>
                                 <option value="ft">ft</option>
                                 <?php }?>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-2">
                           <div class="form-group">
                              <label class="form-control-label" for="weight">Weight</label>
                              <input type="text" name="weight"  class="form-control form-control-alternative" onkeyup="updateBMI()" value="<?php echo $users['weight'];?>">
                           </div>
                        </div>
                        <div class="col-lg-2">
                           <div class="form-group">
                              <label class="form-control-label">Weight Unit</label>
                              <select class="form-control"  onchange="updateBMI()" name="weightunit">
                              <?php if($users['weightunit']=="kg"){?>
                                 <option value="kg" selected="">kg</option>
                                 <option value="lbs">lbs</option>
                              <?php }else{?><option value="kg" >kg</option>
                                 <option value="lbs"selected="" >lbs</option>
                              <?php } ?>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="form-group">
                              <label class="form-control-label" for="bmi">BMI ( Auto-calculated )</label>
                              <input type="text" id="bmi" readonly="" class="form-control form-control-alternative" value="<?php echo $users['bmi']; ?>">
                           </div>
                        </div>
                     </div>
                  </div>
                  <hr class="my-4">
                  <h6 class="heading-small text-muted mb-4">User Preferences</h6>
                  <div class="pl-lg-4">
                     <div class="row mb-3">
                        <div class="col-lg-4">
                           <div class="form-group">
                           <label class="form-control-label d-block">Exercise Frequency</label>
                           <label class="radio-inline mr-3 pt-1">
                           <input type="radio" name="doexercise" value="No"<?php if($users['doexercise']== 'No'){echo 'checked';}?>>  No
                           </label>
                           <label class="radio-inline mr-3 pt-1">
                           <input type="radio" name="doexercise" value="Sometimes" <?php if($users['doexercise']== 'Sometimes'){echo 'checked';} ?>>  Sometimes
                           </label>
                           <label class="radio-inline pt-1">
                           <input type="radio" name="doexercise" value="Regularly"<?php if($users['doexercise']== 'Regularly'){echo 'checked';}?>>  Regularly
                           </label>
                           </div>
                        </div>
                        <div class="col-lg-8">
                           <div class="form-group">
                           <label class="form-control-label d-block">Working Schedule</label>
                           <label class="radio-inline mr-4 pt-1">
                           <input type="radio" name="workingschedule" value="8-4" <?php if($users['workingschedule']== '8-4'){echo 'checked';} ?>>  8-4
                           </label>
                           <label class="radio-inline mr-4 pt-1">
                           <input type="radio" name="workingschedule" value="Flexible" <?php if($users['workingschedule']== 'Flexible'){echo 'checked';} ?>>  Flexible
                           </label>
                           <label class="radio-inline mr-4 pt-1">
                           <input type="radio" name="workingschedule" value="Self Employed" <?php if($users['workingschedule']== 'Self Employed'){echo 'checked';} ?>>  Self Employed
                           </label>
                           <label class="radio-inline pt-1">
                           <input type="radio" name="workingschedule" value="Shifts" <?php if($users['workingschedule']== 'Shifts'){echo 'checked';} ?>>  Shifts
                           </label>
                           </div>
                        </div>
                     </div>
                     <hr>
                     <div class="row mb-3">
                        <div class="col-lg-12">
                           
                           <label class="form-control-label d-block">Challenges Faced</label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="challengesfaceCSV" value="Laziness" <?php $string=$users['challengesfaceCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'Laziness'){echo 'checked';} }?>>  Laziness
                           </label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="challengesfaceCSV" value="Don’t know where to start" <?php $string=$users['challengesfaceCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'Don’t know where to start'){echo 'checked';} }?>>  Don’t know where to start
                           </label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="challengesfaceCSV" value="No time"  <?php $string=$users['challengesfaceCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'No time'){echo 'checked';} }?>>  No time
                           </label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="challengesfaceCSV" value="No motivation" <?php $string=$users['challengesfaceCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'No motivation'){echo 'checked';} }?>>  No motivation
                           </label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="challengesfaceCSV" value="Not a priority" <?php $string=$users['challengesfaceCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'Not a priority'){echo 'checked';} }?>>  Not a priority
                           </label>
                           <label class="checkbox-inline pt-1">
                           <input type="checkbox" name="challengesfaceCSV" value="Injury" <?php $string=$users['challengesfaceCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'Injury'){echo 'checked';} }?>>  Injury
                           </label>
                        </div>
                     </div>
                     <hr>
                     <div class="row mb-3">
                        <div class="col-lg-12">
                           
                           <label class="form-control-label d-block">Needs</label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="needsCSV" value="Fitness Program" <?php $string=$users['needsCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'Fitness Program'){echo 'checked';} }?>>  Fitness Program
                           </label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="needsCSV" value="Exercise Buddy" <?php $string=$users['needsCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'Exercise Buddy'){echo 'checked';} }?>>  Exercise Buddy
                           </label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="needsCSV" value="Coach" <?php $string=$users['needsCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'Coach'){echo 'checked';} }?>>  Coach
                           </label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="needsCSV" value="Inspiration" <?php $string=$users['needsCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'Inspiration'){echo 'checked';} }?>>  Inspiration
                           </label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="needsCSV" value="Motivation" <?php $string=$users['needsCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'Motivation'){echo 'checked';} }?>>  Motivation
                           </label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="needsCSV" value="Competitions" <?php $string=$users['needsCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'Competitions'){echo 'checked';} }?>>  Competitions
                           </label>
                           <label class="checkbox-inline pt-1">
                           <input type="checkbox" name="needsCSV" value="Accountability" <?php $string=$users['needsCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'Accountability'){echo 'checked';} }?>>  Accountability
                           </label>
                                 
                        </div>
                     </div>
                     <hr>
                     <div class="row mb-3">
                        <div class="col-lg-12">
                          
                           <label class="form-control-label d-block">Working Hours ( weekly )</label>
                           <label class="radio-inline mr-3 pt-1">
                           <input type="radio" name="workingweekhours" value="Upto Ten" <?php if($users['workingweekhours']== 'Upto Ten'){echo 'checked';} ?>>  Upto Ten
                           </label>
                           <label class="radio-inline mr-3 pt-1">
                           <input type="radio" name="workingweekhours" value="Ten to Twenty" <?php if($users['workingweekhours']== 'Ten to Twenty'){echo 'checked';} ?>>  Ten to Twenty
                           </label>
                           <label class="radio-inline mr-3 pt-1">
                           <input type="radio" name="workingweekhours" value="Twenty to Forty" <?php if($users['workingweekhours']== 'Twenty to Forty'){echo 'checked';} ?>>  Twenty to Forty
                           </label>
                           <label class="radio-inline mr-3 pt-1">
                           <input type="radio" name="workingweekhours" value="Forty to Sixty or more" <?php if($users['workingweekhours']== 'Forty to Sixty or more'){echo 'checked';} ?>>  Forty to Sixty or more
                           </label>
                        
                        </div>
                     </div>
                     <hr>
                     <div class="row mb-3">
                        <div class="col-lg-12">
                          
                           <label class="form-control-label d-block">Working Hours ( Daily )</label>
                           <label class="radio-inline mr-3 pt-1">
                           <input type="radio" name="workingdailyhours" value="Less than One" <?php if($users['workingdailyhours']== 'Less than One'){echo 'checked';} ?>>  Less than One
                           </label>
                           <label class="radio-inline mr-3 pt-1">
                           <input type="radio" name="workingdailyhours" value="More than Five" <?php if($users['workingdailyhours']== 'More than Five'){echo 'checked';} ?>>  More than Five
                           </label>
                           <label class="radio-inline mr-3 pt-1">
                           <input type="radio" name="workingdailyhours" value="Four to Five" <?php if($users['workingdailyhours']== 'Four to Five'){echo 'checked';} ?>>  Four to Five
                           </label>
                           
                        
                        </div>
                     </div>
                     <hr>
                     <div class="row mb-3">
                        <div class="col-lg-12">
                           
                           <label class="form-control-label d-block">Walking Hours ( Regularly )</label>
                           <label class="radio-inline mr-3 pt-1">
                           <input type="radio" name="dailywalkinghours" value="Less than One" <?php if($users['dailywalkinghours']== 'Less than One'){echo 'checked';} ?>>  Less than One
                           </label>
                           <label class="radio-inline mr-3 pt-1">
                           <input type="radio" name="dailywalkinghours" value="Two to Three"<?php if($users['dailywalkinghours']== 'Two to Three'){echo 'checked';} ?>>  Two to Three
                           </label>
                           <label class="radio-inline mr-3 pt-1">
                           <input type="radio" name="dailywalkinghours" value="Four to Five" <?php if($users['dailywalkinghours']== 'Four to Five'){echo 'checked';} ?>>  Four to Five
                           </label>
                           <label class="radio-inline mr-3 pt-1">
                           <input type="radio" name="dailywalkinghours" value="More than Five" <?php if($users['dailywalkinghours']== 'More than Five'){echo 'checked';} ?>>  More than Five
                           </label>
                           
                        </div>
                     </div>
                     <hr>
                     <div class="row mb-3">
                        <div class="col-lg-12">
                           
                           <label class="form-control-label d-block">Bad Habits</label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="badhabitsCSV" id="badhabitssleep" onclick="deselectNoneOfbadhabits()" value="Don’t sleep enough" <?php $string=$users['badhabitsCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'Don’t sleep enough'){echo 'checked';} }?>>  Don’t sleep enough
                           </label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="badhabitsCSV" id="badhabitsalcohol" onclick="deselectNoneOfbadhabits()" value="Alcohol" <?php $string=$users['badhabitsCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'Alcohol'){echo 'checked';} }?>>  Alcohol
                           </label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="badhabitsCSV" id="badhabitssweet" onclick="deselectNoneOfbadhabits()" value="Love sweet things" <?php $string=$users['badhabitsCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'Love sweet things'){echo 'checked';} }?>>  Love sweet things
                           </label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="badhabitsCSV" id="badhabitssmoking" onclick="deselectNoneOfbadhabits()" value="Smoking" <?php $string=$users['badhabitsCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'Smoking'){echo 'checked';} }?>>  Smoking
                           </label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="badhabitsCSV" id="badhabitsdrugs" onclick="deselectNoneOfbadhabits()" value="Drugs" <?php $string=$users['badhabitsCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'Drugs'){echo 'checked';} }?>>  Drugs
                           </label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="badhabitsCSV" id="badhabitseatinghours" onclick="deselectNoneOfbadhabits()" value="Irregular eating hours" <?php $string=$users['badhabitsCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'Irregular eating hours'){echo 'checked';} }?>>  Irregular eating hours
                           </label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="badhabitsCSV" id="badhabitslittlewater" onclick="deselectNoneOfbadhabits()" value="Drink very little water" <?php $string=$users['badhabitsCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'Drink very little water'){echo 'checked';} }?>>  Drink very little water
                           </label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="badhabitsCSV" id="badhabitsnone" onclick="badhabitsnoneselected()" value="None" <?php $string=$users['badhabitsCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'None'){echo 'checked';} }?>>  None
                           </label>
                           
                        </div>
                     </div>
                     <hr>
                     <div class="row mb-3">
                        <div class="col-lg-12">
                           
                           <label class="form-control-label d-block">Allergies</label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="foodallergiesCSV" id="allergieseggs" onclick="deselectNoneOfallergies()" value="Eggs" <?php $string=$users['foodallergiesCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'Eggs'){echo 'checked';} }?>>  Eggs
                           </label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="foodallergiesCSV" id="allergiesfish" onclick="deselectNoneOfallergies()" value="Fish" <?php $string=$users['foodallergiesCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'Fish'){echo 'checked';} }?>>  Fish
                           </label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="foodallergiesCSV" id="allergiesmilk" onclick="deselectNoneOfallergies()" value="Milk" <?php $string=$users['foodallergiesCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'Milk'){echo 'checked';} }?>>  Milk
                           </label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="foodallergiesCSV" id="allergiesnuts" onclick="deselectNoneOfallergies()" value="Nuts" <?php $string=$users['foodallergiesCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'Nuts'){echo 'checked';} }?>>  Nuts
                           </label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="foodallergiesCSV" id="allergiesgroundnuts" onclick="deselectNoneOfallergies()" value="Groundnuts" <?php $string=$users['foodallergiesCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'Groundnuts'){echo 'checked';} }?>>  Groundnuts
                           </label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="foodallergiesCSV" id="allergiesshellfish" onclick="deselectNoneOfallergies()" value="Shellfish" <?php $string=$users['foodallergiesCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'Shellfish'){echo 'checked';} }?>>  Shellfish
                           </label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="foodallergiesCSV" id="allergiessoybean" onclick="deselectNoneOfallergies()" value="Soybean" <?php $string=$users['foodallergiesCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'Soybean'){echo 'checked';} }?>>  Soybean
                           </label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="foodallergiesCSV" id="allergieswheat" onclick="deselectNoneOfallergies()" value="Wheat" <?php $string=$users['foodallergiesCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'Wheat'){echo 'checked';} }?>>  Wheat
                           </label>
                           <label class="checkbox-inline mr-3 pt-1">
                           <input type="checkbox" name="foodallergiesCSV" id="allergiesnone" onclick="allergiesnoneselected()" value="None" <?php $string=$users['foodallergiesCSV'];$str_arr = explode (",", $string); 
                                                         for($i=0;$i<count($str_arr);$i++){if( $str_arr[$i] == 'None'){echo 'checked';} }?>>  None
                           </label>
                           
                        </div>
                     </div>
                  
                  <hr class="my-4">
                  
                  <button class="btn btn-danger text-center" type="submit">Update</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>