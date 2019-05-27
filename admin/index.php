<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$e_address=$_POST['e_address'];
$password=sha1($_POST['password']);
$stmt=$mysqli->prepare("SELECT e_address,password,id FROM admin WHERE e_address=? and password=? ");
				$stmt->bind_param('ss',$e_address,$password);
				$stmt->execute();
				$stmt -> bind_result($e_address,$password,$id);
				$rs=$stmt->fetch();
				$_SESSION['id']=$id;
				$uip=$_SERVER['REMOTE_ADDR'];
				$ldate=date('d/m/Y h:i:s', time());
				if($rs)
				{
               
					header("location:admin-dashboard.php");
				}

				else
				{
					echo "<script>alert('Invalid Credentials');</script>";
				}
			}
				?>
 <?php include("includes/head.php")?>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="" method="post">
        <h2 class="form-login-heading">Log In</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" placeholder="Email Address" name="e_address"  autofocus>
          <br>
          <input type="password" class="form-control" name='password' placeholder="Password">
          
            <span class="pull-right">
            <a data-toggle="modal" href="index.php#myModal"> Forgot Password?</a>
            </span>
            </label>
            <input type="submit" name="login" class="btn  btn-theme btn-block " value="login" >
          <hr>          
        </div>
        <!-- Modal --
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
              </div>
              <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
         modal -->
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
