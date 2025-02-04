<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

?>
<?
if(isset($_GET['del']))
{
	$id=intval($_GET['del']);
	$adn="delete from rentalpayments where id=?";
		$stmt= $mysqli->prepare($adn);
		$stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();	   
        echo "<script>alert('Rent Payment Details Successfully Deleted');</script>" ;
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
    
    <section id="main-content">
      <section class="wrapper">
     
        <h3><i class="fa fa-cogs"></i> Manage Rent Payments Records</h3>
        <nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="#">Rent</a></li>
								<li class="breadcrumb-item active" aria-current="page">Manage Rent Payment Records</li>
							</ol>
						</nav>
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-users"></i> Rent Payment Records</h4>
                <hr>
                <thead>
                  <tr>
                    <th>Client Name</th>
                    <th>ID Number</th>
                    <th> Email ID</th>
                    <th> Phone No.</th>
                    <th> House Type.</th>
                    <th> House Rent</th>
                    <th> Rent Paid.</th>
                    <th> Payment Code.</th>
                    <th class="hidden-phone"> Action</th>
                    <th></th>
                  </tr>
                </thead>
                <?php
                    $aid=$_SESSION['id'];
                   $ret="SELECT * FROM rentalpayments ";
                    $stmt= $mysqli->prepare($ret) ;
                    //$stmt->bind_param('i',$aid);
                    $stmt->execute() ;//ok
                    $res=$stmt->get_result();
                    $cnt=1;
                    while($row=$res->fetch_object())
                    	  {
                    	  	?>
                <tbody>
                  <tr>
                    <td>
                      <a href="#"></a><?php echo $row->fname;?> <?php echo $row->lname;?></td>
                    <td class="hidden-phone"><?php echo $row->national_id;?></td>
                    <td><span class="label label-info label-mini"><?php echo $row->email;?></span></td>
                    <td class="hidden-phone"><?php echo $row->phoneno;?></td>
                    <td class="hidden-phone"><?php echo $row->housetype;?></td>
                    <td class="hidden-phone">Ksh <?php echo $row->creditrent;?></td>
                    <td class="hidden-phone">Ksh <?php echo $row->debitrent;?></td>
                    <td class="hidden-phone"><?php echo $row->mpesacode;?></td>
                    <td>
                    <a href='admin-view-single-payment.php?id=<?php echo $row->id;?>'><button class="btn btn-success btn-xs"><i class="fa fa-eye"></i></button></a>
                      <a href='admin-manage-payments.php?del=<?php echo $row->id;?>' onClick= "return confirm("Do you want to delete");"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                    </td>
                  </tr>              
                 
                </tbody>
                <?php $cnt=$cnt+1; } ?>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
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
  
</body>

</html>
