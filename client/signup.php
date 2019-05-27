<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$national_id=$_POST['national_id'];
$phoneno=$_POST['phoneno'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=md5($_POST['password']);

$query="insert into client(fname,mname,lname,national_id,phoneno,email,username,password) values(?,?,?,?,?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('ssssssss',$fname,$mname,$lname,$national_id,$phoneno,$email,$username,$password);
$stmt->execute();
echo"<script>alert('Successfully Created Account Proceed To Log In ');</script>";
}
?>
<?php include('includes/header.php')?>
<!-- SET YOUR THEME -->

<body class="theme-blue">
	<div class="splash active">
		<div class="splash-icon"></div>
	</div>

	<main class="main h-100 w-100">
		<div class="container h-100">
			<div class="row h-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Create Account</h1>
							
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form method="post" action="" name="SignUP" >

										<div class="form-group">
											<label>First Name</label>
											<input class="form-control form-control-lg" type="text" name="fname" placeholder="Enter your Firstname" required="required"  />
										</div>

										<div class="form-group">
											<label>Middle Name</label>
											<input class="form-control form-control-lg" type="text" name="mname" placeholder="Enter your Middlename" required="required"  />
										</div>

										<div class="form-group">
											<label>Last Name</label>
											<input class="form-control form-control-lg" type="text" name="lname" placeholder="Enter your Lastname" required="required"  />
										</div>

										<div class="form-group">
											<label>National ID Number</label>
											<input class="form-control form-control-lg" type="text" name="national_id" placeholder="Enter your National ID Number" required="required"  />
										</div>

										<div class="form-group">
											<label>Phone Number</label>
											<input class="form-control form-control-lg" type="text" name="phoneno" placeholder="Enter your phone number" required="required"  />
										</div>

										<div class="form-group">
											<label>Username</label>
											<input class="form-control form-control-lg" type="text" name="username" placeholder="Enter your Username" required="required" />
										</div>

										<div class="form-group">
											<label>Email</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" required="required" />
										</div>

										<div class="form-group">
											<label>Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" required="required" />
										</div>

										<div class="text-center mt-3">
										<input type="submit" name="submit" Value="Create Account" class="btn  btn-success">
										<a href="index.php" class="btn  btn-primary btn-warning">Log In</a>
										</div>	
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

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


<!-- Mirrored from spark.bootlab.io/pages-sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 May 2019 11:33:49 GMT -->
</html>