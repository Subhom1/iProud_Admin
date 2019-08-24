</div>
</div>
<!------(footer-modeular-start)-------->

<!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-start text-muted">
              &copy; 2019 <a href="https://www.iproud.ai" class="font-weight-bold ml-1"  target="_blank">iProud</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-start">
              <li class="nav-item">
                <a href="https://www.iproud.ai" class="nav-link" target="_blank">iProud</a>
              </li>
              <li class="nav-item">
                <a href="https://www.iproud.ai" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://iproud.ai" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    
  
 <!--------js---------->
 <script>

 function fun(){
   Swal.fire('Any fool can use a computer');

 }
 function badhabitsnoneselected(){
$('#badhabitssleep').prop('checked',false);
$('#badhabitsalcohol').prop('checked',false);
$('#badhabitssweet').prop('checked',false);
$('#badhabitssmoking').prop('checked',false);
$('#badhabitsdrugs').prop('checked',false);
$('#badhabitseatinghours').prop('checked',false);
$('#badhabitslittlewater').prop('checked',false);
}
function allergiesnoneselected(){
$('#allergieseggs').prop('checked',false);
$('#allergiesfish').prop('checked',false);
$('#allergiesmilk').prop('checked',false);
$('#allergiesnuts').prop('checked',false);
$('#allergiesgroundnuts').prop('checked',false);
$('#allergiesshellfish').prop('checked',false);
$('#allergiessoybean').prop('checked',false);
$('#allergieswheat').prop('checked',false);
}
function deselectNoneOfbadhabits(){
$('#badhabitsnone').prop('checked',false);
}
function deselectNoneOfallergies(){
$('#allergiesnone').prop('checked',false);
}
</script>


  <!--   Core   -->
  <script src="<?php echo base_url();?>assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="<?php echo base_url();?>assets/js/plugins/chart.js/dist/Chart.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
  </noscript>
  
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

<!------(footer-modeular-end)-------->