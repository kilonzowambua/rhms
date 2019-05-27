
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
$post=$_POST['post'];
$dpic=$_FILES["dpic"]["name"];
move_uploaded_file($_FILES["dpic"]["tmp_name"],"img/dpic/".$_FILES["dpic"]["name"]);
//$phoneno=$_POST['phoneno'];
//$email=$_POST['email'];
//$address=$_POST['address'];
//$username=$_POST['username'];
//$bio=$_POST['bio'];
//$password=md5($_POST['password']);
//$passwordconf=md5($_POST['passwordconf']);
//$date = date('d-m-Y h:i:s', time());
$query="update admin set name=?, username=?, e_address=?, dpic=?, bio=?, post=?,  where id=?";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('ssssssi', $name, $username, $e_address, $dpic, $bio, $post, $aid);
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
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="row content-panel">
              <div class="col-md-4 profile-text mt mb centered">
                <div class="right-divider hidden-sm hidden-xs">
                <?php
//code for getting all values from regestration table
$result ="SELECT count(*) FROM client ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
?>
                  <h4><?php echo $count;?></h4>
                  <h6>Clients</h6>
                  <?php
//code for getting all values from regestration table
$result ="SELECT count(*) FROM house ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
?>
                  <h4><?php echo $count;?></h4>
                  <h6>Houses</h6>
                  <?
$result ="SELECT SUM(creditrent) FROM rentalpayments";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
?>

                  <h4>Ksh <?php echo $count;?></h4>
                  <h6>TOTAL EARNINGS</h6>
                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 profile-text">
                <h3><?php echo $row->name;?></h3>
               
                <p><?php echo $row->e_address;?></p>
               <p><?php echo $row->bio;?></p>
                <br>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                <div class="profile-pic">
                  <p><img src="img/dpic/<?php echo $row->pic;?>" class="img-circle"></p>
                  
                </div>
              </div>
              
              <!-- /col-md-4 -->
              </div>
            <!-- /row -->
          </div>
          <!-- /col-lg-12 -->
        
            
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
            <!-- /col-lg-12 -->
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
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
  <!-- MAP SCRIPT - ALL CONFIGURATION IS PLACED HERE - VIEW OUR DOCUMENTATION FOR FURTHER INFORMATION -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
  <script>
    $('.contact-map').click(function() {

      //google map in tab click initialize
      function initialize() {
        var myLatlng = new google.maps.LatLng(40.6700, -73.9400);
        var mapOptions = {
          zoom: 11,
          scrollwheel: false,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: ''
        });
      }
      google.maps.event.addDomListener(window, 'click', initialize);
    });
  </script>
</body>

</html>
<?}?>
