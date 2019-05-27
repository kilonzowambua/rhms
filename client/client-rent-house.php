
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
$phoneno=$_POST['phoneno'];
$housetype=$_POST['housetype'];
$hselocation=$_POST['hselocation'];
$creditrent=$_POST['creditrent'];
$land_lord_phone=$_POST['land_lord_phone'];
//$passwordconf=md5($_POST['passwordconf']);
//$date = date('d-m-Y h:i:s', time());
$query="update client set fname=?, mname=?, lname=?, phoneno=?,housetype=?, creditrent=?, hselocation=?, land_lord_phone=? where id=?";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('ssssssssi', $fname, $mname, $lname, $phoneno, $housetype, $creditrent, $hselocation,$land_lord_phone, $aid);
$stmt->execute();
echo"<script>alert('House Renting  Successfully Proceed To Contact Caretaker/Landlord' );</script>";
}
?>
<?php include('includes/header.php')?>
<!-- SET YOUR THEME -->

<body class="theme-blue">
	<div class="splash active">
		<div class="splash-icon"></div>
	</div>

	<div class="wrapper">
		<?php include('includes/nav.php')?>
		<div class="main">
			<?php include('includes/head.php')?>
			<main class="content">
				<div class="container-fluid">
                <?php
      $aid=$_SESSION['id'];
      	$ret="select * from client where id=?";
      		$stmt= $mysqli->prepare($ret) ;
      	 $stmt->bind_param('i',$aid);
      	 $stmt->execute() ;//ok
      	 $res=$stmt->get_result();
      	 //$cnt=1;
      	   while($row=$res->fetch_object())
      	  {
      	  	?>
					<div class="header">
						<h1 class="header-title">
							<?php echo $row->username;?> You Can Rent House
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="client-dashoard.php">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="#">Rental House</a></li>
								<li class="breadcrumb-item active" aria-current="page">RentHouse</li>
							</ol>
						</nav>
					</div>
					<div class="row">
						<div class="col-12 col-xl-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title"> Fill All Required Information</h5>
									
								</div>
								<div class="card-body">
									<form method='post' action='#'>
										<div class="form-group">
											<label class="form-label">First Name</label>
											<input type="text"  id='fname' name='fname' value='<?php echo $row->fname;?>' readonly  class="form-control" >
                                        </div>
                                        <div class="form-group">
											<label class="form-label">Middle Name</label>
											<input type="text" id='mname' name='mname' value='<?php echo $row->mname;?>' readonly  class="form-control" >
                                        </div>
                                        <div class="form-group">
											<label class="form-label">Last Name</label>
											<input type="text" id='lname' name='lname' value='<?php echo $row->lname;?>' readonly class="form-control" >
                                        </div>
                                        <div class="form-group">
											<label class="form-label">My Phone Number</label>
											<input type="text"  id='phoneno' name='phoneno' value='<?php echo $row->phoneno;?>'  readonly  class="form-control" >
                                        </div>
					
						
									<h5 class="card-title mb-0">House Types || House Rents || House Locations</h5>
									<h4 class="badge badge-danger">Please Select The  Checkboxes Accordingly</h4>
									<?php
                    $aid=$_SESSION['id'];
                   $ret="SELECT * FROM house ";
                    $stmt= $mysqli->prepare($ret) ;
                  //$stmt->bind_param('i',$aid);
                    $stmt->execute() ;//ok
                    $res=$stmt->get_result();
                    //$cnt=1;
                    while($row=$res->fetch_object())
                    	  {
                    	  	?>
								<div class="card-body">
									<div>
							<label class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="housetype" id='housetype' value="<?php echo $row->type;?>" >
						<input class="form-check-input" type="radio" name="creditrent" id='creditrent' value="<?php echo $row->rent;?>" >
						<input class="form-check-input" type="radio" name="land_lord_phone" id='land_lord_phone' value="<?php echo $row->phoneno;?>" >
						<input class="form-check-input" type="radio" name="hselocation" id='hselocation' value="<?php echo $row->location;?>" >
            <span class="form-check-label">
           <?php echo $row->type;?> || Ksh <?php echo $row->rent;?> || <?php echo $row->phoneno;?> || <?php echo $row->location;?> 
            </span>
          </label>
									</div>
								</div>
							<?}?>
							
																				

									
								<!--										
								<h5 class="card-title mb-0">House Locations</h5>
								
							
								<?php
                    $aid=$_SESSION['id'];
                   $ret="SELECT * FROM house ";
                    $stmt= $mysqli->prepare($ret) ;
                  //$stmt->bind_param('i',$aid);
                    $stmt->execute() ;//ok
                    $res=$stmt->get_result();
                    //$cnt=1;
                    while($row=$res->fetch_object())
                    	  {
                    	  	?>
								<div class="card">
								<div class="card-body">
								
									<label class="custom-control custom-radio">
          <input name="hselocation" id='hselocation' type="radio" value='<?php echo $row->location;?>' class="custom-control-input ">												
          <span class="custom-control-label"><?php echo $row->location;?></span>
        </label>
			
								</div>
								<?}?> -->
							</div>		
                                        
                                        <div class="col-sm-6 col-sm-offset-4">
          <input type="submit" name="update" Value="Rent House" class="btn btn-success ">
          </div>
									</form>
								</div>
							</div>
						</div>
						

						

				</div>
			</main>
			<?php include('includes/footer.php')?>
		</div>

	</div>

	<svg width="0" height="0" style="position:absolute">
    <defs>
      <symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
        <path
          d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
        </path>
      </symbol>
    </defs>
  </svg>
	<script src="js/app.js"></script>

</body>


<!-- Mirrored from spark.bootlab.io/forms-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 May 2019 11:33:49 GMT -->
</html>
<?}?>