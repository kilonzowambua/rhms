<nav id="sidebar" class="sidebar">
			<a class="sidebar-brand" href="client-dashboard.php">
            <svg>
              <use xlink:href="#ion-ios-nuclear "></use>
            </svg>
        Rental House Management System
					</a>
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
			<div class="sidebar-content">
				<div class="sidebar-user">
					<img src="img/profile_pic/<?php echo $row->pic;?>" class="img-fluid rounded-circle mb-2" alt="User" />
					<div class="font-weight-bold"><?php echo $row->fname;?> <?php echo $row->mname;?></div>
					<small><?php echo $row->bio;?></small>
				</div>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						
					</li>
					<li class="sidebar-item ">
						<a class="sidebar-link" href="client-dashboard.php">
      					<i class="align-middle mr-2 fas fa-fw fa-rocket"></i> <span class="align-middle">Dashboard</span>
      				</a>
                    </li>
					<li class="sidebar-item">
						<a href="#ui" data-toggle="collapse" class="sidebar-link collapsed">
      					<i class="align-middle mr-2 fas fa-fw fa-user"></i> <span class="align-middle">Profile</span>
              </a>
						<ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
						<li class="sidebar-item"><a class="sidebar-link" href="client-profile.php">My Profile</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="client-update-profile.php">Update Profile</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="client-change-password.php">Change Password</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="client-update-profile-pic.php">Update Profile Avatar</a></li>
						</ul>
					</li>
                    
					<li class="sidebar-item">
						<a href="#layouts" data-toggle="collapse" class="sidebar-link collapsed">
      					<i class="align-middle mr-2 fas fa-fw fa-home"></i> <span class="align-middle">Rental Houses</span>
              </a>
						<ul id="layouts" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="client-view-house.php">View</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="client-rent-house.php">Rent House</a></li>
                            
                            
						</ul>
                    </li>
                    
       
					

					<li class="sidebar-item">
						<a href="#charts" data-toggle="collapse" class="sidebar-link collapsed">
      					<i class="align-middle mr-2 fas fa-fw fa-chart-pie"></i> <span class="align-middle">My House</span>
                <span class="sidebar-badge badge badge-pill badge-success">New</span>
              </a>
						<ul id="charts" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="client-view-house-details.php">View Details</a></li>
							
						</ul>
					</li>

					<li class="sidebar-item">
						<a href="#forms" data-toggle="collapse" class="sidebar-link collapsed">
      					<i class="align-middle mr-2 fas fa-fw fa-barcode"></i> <span class="align-middle">Rent</span>
              </a>
						<ul id="forms" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="client-pay-rent.php">Pay</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="client-view-rent-payment.php">View Previous Rents</a></li>
						<!--	<li class="sidebar-item"><a class="sidebar-link" href="client-manage-rent.php">Confirm Rent Payment</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="client-invoice.php">Invoice</a></li>-->
						
							
						</ul>
					</li>
					<!--
					<li class="sidebar-item ">
						<a class="sidebar-link" href="client-mail.php">
      					<i class="align-middle mr-2 fas fa-fw fa-envelope"></i> <span class="align-middle">Mail</span>
      				</a>
                    </li> -->
				</ul>
			</div>
		</nav>
		<?php }?>