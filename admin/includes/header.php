<header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="admin-dashboard.php" class="logo"><b>RH<span>MS</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <?php
//code for getting all values from regestration table
$result ="SELECT count(*) FROM client ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
?>
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="admin-dashboard.php#">
              <i class="fa fa-users"></i>
              <span class="badge bg-theme"><?php echo $count;?></span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You Have <?php echo $count;?> Clients</p>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <?php
//code for getting all values from regestration table
$result ="SELECT count(*) FROM house where status='vacant' ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
?>
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="admin-dashboard.php#">
              <i class="fa fa-building-o"></i>
              <span class="badge bg-theme"><?php echo $count;?></span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have <?php echo $count;?> Vacant Houses </p>
              </li>
              </ul>
          </li>
          
          <?php
//code for getting all values from regestration table
$result ="SELECT count(*) FROM house where status !='vacant' ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($vacant);
$stmt->fetch();
$stmt->close();
?>
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="admin-dashboard.php#">
              <i class="fa fa-building-o"></i>
              <span class="badge bg-theme"><?php echo $vacant;?></span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have <?php echo $vacant;?> occupied  Houses </p>
              </li>
              </ul>
          </li>

          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="admin-logout.php">Logout</a></li>
        </ul>
      </div>
    </header>