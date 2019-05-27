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
    <?php include('includes/navbar.php')?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
    
        <h3><i class="fa fa-home"></i>Houses</h3>
        <nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="#">Houses</a></li>
								<li class="breadcrumb-item active" aria-current="page">Occupied Houses</li>
							</ol>
						</nav>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                   <th>#</th>
                  <th>Client Name</th>
                  <th>House Rent</th>
                  <th>House Type</th>
                  <th>House Location</th>
                  <th>Caretaker | LandLord Phone No.</th>
                   
                  </tr>
                </thead>
                <?php
                    $aid=$_SESSION['id'];
                   $ret="SELECT fname,lname,housetype,hselocation,creditrent, land_lord_phone FROM client ";
                    $stmt= $mysqli->prepare($ret) ;
                    //$stmt->bind_param('i',$aid);
                    $stmt->execute() ;//ok
                    $res=$stmt->get_result();
                    $cnt=1;
                    while($row=$res->fetch_object())
                    	  {
                    	  	?>
                <tbody>
                  <tr class="gradeC">
                    <td><?php echo $cnt;?></td>
                    <td><?php echo $row->fname;?> <?php echo $row->lname;?></td>
                    <td>Ksh <?php echo $row->creditrent;?></td>
                    <td><?php echo $row->housetype;?></td>
                    <td class="hidden-phone"><?php echo $row->hselocation;?></td>
                    <td><?php echo $row->land_lord_phone;?></td>
                  </tr>
                  
                </tbody>
                <?php $cnt=$cnt+1; } ?>
              </table>
            </div>
          </div>
          <!-- page end-->
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
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  
</body>

</html>
