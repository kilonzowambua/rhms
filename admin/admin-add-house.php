<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
$type=$_POST['type'];
$status=$_POST['status'];
$location=$_POST['location'];
$rent=$_POST['rent'];
//$rent=$_POST['rent'];
$phoneno=$_POST['phoneno'];
$query="insert into house(type, status, location, rent,phoneno) values(?,?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('sssss',$type, $status, $location, $rent, $phoneno);
$stmt->execute();
echo"<script>alert('Succesfully Added House ');</script>";
}
?>

<?php include ("includes/head.php")?>

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
    
    <?php include("includes/navbar.php")?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-home"></i> Add House | Room</h3>
        <nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="#">Houses</a></li>
								<li class="breadcrumb-item  "><a href="#"></a>Add House</li>
                               
							</ol>
						</nav>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-edit"></i> Fill All The Details:</h4>
              <form method='post' action='#'>
										<div class="form-group">
											<label class="form-label">House Type</label>
											<input type="text"  id='type' name='type'  required  class="form-control" >
                                        </div>
                                        <div class="form-group">
											<label class="form-label">House Status</label>
											<input type="text" id='status' name='status'  required  class="form-control" >
                                        </div>
                                        <!--
                                        <div class="form-group">
											<label class="form-label">House Number</label>
											<input type="text" id='hse_number' name='hse_number' class="form-control" >
                                        </div>
-->
																				<div class="form-group">
											<label class="form-label">House Location</label>
											<input type="text" id='location' name='location' required class="form-control" >
                                        </div>

                                        <div class="form-group">
											<label class="form-label">House Rent Per Month</label>
											<input type="text" id='rent' name='rent' required class="form-control" >
                                        </div>
                                        <div class="form-group">
											<label class="form-label">Caretaker | Landlord Phone Number</label>
											<input type="text"  id='phoneno' name='phoneno'  required   class="form-control" >
                                        </div>
                                        
                                        <div class="col-sm-6 col-sm-offset-4">
          <input type="submit" name="submit" Value="Add House" class="btn btn-success ">
          </div>
									</form>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      </section>
      <!-- /wrapper -->
    </section>
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
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <!--custom switch-->
  <script src="lib/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="lib/jquery.tagsinput.js"></script>
  <!--custom checkbox & radio-->
  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
  <script src="lib/form-component.js"></script>

</body>

</html>
