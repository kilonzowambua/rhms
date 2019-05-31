
<?php
session_start();
include('includes/config.php');
//date_default_timezone_set('Africa /Nairobi');
include('includes/checklogin.php');
check_login();
$aid=$_SESSION['id'];
if(isset($_POST['update']))
{

$name=$_POST['name'];
$username=$_POST['username'];
$e_address=$_POST['e_address'];
$bio=$_POST['bio'];
$pic=$_FILES["dpic"]["name"];
move_uploaded_file($_FILES["dpic"]["tmp_name"],"img/dpic/".$_FILES["dpic"]["name"]);
//$post=$_POST['post'];
//$phoneno=$_POST['phoneno'];
//$email=$_POST['email'];
//$address=$_POST['address'];
//$username=$_POST['username'];
//$bio=$_POST['bio'];
//$password=md5($_POST['password']);
//$passwordconf=md5($_POST['passwordconf']);
//$date = date('d-m-Y h:i:s', time());
$query="update admin set name=?, username=?, e_address=?, bio=?, pic=? where id=?";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('sssssi', $name, $username, $e_address, $bio, $pic, $aid);
$stmt->execute();
echo"<script>alert('Your Profile Has Been Updated Successfully');</script>";
}
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
 <?php include("includes/navbar.php")?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3>Admin Update Profile</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <div class=" form">
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
                <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="" enctype="multipart/form-data">
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Name</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="name" name="name" minlength="2" type="text" value='<?php echo $row->name;?>' required />
                    </div>
                    </div>
                    
                    <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Username</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="username" name="username" minlength="2" type="text" value='<?php echo $row->username;?>' required />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">E-Mail Address</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="e_address"  readonly type="email" name="e_address" value='<?php echo $row->e_address;?>' required />
                    </div>
                  </div>
                
                  <div class="form-group ">
                    <label for="ccomment" class="control-label col-lg-2">Your Bio</label>
                    <div class="col-lg-10">
                      <textarea class="form-control " id="bio" name="bio" required></textarea>
                    </div>
                  </div>

                  <div class="form-group">
												<label class="col-sm-4 control-label">Upload Your Profile Picture<span style="color:red">*</span></label>
												<div class="col-sm-8">
											<input type="file" name="dpic" required>
												</div>
											</div>

                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <input type='submit' name='update' class="btn btn-theme" value='submit'>
                      <button class="btn btn-theme04" type="button">Cancel</button>
                    </div>
                  </div>
                </form>
                <?php }?>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
         <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    
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
  <script src="lib/form-validation-script.js"></script>

</body>

</html>
