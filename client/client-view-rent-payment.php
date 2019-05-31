<?php
session_start();
include('includes/config.php');

include('includes/checklogin.php');
check_login();
$aid=$_SESSION['id'];?>
<?php include("includes/header.php")?>
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
		<?php include("includes/nav.php")?>
		<div class="main">
			<?php include("includes/head.php")?>
			<main class="content">
				<div class="container-fluid">

					<div class="header">
						<h1 class="header-title">
							My House
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="client-dashboard.php">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="#">Rent Payment</a></li>
								<li class="breadcrumb-item active" aria-current="page">View Rent Payment</li>
							</ol>
						</nav>
					</div>
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
					<div class="row" id='printMe'>
						<div class="col-12 ">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">My House Rent Payment Details</h5><?php }?> 
																	</div>
																	<table class="table">
									<thead>
										<tr>
                                            <th style="width:25%">Name</th>
											<th style="width:25%">House Type</th>
											<th style="width:25%">CreditRent</th>
											<th style="width:25%">DebitRent</th>
											<th style="width:25%">MpesaCode</th>
											<th style="width:25%">Time Paid</th>
                                            <th style="width:25%">Pending Payments</th>
											
										
											
										</tr>
									</thead>
									<tbody>
									<?php
                    $aid=$_SESSION['id'];
                   $ret="SELECT * FROM client where id=?";
                    $stmt= $mysqli->prepare($ret) ;
                    $stmt->bind_param('i',$aid);
                    $stmt->execute() ;//ok
                    $res=$stmt->get_result();
										$cnt=1;
										//$mysqlDateTime = "0000-00-00 00:00:00";
                    while($row=$res->fetch_object())
                    	  {
                    	  	?>
                     <td><?php echo $row->fname;?> <?php echo $row->mname;?> <?php echo $row->lname;?> </td>
										 <td><span class="badge badge-pill badge-success"><?php echo $row->housetype;?></span></td>
                    <td>Ksh <?php echo $row->creditrent;?></td>
										<td>Ksh <?php echo $row->debitrent;?></td>
										<td><span class="badge badge-dark"><?php echo $row->mpesacode;?></span></td>
										<td><?php echo $row->datepaid;?></td>
										<td>Ksh <?php echo $row->pendingrent;?></td>
									</tbody>
									<?php $cnt=$cnt+1; } ?>
									</tr>
								</table>
							</div>
							<script>
function printContent(el){
var restorepage = $('body').html();
var printcontent = $('#' + el).clone();
$('body').empty().html(printcontent);
window.print();
$('body').html(restorepage);
}
</script>
						</div>
						
					</div>

				</div>
				<button class='btn btn-outline-success' id="print" onclick="printContent('printMe');" >Print</button>
			</main>
			<?php include("includes/footer.php")?>
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


<!-- Mirrored from spark.bootlab.io/tables-bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 May 2019 11:33:49 GMT -->
</html>