<?php
session_start();
include('includes/config.php');
//date_default_timezone_set('Africa /Nairobi');
include('includes/checklogin.php');
check_login();
$aid=$_SESSION['id'];
if(isset($_POST['update']))
{
    $pic=$_FILES["dpic"]["name"];
    //$id=intval($_GET['id']);
    move_uploaded_file($_FILES["dpic"]["tmp_name"],"img/profile_pic/".$_FILES["dpic"]["name"]);
$query="update client set  pic=? where id=?";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('si', $pic, $aid);
$stmt->execute();
echo"<script>alert('Your Profile Picture Has Been Updated Successfully');</script>";
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
							<?php echo $row->username;?>  Update Your Profile Profile Picture
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="client-dashoard.php">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="#">Profile</a></li>
								<li class="breadcrumb-item active" aria-current="page">Update Profile Picture</li>
							</ol>
						</nav>
					</div>
					<div class="row">
						<div class="col-12 col-xl-12">
							<div class="card">
								<div class="card-header">
									
									
								</div>
								<div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
												<label class="col-sm-4 control-label">Upload Your Profile Picture<span style="color:red">*</span></label>
												<div class="col-sm-8">
											<input type="file" name="dpic" required>
												</div>
											</div>
                                        </div>
                                        
                                        <div class="col-sm-6 col-sm-offset-4">
          <input type="submit" name="update" Value="Update Profile Picture" class="btn btn-success ">
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

</html>
<?}?>