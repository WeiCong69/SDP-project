<?php
include("Mysqlcon.php");
include ("session.php");
$user=$_SESSION['mySession'];
$today = date('Y-m-d');

$sql="Select * from `Part-timer` where Username='$user'";

$PT= mysqli_query($con,$sql);

	while($r=mysqli_fetch_assoc($PT)){
		$id=$r['Part-TimerID'];
	} 


if (isset($_POST["Submit"])){
$a=$_POST['Enquiry'];
$b=$_POST['Description'];

$sql2 = "Insert into enquiry  (Enquiry, Description,Username,`Part-timerID`) VALUES
		('$a','$b','$user','$id')";


$result3 = mysqli_query($con, $sql2) or die('Error: ' . mysqli_error($con));

echo '<script>alert("Commented Successfully! Proceed to the Forum.");		 
			  </script>';
header('Location: forum.php');
}




?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>8-Venture</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
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
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="dashboard.php" class="nav-link">Dashboard</a></li>     
	          <li class="nav-item cta cta-colored"><a href="../login.php" class="nav-link">Login / Sign up</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('../images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Inquiry</h1>
          </div>
        </div>
      </div>
    </div>
                  <div class="comment-form-wrap pt-5"id="comments" style="margin-left: 50PX;margin-right: 50PX;margin-bottom: 20PX;">
                <h3 class="mb-5">Inquiry</h3>
                <form action="" class="p-5 bg-light" method="post">  
                 <div class="form-group">
                    <label for="name">Username *</label>
                    <input type="text" class="form-control" name="Username" value="<?php echo ($_SESSION['mySession'])?>">
                  </div>
                  <div class="form-group">
                    <label for="Enquiry">Enquiry *</label>
                    <input type="text" class="form-control" name="Enquiry" value="" required="required">
                  </div>
              		
                  <div class="form-group">
                    <label for="Description">Descriptions</label>
                    <textarea name="Description" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                  	<input type="hidden" name="date" value="<?php echo $today;?>">
                    <input type="submit" name="Submit" class="btn py-3 px-4 btn-primary" id="submit">
                  </div>
                 </form>
                  </div>
                     
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
              <li><a href="dashboard.php" class="py-2 d-block">Dashboard</a></li>
               <li><a href="forum.php" class="py-2 d-block">Forum</a></li>
                <li><a href="contact.php" class="py-2 d-block">Contact Us</a></li>
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

            <p>  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by | <a href="index.php" target="_blank">8-Venture</a></p>
          </div>
        </div>
      </div>
      
    </footer>
    
  

 <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/jquery.timepicker.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
 
  </body>
</html>