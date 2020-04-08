<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>8-Venture</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">8-Venture</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item active"><a href="blog.php" class="nav-link">Blog</a></li>
	        <?php
			if (!isset($_SESSION['mySession']))
			{
			?>
	        <li class="nav-item cta cta-colored"><a href="login.php" class="nav-link">Login / Sign up</a></li>
			<?php
			}
			else
			{
			?>	
			<li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
			<li class="nav-item"><a href="myprofile.php" class="nav-link">My Profile</a></li>
			<?php
			}
			?>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Blog</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="#" class="block-20" style="background-image: url('images/1.jpg');"></a>         
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">December 2, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Make your dream office in here! </a></h3>
               <p>Office layout have been designed to make sure staff could have a nice working enviroment.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="#" class="block-20" style="background-image: url('images/2.2.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div>December 2, 2019</div>
                  <div>Admin</div>
                </div>
                <h3 class="heading"><a href="#">Make your dream office in here! </a></h3>
               <p>Office layout have been designed to make sure staff could have a nice working enviroment.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="#" class="block-20" style="background-image: url('images/3.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div>December 2, 2019</div>
                  <div>Admin</div>
                </div>
                <h3 class="heading"><a href="#">Get ready for Discussions! </a></h3>
               <p>A meeting room is ready for you to discuss jobload and the future events.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="#" class="block-20" style="background-image: url('images/4.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div>December 4, 2019</div>
                  <div>Admin</div>
                </div>
                <h3 class="heading"><a href="#">Enjoy the leisure area! </a></h3>
               <p>A place for staff to have a relax on their mind and get to have some rest at the area.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="#" class="block-20" style="background-image: url('images/5.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div>December 4, 2019</div>
                  <div>Admin</div>
                </div>
                <h3 class="heading"><a href="#">The working space layout !</a></h3>
               <p>it is designed to let workers to enjoy a better working lifestyle and habit.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="#" class="block-20" style="background-image: url('images/6.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div>December 6, 2019</div>
                  <div>Admin</div>
                </div>
                <h3 class="heading"><a href="#">The refreshing area !</a></h3>
               <p>The facilities that we provdided for every staff to enjoy the facilities that is provided.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="#" class="block-20" style="background-image: url('images/7.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div>December 6, 2019</div>
                  <div>Admin</div>
                </div>
                <h3 class="heading"><a href="#">The outdoor refreshing area !</a></h3>
               <p>We have provide an outdoor area for staff to have a breeze of fresh air.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="#" class="block-20" style="background-image: url('images/8.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div>December 6, 2019</div>
                  <div>Admin</div>
                </div>
                <h3 class="heading">Gym free facility ! <a href="#"></a></h3>
               <p>To let staff have a healthier lifestyle and to keep their body in shape.</p>
              </div>
            </div>
          </div>
        </div>
              </div>
    </section>
		
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
        	<div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About</h2>
              <p>Find a job that suitable for you, and get to the big family now. Sign up for free! </p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
       
          <div class="col-md" style="margin-left:100px">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Users</h2>
              <ul class="list-unstyled">
                <li><a href="About.html" class="py-2 d-block">How it works</a></li>
                <li><a href="Login.html" class="py-2 d-block">Register</a></li>
                <li><a href="#" class="py-2 d-block">Blog</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Jalan Teknologi 5, Taman Teknologi Malaysia, 57000 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+601-11496501</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">APU@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by | <a href="index.html" target="_blank">8-Venture</a></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>