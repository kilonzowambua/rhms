<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
//$=$_POST['mname'];
$lname=$_POST['lname'];
$national_id=$_POST['national_id'];
$phoneno=$_POST['phoneno'];
$email=$_POST['email'];
$housetype=$_POST['housetype'];
$debitrent=$_POST['debitrent'];
$creditrent=$_POST['creditrent'];
$mpesacode=$_POST['mpesacode'];
//$creditrent=$_POST['creditrent'];

$query="insert into rentalpayments (fname,lname,national_id,phoneno,email,housetype,debitrent,creditrent,mpesacode) values(?,?,?,?,?,?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('sssssssss',$fname,$lname,$national_id,$phoneno,$email,$housetype,$creditrent,$debitrent,$mpesacode);
$stmt->execute();	{
	header("location:client-invoice.php");
}}
?>
<?php include('includes/header.php')?>
<!-- SET YOUR THEME -->

<body class="theme-blue">
	<div class="splash active">
		<div class="splash-icon"></div>
	</div>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5cde8710d07d7e0c63940fe9/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
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
						
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="client-dashoard.php">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="#">Rent</a></li>
								<li class="breadcrumb-item active" aria-current="page">Confirm Rent Payment</li>
							</ol>
						</nav>
					</div>
					<div class="row">
						<div class="col-12 col-xl-12">
							<div class="card">
								<div class="card-header">
									<h2 class="card-title"><span class="badge badge-pill b badge-success">Successfully Paid Rent Please Fill This Payment Confirmation Form </h2></span>
									
								</div>
								<div class="card-body">
									<form method='post' action='#'>
										<div class="form-group">
											<label class="form-label">First Name</label>
											<input type="text"  id='fname' name='fname' value='<?php echo $row->fname;?>'  readonly class="form-control" >
                                        </div>
                                        
                                        <div class="form-group">
											<label class="form-label">Last Name</label>
											<input type="text" id='lname' name='lname' value='<?php echo $row->lname;?>' readonly class="form-control" >
                                        </div>
                                        
                                        <div class="form-group">
											<label class="form-label">My National ID Number</label>
											<input type="text"  id='national_id' name='national_id' value='<?php echo $row->national_id;?>'   readonly class="form-control" >
                                        </div>

                                        <div class="form-group">
											<label class="form-label">My Phone Number</label>
											<input type="text"  id='phoneno' name='phoneno' value='<?php echo $row->phoneno;?>'   readonly class="form-control" >
                                        </div>

                                        <div class="form-group">
											<label class="form-label">My EmailAddress</label>
											<input type="email" name='email' value='<?php echo $row->email;?>' readonly class="form-control" >
										</div>
										
										<div class="form-group">
											<label class="form-label">My House Type</label>
											<input type="text" name='housetype' value=<?php echo $row->housetype;?> readonly class='form-control' required='required'>
                                        </div>
																				
                                        <div class="form-group">
											<label class="form-label">My DebitRent</label>
											<input type="text" name='debitrent' id='debitrent' value='<?php echo $row->debitrent;?> ' readonly class='form-control' required='required'>
                                        </div>

																				<div class="form-group">
											<label class="form-label">Credit Rent</label>
											<input type="text" name='creditrent' id='creditrent' value='<?php echo $row->creditrent;?> ' readonly  class='form-control' required='required' >
                                        </div>

																				<div class="form-group">
											<label class="form-label">Mpesa Transaction Code <span class="badge badge-pill badge-danger">10 Digit Code</span></label>
											<input type="text" name='mpesacode' id='mpesacode' placeholder='<?php echo $row->mpesacode;?>'  class='form-control' required='required' >
                                        </div>

                                        </div>
                                        
                                        <div class="col-sm-6 col-sm-offset-4">
          <input type="submit" name="submit" Value=" Confirm Payment" class="btn btn-success">
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
<?php }?>