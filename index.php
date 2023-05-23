<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>IIITN Hostel - Home page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="http://code4berry.com" />
	<!-- css --> 
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
	<link href="css/flexslider.css" rel="stylesheet" /> 
	<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
	<link href="css/style1.css" rel="stylesheet" />
</head>
<body>
	<div id="wrapper" class="home-page"> 
		
		<!-- start header -->
		<?php include('include/header.php') ?>
		<!-- end header -->
		<section id="banner">
			<!-- Slider -->
			<div id="slider" data-zs-src='["img/bg1.jpg", "img/bg3.jpg", "img/gate.jpg"]' >
			</div>
			<!-- end slider --> 
		</section>  
		<section class="projects">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="aligncenter"><h2 class="aligncenter">Our Featured Hostels</h2>Free Wi-Fi access,dormitory-style rooms with bunk beds,mess food facility  <br/>cool and filtered drinking water.</div>
						<br/>
					</div>
				</div>

				<div class="row service-v1 margin-bottom-40">
					<div class="col-md-4 md-margin-bottom-40">
						<div class="card small">
							<div class="card-image">
								<img class="img-responsive" src="img/bg3.jpg" alt="">   
							</div>
							<div class="card-content"> 
								<p>
							<h4>Hostel Block A</h4>
									
									<a href="hosteluser" class="btn btn-details">Block A </a>
								</p>
							</div>
						</div>        
					</div>
					<div class="col-md-4 md-margin-bottom-40">
						<div class="card small">
							<div class="card-image">
								<img class="img-responsive" src="img/bg3.jpg" alt="">   
							</div>
							<div class="card-content">
								<p>
									
									
									<h4>Hostel Block B</h4>
									<a href="hosteluser" class="btn btn-details"> Block B </a>
								</p>
							</div>
						</div>        
					</div>
					<div class="col-md-4 md-margin-bottom-40">
						<div class="card small">
							<div class="card-image">
								<img class="img-responsive" src="img/bg3.jpg" alt="">  
							</div>
							<div class="card-content">
								<p>
								<h4>Hostel Block C</h4>
									<a href="hosteluser" class="btn btn-details"> Block C </a>
								</p>
							</div>
						</div>        
					</div> 
				</div>
			</div>
		</section>

		<section class="section-padding gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h2>About Us</h2>
							<p>A newly built hostel block of ten floors with modern furnishing and facilities for b.tech students. There's a gym with treadmill and fly machine,  3 elevators on each bank and one alloted only for girls.</p>
						</div>
					</div>
				</div>
				<div class="row">

					<div class="col-md-6 col-sm-6">
						<div class="about-image">
							<img src="img/gate.jpg" alt="About Images">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="about-text">
							<h4>At IIITN Hostel</h4>
							<p>At IIIT Nagpur Hostel, we strive to create a comfortable and conducive living environment for the students of IIIT Nagpur. Our mission is to provide a home away from home, ensuring a safe and enriching experience during their academic journey.</p>
							<p>Our dedicated team of staff is committed to maintaining a clean and secure environment, ensuring round-the-clock security and regular maintenance of the hostel premises..</p>
<P>
Located within the picturesque IIIT Nagpur campus, our hostels are designed to cater to the diverse needs of students. We prioritize the well-being and convenience of our residents, offering a range of facilities and services to enhance their stay.</p>
							<p>Our dedicated team of staff is committed to maintaining a clean and secure environment, ensuring round-the-clock security and regular maintenance of the hostel premises..</p>

							<a href="about.php" class="btn btn-primary waves-effect waves-dark">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</section>	  


		<?php include('include/footer.php') ?>
	</div>
	<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up HillSide"></i></a>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="materialize/js/materialize.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.fancybox-media.js"></script>  
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/animate.js"></script>
	<!-- Vendor Scripts -->
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.zoomslider.min.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/animate.js"></script> 
	<script src="js/custom.js"></script>
</body>
</html>