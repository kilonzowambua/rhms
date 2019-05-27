<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

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
        <!-- page start-->
        <div class="row mt">
          <div class="col-sm-3">
          <section class="panel">
           
           <div class="panel-body">
             <a href="admin-mail-compose.php" class="btn btn-compose">
               <i class="fa fa-pencil"></i>  Compose Mail
               </a>
               <?php
$result ="SELECT count(*) FROM mail where status = 'inbox' ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($inbox);
$stmt->fetch();
$stmt->close();
?>

<?php
$result ="SELECT count(*) FROM mail where status = 'send' ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($send);
$stmt->fetch();
$stmt->close();
?>
             <ul class="nav nav-pills nav-stacked mail-nav">
               <li class="active"><a href="admin-mail.php"> <i class="fa fa-inbox"></i> Inbox  <span class="label label-theme pull-right inbox-notification"><?php echo $inbox;?></span></a></li>
               <li><a href="admin-sent-mail.php"> <i class="fa fa-envelope-o"></i> Send Mail <span class="label label-theme pull-right inbox-notification"><?php echo $send;?></span> </a></li>
               </li>
               <li><a href="#"> <i class="fa fa-trash-o"></i> Trash</a></li>
             </ul>
           </div>
         </section>
            <section class="panel">
              <div class="panel-body">
              <ul class="nav nav-pills nav-stacked labels-info ">
                  <li>
                    <h4>Clients</h4>
                  </li>
                  <?php
                    $aid=$_SESSION['id'];
                   $ret="SELECT * FROM client ";
                    $stmt= $mysqli->prepare($ret) ;
                    //$stmt->bind_param('i',$aid);
                    $stmt->execute() ;//ok
                    $res=$stmt->get_result();
                    $cnt=1;
                    while($row=$res->fetch_object())
                    	  {
                    	  	?>
                  <li>
                    <a>
                        <img src="../client/img/profile_pic/<?php echo $row->pic;?>" class="img-circle" width="50"><?php echo $row->fname;?> <?php echo $row->lname;?>
                        <p><span class="label label-success"><?php echo $row->username;?></span></p>
                      </a>
                  </li>
                  <?php $cnt=$cnt+1; } ?>                      
                </ul>
                
                <div class="inbox-body text-center inbox-action">
                  <div class="btn-group">
                    <a class="btn mini btn-default" href="javascript:;">
                      <i class="fa fa-power-off"></i>
                      </a>
                  </div>
                  <div class="btn-group">
                    <a class="btn mini btn-default" href="javascript:;">
                      <i class="fa fa-cog"></i>
                      </a>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <?php	
	$id=$_GET['id'];
	$ret="select * from mail where id=?";
	//code for getting rooms using a certain id
	$stmt= $mysqli->prepare($ret) ;
	 $stmt->bind_param('i',$id);
	 $stmt->execute() ;//ok
	 $res=$stmt->get_result();
	 //$cnt=1;
	   while($row=$res->fetch_object())
	  {
	  	?>
          <div class="col-sm-9">
            <section class="panel">
              <header class="panel-heading wht-bg">
                <h4 class="gen-case">
                    View Message
                    <form action="#" class="pull-right mail-src-position">
                      <div class="input-append">
                        <input type="text" class="form-control " placeholder="Search Mail">
                      </div>
                    </form>
                  </h4>
              </header>
              <div class="panel-body ">
                <div class="mail-header row">
                  <div class="col-md-8">
                    <h4 class="pull-left"><?php echo $row->title;?></h4>
                  </div>
                  <div class="col-md-4">
                    <div class="compose-btn pull-right">
                      <a href="admin-mail-compose.php?id=<?php echo $row->id;?>" class="btn btn-sm btn-theme"><i class="fa fa-reply"></i> Reply</a>
                      <button class="btn  btn-sm tooltips" data-original-title="Print" type="button" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-print"></i> </button>
                      <button class="btn btn-sm tooltips" data-original-title="Trash" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-trash-o"></i></button>
                    </div>
                  </div>
                </div>
                <div class="mail-sender">
                  <div class="row">
                    <div class="col-md-8">
                      <?php echo $row->sender;?>
                      <span>[<?php echo $row->sendermail;?>]</span> to
                      <strong>me [<?php echo $row->receivermail;?>]</strong>
                    </div>
                    <div class="col-md-4">
                      <p class="date"><?php echo $row->tsend;?></p>
                    </div>
                  </div>
                </div>
                <div class="view-mail">
                  <p><?php echo $row->content;?></p>
                </div>
               
                <div class="compose-btn pull-left">
                <a href="admin-mail-compose.php?id=<?php echo $row->id;?>" class="btn btn-sm btn-theme"><i class="fa fa-reply"></i> Reply</a>
                  <button class="btn btn-sm "><i class="fa fa-arrow-right"></i> Forward</button>
                  <button class="btn  btn-sm tooltips" data-original-title="Print" type="button" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-print"></i> </button>
                  <button class="btn btn-sm tooltips" data-original-title="Trash" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-trash-o"></i></button>
                </div>
              </div>
            </section>
          </div>
        </div>
        <?}?>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
  <?php include('includes/footer.php')?>
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
