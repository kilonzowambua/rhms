<?php
session_start();
include('includes/config.php');
//date_default_timezone_set('Africa /Nairobi');
include('includes/checklogin.php');
check_login();
$aid=$_SESSION['id'];
if(isset($_POST['update']))
{

$type=$_POST['type'];
$location=$_POST['location'];
//=$_POST['lname'];
$rent=$_POST['rent'];
//$age=$_POST['age'];
$phoneno=$_POST['phoneno'];
//$email=$_POST['email'];
//$address=$_POST['address'];
//$username=$_POST['username'];
//$bio=$_POST['bio'];
//$password=md5($_POST['password']);
//$passwordconf=md5($_POST['passwordconf']);
//$date = date('d-m-Y h:i:s', time());
$query="update house set type=?, location=?, rent=?, phoneno=? where id=?";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('ssssi', $type,$location,$rent,$phoneno, $aid);
$stmt->execute();
echo"<script>alert('House Information  Has Been Updated Successfully');</script>";
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
              <?php	
	$id=$_GET['id'];
	$ret="select * from house where id=?";
	//code for getting rooms using a certain id
	$stmt= $mysqli->prepare($ret) ;
	 $stmt->bind_param('i',$id);
	 $stmt->execute() ;//ok
	 $res=$stmt->get_result();
	 //$cnt=1;
	   while($row=$res->fetch_object())
	  {
	  	?>
              <form method='post' action='#'>
										<div class="form-group">
											<label class="form-label">House Type</label>
											<input type="text"  id='type' name='type' value='<?php echo $row->type;?>'  required  class="form-control" >
                                        </div>
                                        <div class="form-group">
											<label class="form-label">House Status</label>
											<input type="text" id='status' name='status'  value="<?php echo $row->status;?>" required  class="form-control" >
                                        </div>

										<div class="form-group">
											<label class="form-label">House Location</label>
											<input type="text" id='location' name='location' value= '<?php echo $row->location;?>' required class="form-control" >
                                        </div>

                                        <div class="form-group">
											<label class="form-label">House Rent Per Month <span class='badge badge-primary badge-success'>KSh</span></label>
											<input type="text" id='rent' name='rent' value='<?php echo $row->rent;?>' required class="form-control" >
                                        </div>
                                        <div class="form-group">
											<label class="form-label">Caretaker | Landlord Phone Number</label>
											<input type="text"  id='phoneno' name='phoneno' value= '<?php echo $row->phoneno;?>' required   class="form-control" >
                                        </div>
                                        
                                        <div class="col-sm-6 col-sm-offset-4">
          <input type="submit" name="update" Value="Update Details" class="btn btn-warning">
          </div>
									</form>
                                    <?}?>
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
