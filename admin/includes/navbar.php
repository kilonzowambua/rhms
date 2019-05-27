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
<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><img src="img/dpic/<?php echo $row->pic;?>" class="img-circle" width="80"></p>
          <h5 class="centered"><strong>Admin<strong> <?php echo $row->username;?></h5>
          <li class="mt">
            <a class="" href="admin-dashboard.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-user"></i>
              <span><?php echo $row->username;?>'s Profile</span>
              </a>
            <ul class="sub">
              <li><a href="admin-profile.php">Profile</a></li>
              <li><a href="admin-profile-update.php">Update Profile</a></li>
              <li><a href="admin-password-update.php">Update Password</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-users"></i>
              <span>Clients</span>
              </a>
            <ul class="sub">
              <li><a href="admin-view-client.php">View Clients</a></li>
              <li><a href="admin-manage-client.php">Manage Clients</a></li>
             
              
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-home"></i>
              <span>Houses</span>
              </a>
            <ul class="sub">
              <li><a href="admin-add-house.php">Add House</a></li>
              <li><a href="admin-view-vacant.php">Vacant Houses</a></li>
              <li><a href="admin-vie-occupied.php">Occupied Houses</a></li>
              <li><a href="admin-view-houses.php">View All Houses</a></li>
              <li><a href="admin-manage-house.php">Manage Houses</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-money"></i>
              <span>Rent</span>
              </a>
            <ul class="sub">
              <li><a href="admin-view-monthly-payments.php">View Monthly Payments</a></li>
              <li><a href="admin-manage-payments.php">Manage Payments</a></li>
            <!--  <li><a href="admin-expenditures.php">Expenditures</a></li>-->
             
            </ul>
          </li>
        
          
          
          <li>
            <a href="admin-mail.php">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              
              </a>
          </li>
         
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <?}?>