<?php include("includes/header.php")?>
<body>
	<!--banner-->
	<div  id="home" class="banner about-banner">
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
								<li><a href="index.php" class="link-kumya"><span data-letters="Home">Home</span></a></li>
								<li><a href="about.php" class="link-kumya"><span data-letters="About">About</span></a></li>	
								<li><a href="portfolio.php" class="link-kumya"><span data-letters="Portfolio">Portfolio</span></a></li>
								<li><a href="codes.php" class="link-kumya"><span data-letters="Short Codes">Short Codes</span></a></li>
								<li><a href="blog.php" class="link-kumya"><span data-letters="Blog">Blog</span></a></li>		
								<li><a href="contact.php" class="link-kumya active"><span data-letters="Contact">Contact</span></a></li>
								<li><a href="client/" class="link-kumya"><span data-letters="Join Us">Join Us</span></a></li>
								<li><a href="admin/" class="link-kumya"><span data-letters="Staff">Staff</span></a></li>
							</ul>	
							<div class="clearfix"> </div>
						</div>
					</div>
				</nav>
			</div>	
			<!--//navigation-->
			<div class="banner-text">
				<h2>WE'LL HELP YOU FIND YOUR DREAM HOME</h2>
			</div>	
		</div>
	</div>
	<!--//banner-->
	<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="contact-grids">
				<div class="col-md-6 contact-grid">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2564.958900464012!2d36.23097800000001!3d49.993379999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0f009ab9f07%3A0xa21e10f67fa29ce!2sGeorgia+Education+Center!5e0!3m2!1sen!2sin!4v1436943860334" allowfullscreen></iframe>
				</div>
				<div class="col-md-6 contact-grid">
					<h3 class="title">Get in Touch</h3>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum </p>
					<form>
						<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="text" class="input-mdl" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
						<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
						<input type="submit" value="Send Message" >
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="address">
				<ul>
					<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>123 Fourth Avenue,SEATTLE WA 98104,USA</li>
					<li><i class="phon">CALL US :</i> +0955 670 204</li>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com"> mail@example.com</a></li>
				</ul>
			</div>

		</div>
	</div>
	<!-- //contact -->
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