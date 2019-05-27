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
	$ret="select * from rentalpayments where id=?";
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
      <section class="wrapper">
      
        <div class="col-lg-12 mt">
        <nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="#">Rent</a></li>
								<li class="breadcrumb-item "><a href="admin-manage-payments.php">Manage Rent Records</a></li>
                                <li class="breadcrumb-item active" aria-current="page">View Rent Details</li>
							</ol>
						</nav>
          <div class="row content-panel">
            <div class="col-lg-10 col-lg-offset-1">
            
              <div class="invoice-body">
                <div class="pull-left">
                 
               </div>
                <!-- /pull-left -->
                <div class="pull-right">
                  <h2>Rent Payment Record</h2>
                </div>
                <!-- /pull-right -->
                <div class="clearfix"></div>
                <br>
                <br>
                <br>
                <div class="row">
                  <div class="col-md-9">
                    <h4><?php echo $row->fname;?> <?php echo $row->lname;?></h4>
                    <address>
                  <strong><?php echo $row->email;?></strong><br>
                  <?php echo $row->national_id;?><br>
                  <?php echo $row->mpesacode;?><br>
                  <abbr title="Phone">P:</abbr><?php echo $row->phoneno;?>
                </address>
                  </div>
                  <!-- /col-md-9 -->
                  <div class="col-md-3">
                    <br>
                    <div>
                      <div class="pull-left"> RECEIPT NO : </div>
                      <div class="pull-right"> <?php echo $row->id;?> </div>
                      <div class="clearfix"></div>
                    </div>
                    <div>
                      <!-- /col-md-3 -->
                      <div class="pull-left"> RECEIPT DATE : </div>
                      <div class="pull-right"><?php echo $row->datepaid;?></div>
                     <div class="clearfix"></div>
                    </div>
                    <!-- /row -->
                    <br>
                    <div class="well well-small green">
                      <div class="pull-left"> Total Due : </div>
                      <div class="pull-right"> Ksh <?php echo $row->creditrent;?> </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                  <!-- /invoice-body -->
                </div>
                <!-- /col-lg-10 -->
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width:60px" class="text-center">#</th>
                      <th class="text-left">DESCRIPTION</th>
                      <th style="width:140px" class="text-right">DEBIT RENT</th>
                      <th style="width:90px" class="text-right">TOTAL PAID</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">1</td>
                      <td>House Rent For A <?php echo $row->housetype;?></td>
                      <td class="text-right">Ksh <?php echo $row->debitrent;?></td>
                      <td class="text-right">Ksh <?php echo $row->creditrent;?></td>
                    </tr>
                   
                    <tr>
                        <td colspan="2" rowspan="4">
                        <td class="text-right"><strong>Subtotal</strong></td>
                        <td class="text-right">Ksh <?php echo $row->debitrent;?></td>
                    </tr>
                    
                    <tr>
                      <td class="text-right no-border"><strong>VAT Included in Total</strong></td>
                      <td class="text-right">Ksh 0.00</td>
                    </tr>
                    <tr>
                      <td class="text-right no-border">
                        <div class="well well-small green"><strong>Total</strong></div>
                      </td>
                      <td class="text-right"><strong>Ksh <?php echo $row->debitrent;?></strong></td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <br>
              </div>
              <!--/col-lg-12 mt -->
      </section>
      <!-- /wrapper -->
    </section>
    <?}?>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
   <?php include("includes/footer.php")?>
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
