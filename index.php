<?php include("includes/header.php")?>
<body>
	<!--banner-->
	<div  id="home" class="banner">
		<div class="banner-info">
			<!--navigation-->
			<div class="top-nav">
				<nav>
					<div class="container">
						<div class="navbar-header logo">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<h1><a href="index.php">Rental</a></h1>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-right">
								<li><a href="#home" class="link-kumya active scroll"><span data-letters="Home">Home</span></a></li>
								<li><a href="about.php" class="link-kumya"><span data-letters="About">About</span></a></li>	
								<li><a href="portfolio.php" class="link-kumya"><span data-letters="Portfolio">Portfolio</span></a></li>
								<li><a href="codes.php" class="link-kumya"><span data-letters="Short Codes">Short Codes</span></a></li>
								<li><a href="blog.php" class="link-kumya"><span data-letters="Blog">Blog</span></a></li>		
								<li><a href="contact.php" class="link-kumya"><span data-letters="Contact">Contact</span></a></li>
								<li><a href="client/" class="link-kumya"><span data-letters="Join Us">Join Us</span></a></li>
								<li><a href="admin/admin-index.php" class="link-kumya"><span data-letters="Staff">Staff</span></a></li>
							</ul>	
							<div class="clearfix"> </div>
						</div>
					</div>
				</nav>
			</div>	
			<!--//navigation-->
			<div class="banner-text">
				<!--banner Slider starts Here-->
				<script src="js/responsiveslides.min.js"></script>
				<script>
					// You can also use "$(window).load(function() {"
					$(function () {
					  // Slideshow 3
					  $("#slider3").responsiveSlides({
						auto: true,
						pager: true,
						nav: false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						  $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
						  $('.events').append("<li>after event fired.</li>");
						}
					  });
				
					});
				</script>
				<!--//End-slider-script-->
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<div class="banner-text-info">
								<h2>WE'LL HELP YOU FIND YOUR DREAM HOME</h2>	
								<h3>Lorem Ipsum was popularised In sit amet sapien eros Integer dolore magna aliqua Temporibus autem quibusdam</h3>	
								<div class="more">
									<a href="single.html" class="button-pipaluk button--inverted"> Read More</a>
								</div>	
							</div>	
						</li>
						<li>
							<div class="banner-text-info">
								<h2>QUISQUE ORNARE FEUGIAT ERAT SAPIEN</h2>	
								<h3>In sit amet sapien eros Integer dolore magna aliqua Temporibus lorem lpsum was popularised autem quibusdam</h3>	
								<div class="more">
									<a href="single.html" class="button-pipaluk button--inverted"> Read More</a>
								</div>	
							</div>	
						</li>
						<li>
							<div class="banner-text-info">
								<h2>FUSCE PORTTITOR MASSA TURPISGRADA</h2>	
								<h3>Temporibus autem quibusdam Lorem Ipsum was popularised In sit amet sapien eros Integer dolore magna aliqua </h3>	
								<div class="more">
									<a href="single.html" class="button-pipaluk button--inverted"> Read More</a>
								</div>	
							</div>	
						</li>
					</ul>
				</div>
			</div>	
		</div>
	</div>
	<!--//banner-->
	<!--welcome-->
	<div class="welcome">
		<div class="container">
			<div class="col-md-6 welcome-left ">
				<img src="images/img1.jpg" alt=""/>
			</div>
			<div class="col-md-6 welcome-right">
				<h3 class="title">Welcome!</h3>
				<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum </p>
				<div class="welcome-info">
					<div class="col-md-2 welcome-text wtext-left">
						<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 welcome-text wtext-right">
						<h4>Ipsum</h4>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="welcome-info">
					<div class="col-md-2 welcome-text wtext-left">
						<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 welcome-text wtext-right">
						<h4>Ipsum</h4>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum </p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//welcome-->
	<!--tabs-->
	<div class="tabs">
		<div class="container">
			<div class="col-md-6 tabs-left">
				<div class="col-xs-2 tab-grid-left"> <!-- required for floating -->
					<!-- Nav tabs -->
					 <ul class="nav nav-tabs">
						<li class="active"><a href="#Tab1" data-toggle="tab">Tab1</a></li>
						<li><a href="#Tab2" data-toggle="tab">Tab2</a></li>
						<li><a href="#Tab3" data-toggle="tab">Tab3</a></li>
					</ul>
				</div>
				<div class="col-xs-10 tab-grid-right">
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="Tab1">
							<div class="text">
								<h3 class="title">AboutUs</h3>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat. </p>
								<div class="more more2">
									<a href="single.html" class="button-pipaluk button--inverted"> Read More</a>
								</div>	
							</div>
						</div>
						<div class="tab-pane" id="Tab2">
							<div class="text">
								<h3 class="title">Offers</h3>
								<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut At vero eos et accusamus et iusto odio dignissimos ducimus qui </p>
								<div class="more more2">
									<a href="single.html" class="button-pipaluk button--inverted"> Read More</a>
								</div>	
							</div>
						</div>
						<div class="tab-pane" id="Tab3">
							<div class="text">
								<h3 class="title">Advantages</h3>
								<p>Qapiente itaque earum rerum hic tenetur a delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut At vero eos et accusamus et iusto odio praesentium voluptatum </p>
								<div class="more more2">
									<a href="single.html" class="button-pipaluk button--inverted"> Read More</a>
								</div>	
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-6 tabs-right ">
				<img src="images/img2.jpg" alt=""/>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//tabs-->
	<!-- services -->
	<div class="services" id="services">
		<div class="container">
			<h3 class="title">Services</h3>
			<div class="servc-grids">
				<div class="col-md-6 servc-grid">
					<div class="col-xs-3 servc-grid-left">
						<span class="glyphicon glyphicon-th-large effect-1" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 servc-grid-right">
						<h4>Cum soluta nobis est eligendi</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus 
						reiciendis maiores alias consequatur aut</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 servc-grid">
					<div class="col-xs-3 servc-grid-left">
						<span class="glyphicon glyphicon-tree-deciduous effect-1" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 servc-grid-right">
						<h4>Soluta nobis est cum eligendi</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus 
						reiciendis maiores alias consequatur aut</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="servc-grids">
				<div class="col-md-6 servc-grid">
					<div class="col-xs-3 servc-grid-left">
						<span class="glyphicon glyphicon-tasks effect-1" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 servc-grid-right">
						<h4>Eligendi cum soluta nobis est</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus 
						reiciendis maiores alias consequatur aut</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 servc-grid">
					<div class="col-xs-3 servc-grid-left">
						<span class="glyphicon glyphicon-globe effect-1" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 servc-grid-right">
						<h4>Nobis cum soluta est eligendi</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus 
						reiciendis maiores alias consequatur aut</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="servc-grids">
				<div class="col-md-6 servc-grid">
					<div class="col-xs-3 servc-grid-left">
						<span class="glyphicon glyphicon-cog effect-1" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 servc-grid-right">
						<h4>Cum soluta nobis est eligendi</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus 
						reiciendis maiores alias consequatur aut</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 servc-grid">
					<div class="col-xs-3 servc-grid-left">
						<span class="glyphicon glyphicon-link effect-1" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 servc-grid-right">
						<h4>Soluta nobis cum est eligendi</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus 
						reiciendis maiores alias consequatur aut</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<!--slid-->
	<div class="slid">
		<div class="container">	
			<h3 class="title">Pricing</h3>
			<div class="slid-row">
				<div class="col-md-4 slid-grids">
					<h4>Perspici</h4>
					<h5>$5000</h5>
					<div class="more">
						<a href="single.html" class="button-pipaluk button--inverted"> Read More</a>
					</div>	
				</div>
				<div class="col-md-4 slid-grids">
					<h4>Digniss</h4>
					<h5>$8000</h5>
					<div class="more">
						<a href="single.html" class="button-pipaluk button--inverted"> Read More</a>
					</div>	
				</div>
				<div class="col-md-4 slid-grids">
					<h4>Acusam</h4>
					<h5>$2000</h5>
					<div class="more">
						<a href="single.html" class="button-pipaluk button--inverted"> Read More</a>
					</div>	
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//slid-->
	<!--footer-->
	<?php include("includes/footer.php")?>
	<!--//footer-->
	<!-- script-for prettySticky -->
	<script src="js/prettySticky.js"></script>
	<!--//script-for prettySticky -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>