<?php
session_start();
include('includes/config.php');
//date_default_timezone_set('Africa /Nairobi');
include('includes/checklogin.php');
check_login();
$aid=$_SESSION['id'];
if(isset($_POST['update']))
{

$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$national_id=$_POST['national_id'];
$age=$_POST['age'];
$phoneno=$_POST['phoneno'];
$email=$_POST['email'];
$address=$_POST['address'];
$username=$_POST['username'];
$bio=$_POST['bio'];
//$password=md5($_POST['password']);
//$passwordconf=md5($_POST['passwordconf']);
//$date = date('d-m-Y h:i:s', time());
$query="update client set fname=?, mname=?, lname=?, national_id=?, age=?, phoneno=?, email=?, address=?, username=?, bio=? where id=?";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('ssssssssssi', $fname, $mname, $lname, $national_id, $age,  $phoneno, $email, $address, $username, $bio, $aid);
$stmt->execute();
echo"<script>alert('Client Profile  Has Been Updated Successfully');</script>";
}
?>
<?php include("includes/head.php")?>

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
      <section class="wrapper">
        <h3><i class="fa fa-cloud-upload"></i> Update Client Profile</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="#">Clients</a></li>
								<li class="breadcrumb-item "><a href="#">Manage</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Clients</li>
							</ol>
						</nav>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              
              <form method='post' action='#'>
										<div class="form-group">
											<label class="form-label">First Name</label>
											<input type="text"  id='fname' name='fname' value='<?php echo $row->fname;?>'  class="form-control" >
                                        </div>
                                        <div class="form-group">
											<label class="form-label">Middle Name</label>
											<input type="text" id='mname' name='mname' value='<?php echo $row->mname;?>'  class="form-control" >
                                        </div>
                                        <div class="form-group">
											<label class="form-label">Last Name</label>
											<input type="text" id='lname' name='lname' value='<?php echo $row->lname;?>' class="form-control" >
                                        </div>

																				<div class="form-group">
											<label class="form-label">National ID Number</label>
											<input type="text" id='national_id' name='national_id' value='<?php echo $row->national_id;?>' class="form-control" >
                                        </div>

                                        <div class="form-group">
											<label class="form-label">My Age</label>
											<input type="text" id='age' name='age' value='<?php echo $row->age;?>'  class="form-control" >
                                        </div>
                                        <div class="form-group">
											<label class="form-label">My Phone Number</label>
											<input type="text"  id='phoneno' name='phoneno' value='<?php echo $row->phoneno;?>'   class="form-control" >
                                        </div>
                                        <div class="form-group">
											<label class="form-label">My EmailAddress</label>
											<input type="email" name='email' value='<?php echo $row->email;?>'  class="form-control" >
										</div>

										<div class="form-group">
																				<label class="form-label">My Address</label>
                           <textarea type="text"  name="address"  class='form-control' ></textarea>
                           </div>
										
										

                                        <div class="form-group">
																				<label class="form-label">My Bio</label>
                           <textarea type="text"  name="bio" value='<?php echo $row->bio;?>' class='form-control' ></textarea>
                           </div>
          
                                        <div class="form-group">
											<label class="form-label">My Username</label>
											<input type="text" id='username' name='username' value='<?php echo $row->username;?>'  class="form-control" >
                                        </div>
<!--
                                        <div class="form-group">
											<label class="form-label">My Password</label>
											<input type="text" id='password' name='password'   class="form-control" >
                                        </div>

										<div class="form-group">
											<label class="form-label w-100">Upload Profile Picture</label>
											<input type="file" name="pic" id="pic">
										</div>
            -->
                                        </div>
                                        
                                        <div class="col-sm-6 col-sm-offset-4">
          <input type="submit" name="update" Value="Update Profile" class="btn btn-warning ">
          </div>
									</form>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
        
        <!-- /row -->
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
<?}?>
