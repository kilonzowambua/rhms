<?php
session_start();
include('includes/config.php');

include('includes/checklogin.php');
check_login();
$aid=$_SESSION['id'];?>

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
		<?php include("includes/nav.php")?>
		<div class="main">
			<?php include("includes/head.php")?>
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
					<div class="header text-center">
						<h1 class="header-title">
							Hello , Welcome Back  &nbsp;<?php echo $row->username;?>!
						</h1>
						
					</div>

					<div class="row">
						
					<div class="col-12 col-md-6 col-xxl-12 d-flex order-1 order-xxl-1">
							<div class="card flex-fill">
								<div class="card-header">
									<div class="card-actions float-right">
										<div class="dropdown show">
											<a href="#" data-toggle="dropdown" data-display="static">
              <i class="align-middle" data-feather="more-horizontal"></i>
            </a>

										</div>
									</div>
									<h5 class="card-title mb-0">Calendar</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="chart">
											<div id="datetimepicker-dashboard"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
	
						<div class="col-xl-5 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="card flex-fill bg-primary text-white">
											<div class="card-header">
												<h5 class="card-title text-white mb-0">My House</h5>
											</div>
											<div class="card-body py-3">
												<div class="row no-gutters">
													<div class="col-4 align-self-center text-left">
														<div class="icon icon-primary">
															<i class="align-middle" data-feather="home"></i>
														</div>
													</div>
													<div class="col-8 align-self-center text-right">
														<p class="text-white mb-1"><?php echo $row->housetype;?></p>
														
													</div>
												</div>
											</div>
										</div>
										<div class="card flex-fill bg-danger text-white">
											<div class="card-header">
												<h5 class="card-title text-white mb-0">Debit Rent</h5>
											</div>
											<div class="card-body py-3">
												<div class="row no-gutters">
													<div class="col-4 align-self-center text-left">
														<div class="icon icon-danger">
															<i class="align-middle" data-feather="trending-up"></i>
														</div>
													</div>
													<div class="col-8 align-self-center text-right">
														
														<h2 class="text-white">Ksh <?php echo $row->debitrent;?></h2>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card flex-fill bg-success text-white">
											<div class="card-header">
												<h5 class="card-title text-white mb-0">Credit Rent</h5>
											</div>
											<div class="card-body py-3">
												<div class="row no-gutters">
													<div class="col-4 align-self-center text-left">
														<div class="icon icon-success">
															<i class="align-middle" data-feather="dollar-sign"></i>
														</div>
													</div>
													<div class="col-8 align-self-center text-right">
														
														<h2 class="text-white">Ksh <?php echo $row->creditrent;?></h2>
													</div>
												</div>
											</div>
										</div>
										<div class="card flex-fill bg-warning text-white">
											<div class="card-header">
												<h5 class="card-title text-white mb-0">Pending Rent Payment</h5>
											</div>
											<div class="card-body py-3">
												<div class="row no-gutters">
													<div class="col-4 align-self-center text-left">
														<div class="icon icon-warning">
															<i class="align-middle" data-feather="cloud-lightning"></i>
														</div>
													</div>
													<div class="col-8 align-self-center text-right">
														
														<h2 class="text-white">Ksh <?php echo $row->pendingrent;?></h2>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					

				</div>
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

	
	<script>
		$(function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: 'pie',
				data: {
					labels: ["Chrome", "Firefox", "IE", "Other"],
					datasets: [{
						data: [4401, 4003, 1589],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger,
							"#E8EAED"
						],
						borderColor: "transparent"
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 60
				}
			});
		});
	</script>
	<script>
		$(function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: 'bar',
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Last year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79]
					}, {
						label: "This year",
						backgroundColor: "#E8EAED",
						borderColor: "#E8EAED",
						hoverBackgroundColor: "#E8EAED",
						hoverBorderColor: "#E8EAED",
						data: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							barPercentage: .75,
							categoryPercentage: .5,
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		$(function() {
			var mapData = {
				"US": 298,
				"SA": 200,
				"DE": 220,
				"FR": 540,
				"CN": 120,
				"AU": 760,
				"BR": 550,
				"IN": 200,
				"GB": 120,
			};
			$('#world_map').vectorMap({
				map: 'world_mill',
				backgroundColor: "transparent",
				zoomOnScroll: false,
				regionStyle: {
					initial: {
						fill: '#e4e4e4',
						"fill-opacity": 0.9,
						stroke: 'none',
						"stroke-width": 0,
						"stroke-opacity": 0
					}
				},
				series: {
					regions: [{
						values: mapData,
						scale: ["#0a6ebd"],
						normalizeFunction: 'polynomial'
					}]
				},
			});
		})
	</script>
	<script>
		$(function() {
			$('#datatables-dashboard').DataTable({
				pageLength: 6,
				lengthChange: false,
				bFilter: false,
				autoWidth: false
			});
		});
	</script>
	<script>
		$(function() {
			$('#datetimepicker-dashboard').datetimepicker({
				inline: true,
				sideBySide: false,
				format: 'L'
			});
		});
	</script>
</body>
</html>
<?php }?>