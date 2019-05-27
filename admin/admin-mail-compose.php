<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
$sender=$_POST['sender'];
$sendermail=$_POST['sendermail'];
$receiver=$_POST['receiver'];
$receivermail=$_POST['receivermail'];
$title=$_POST['title'];
$content=$_POST['content'];
$status=$_POST['status'];
//$password=md5($_POST['password']);

$query="insert into mail(sender, sendermail, receiver, receivermail, title, content, status ) values(?,?,?,?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('sssssss',$sender, $sendermail, $receiver, $receivermail, $title, $content, $status);
$stmt->execute();
echo"<script>alert('Mail Send');</script>";
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
        <!-- page start-->
        <div class="row mt">
          <div class="col-sm-3">
          <section class="panel">
           
           <div class="panel-body">
             <a href="admin-mail-compose.php" class="btn btn-compose">
               <i class="fa fa-pencil"></i>  Compose Mail
               </a>
               <?php
$result ="SELECT count(*) FROM mail";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($cnt);
$stmt->fetch();
$stmt->close();
?>
             <ul class="nav nav-pills nav-stacked mail-nav">
               <li class="active"><a href="admin-mail.php"> <i class="fa fa-inbox"></i> Inbox  <span class="label label-theme pull-right inbox-notification"><?php echo $cnt;?></span></a></li>
               <li><a href="#"> <i class="fa fa-envelope-o"></i> Send Mail</a></li>
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
                        <p><span class="label label-success"><?php echo $row->email;?></span></p>
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
          <div class="col-sm-9">
            <section class="panel">
              <header class="panel-heading wht-bg">
                <h4 class="gen-case">
                    Compose Mail
                    <form action="#" class="pull-right mail-src-position">
                      <div class="input-append">
                        <input type="text" class="form-control " placeholder="Search Mail">
                      </div>
                    </form>
                  </h4>
              </header>
              <div class="panel-body">
                <div class="compose-btn pull-right">
                  <button class="btn btn-theme btn-sm"><i class="fa fa-check"></i> Send</button>
                  <button class="btn btn-sm"><i class="fa fa-times"></i> Discard</button>
                  <button class="btn btn-sm">Draft</button>
                </div>
                <div class="compose-mail">
                <?php
      $aid=$_SESSION['id'];
      	$ret="select * from admin where id=?";
      		$stmt= $mysqli->prepare($ret) ;
      	 $stmt->bind_param('i',$aid);
      	 $stmt->execute() ;//ok
      	 $res=$stmt->get_result();
      	 //$cnt=1;
      	   while($row=$res->fetch_object())
      	  {
      	  	?>
                  <form role="form-horizontal" method="post" action="">
                  <div class="form-group">
                      <label for="from" clas;s="">From:</label>
                      <input type="text" tabindex="1" id="to" value='<?php echo $row->name;?>' readonly name='sender' class="form-control">
                      <div class="compose-options">
                        <a onclick="$(this).hide(); $('#cc').parent().removeClass('hidden'); $('#cc').focus();" href="javascript:;">Cc</a>
                        <a onclick="$(this).hide(); $('#bcc').parent().removeClass('hidden'); $('#bcc').focus();" href="javascript:;">Bcc</a>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="from" clas;s="">From:</label>
                      <input type="text" tabindex="1" id="to" value='<?php echo $row->e_address;?>' readonly name='sendermail' class="form-control">
                      <div class="compose-options">
                        <a onclick="$(this).hide(); $('#cc').parent().removeClass('hidden'); $('#cc').focus();" href="javascript:;">Cc</a>
                        <a onclick="$(this).hide(); $('#bcc').parent().removeClass('hidden'); $('#bcc').focus();" href="javascript:;">Bcc</a>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="to" clas;s="">To:</label>
                      <input type="text" tabindex="1" id="to" placeholder='Enter Receiver Name' name='receiver' class="form-control">
                      <div class="compose-options">
                        <a onclick="$(this).hide(); $('#cc').parent().removeClass('hidden'); $('#cc').focus();" href="javascript:;">Cc</a>
                        <a onclick="$(this).hide(); $('#bcc').parent().removeClass('hidden'); $('#bcc').focus();" href="javascript:;">Bcc</a>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="to" clas;s="">To</label>
                      <input type="text" tabindex="1" id="to" name='receivermail' placeholder='Enter Receiver Email' class="form-control">
                      <div class="compose-options">
                        <a onclick="$(this).hide(); $('#cc').parent().removeClass('hidden'); $('#cc').focus();" href="javascript:;">Cc</a>
                        <a onclick="$(this).hide(); $('#bcc').parent().removeClass('hidden'); $('#bcc').focus();" href="javascript:;">Bcc</a>
                      </div>
                    </div>

                  
                    <div class="form-group hidden">
                      <label for="cc" class="">Cc:</label>
                      <input type="text" tabindex="2" id="cc" class="form-control">
                    </div>
                    <div class="form-group hidden">
                      <label for="bcc" class="">Bcc:</label>
                      <input type="text" tabindex="2" id="bcc" class="form-control">
                    </div>

                    <div class="form-group hidden">
                      <label for="bcc" class=""></label>
                      <input type="text" tabindex="2" id="bcc" name='status' value='send' readonly class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="subject" class="">Subject:</label>
                      <input type="text" tabindex="1" id="subject" name='title' class="form-control">
                    </div>

                    <div class="compose-editor">
                      <textarea class="wysihtml5 form-control" name='content' rows="9"></textarea>

                    </div>

                    <input type="submit" name="submit" Value="Send" class="btn btn-theme btn-sm">
                     
                   </form>
                   <?}?>
                </div>
              </div>
            </section>
          </div>
        </div>
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
  <script type="text/javascript" src="lib/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
  <script type="text/javascript" src="lib/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

  <script type="text/javascript">
    //wysihtml5 start

    $('.wysihtml5').wysihtml5();

    //wysihtml5 end
  </script>
</body>

</html>
