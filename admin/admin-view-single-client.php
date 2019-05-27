<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

?>

<?php include('includes/head.php')?>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <?php include("includes/header.php")?>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->

   <?php include ("includes/navbar.php")?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <?php	
	$id=$_GET['id'];
	$ret="select * from client where id=?";
	//code for getting rooms using a certain id
	$stmt= $mysqli->prepare($ret) ;
	 $stmt->bind_param('i',$id);
	 $stmt->execute() ;//ok
	 $res=$stmt->get_result();
	 //$cnt=1;
	   while($row=$res->fetch_object())
	  {
	  	?>
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
        <nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="#">Clients</a></li>
								<li class="breadcrumb-item "><a href="#">Manage</a></li>
                                <li class="breadcrumb-item active" aria-current="page">View Client</li>
							</ol>
						</nav>
          <div class="col-lg-12">
            <div class="row content-panel">
              <div class="col-md-4 profile-text mt mb centered">
                <div class="right-divider hidden-sm hidden-xs">
                  <h4><?php echo $row->housetype;?></h4>
                  <h6>HOUSE TYPE</h6>

                  <h4><?php echo $row->hselocation;?></h4>
                  <h6>HOUSE LOCATION</h6>

                  <h4>Ksh <?php echo $row->debitrent;?></h4>
                  <h6>HOUSE RENT</h6>

                  <h4><?php echo $row->national_id;?></h4>
                  <h6>NATIONAL ID NUMBER</h6>

                  <h4><?php echo $row->username;?></h4>
                  <h6>USERNAME</h6>

                  <h4><?php echo $row->password;?></h4>
                  <h6>PASSWORD</h6>
                  
                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 profile-text">
                <h3><?php echo $row->fname;?> <?php echo $row->mname;?> <?php echo $row->lname;?></h3>
                <h6>Client</h6>
                <p><?php echo $row->bio;?></p>
                <br>
                <p><button class="btn btn-theme"><i class="fa fa-phone"></i> <?php echo $row->phoneno;?></button></p>
                <p><button class="btn btn-theme"><i class="fa fa-envelope"></i> <?php echo $row->email;?></button></p>
                <p><button class="btn btn-theme"><i class="fa fa-map-marker"></i> <?php echo $row->address;?></button></p>
                
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                <div class="profile-pic">
                  <p><img src="../client/img/profile_pic/<?php echo $row->pic;?>" class="img-circle"></p>
                  
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /col-lg-12 -->
          
          <!-- /row -->
        </div>
        <!-- /container -->
      </section>
      <!-- /wrapper -->
    </section>
    <?}?>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="profile.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <!-- MAP SCRIPT - ALL CONFIGURATION IS PLACED HERE - VIEW OUR DOCUMENTATION FOR FURTHER INFORMATION -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
  <script>
    $('.contact-map').click(function() {

      //google map in tab click initialize
      function initialize() {
        var myLatlng = new google.maps.LatLng(40.6700, -73.9400);
        var mapOptions = {
          zoom: 11,
          scrollwheel: false,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'Dashio Admin Theme!'
        });
      }
      google.maps.event.addDomListener(window, 'click', initialize);
    });
  </script>
</body>

</html>
