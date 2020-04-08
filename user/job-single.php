<!doctype html>
<?php
include ("session.php");
include("Mysqlcon.php");
$id = $_GET['id'];
$user = $_SESSION['mySession'];

$sql = "Select * from `part-timer` where Username = '$user'";
$result = mysqli_query($con, $sql) or die('Error: ' . mysqli_error($con));
$weicong = mysqli_fetch_assoc($result);

$sql2 = "Select * from job where JobID = '$id'";
$result2 = mysqli_query($con, $sql2) or die('Error: ' . mysqli_error($con));
$junkhuan = mysqli_fetch_assoc($result2);


if($weicong['Status']=='Active'){
if (!empty($_POST["Submit"])){
$PTid = $_REQUEST['PTid'];
$JobID = $_REQUEST['JobID'];
$sql3 = "INSERT INTO applicationid(`Part-TimerID`, JobID, Application_Status) 
		VALUES('$_POST[PTid]','$_POST[JobID]','Pending')";
		echo '<script>alert ("Job Applied Successfully <3");
		window.location.href = "appliedjob.php";
		</script>';
$result3 = mysqli_query($con, $sql3) or die('Error: ' . mysqli_error($con));

mysqli_close($con);
}
}else{
echo '<script>alert ("You have been suspended, so you cannot apply any job for the time being.");
		window.location.href = "appliedjob.php";</script>';
}
?>

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
	      <a class="navbar-brand" href="home.php">8-Venture</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	       <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="home.php" class="nav-link">Home</a></li>
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
          	<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="home.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-3"><a href="blog.html">Recent jobs <i class="ion-ios-arrow-forward"></i></a></span> <span>Single</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Job details</h1>
          </div>
        </div>
      </div>
    </div>

		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading" style="margin-top:0px;">More Jobs Details</span>
            <h2 class="mb-4"><span>Jobs</span> Details</h2>
          </div>
        </div>
        
<form action ="" method="post">
		<div class="row">
			<div class="col-md-12 ftco-animate">

            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
                <div class="job-post-item-header d-flex align-items-center">
                  <h2 class="mr-3 text-black h3"><?php echo $junkhuan['JobTitle'] ?></h2>
                  <div class="badge-wrap">
                   <span class="bg-primary text-white badge py-2 px-3"><?php echo $junkhuan['Job_type'] ?></span>
                  </div>
                </div>
                <div class="job-post-item-body d-block d-md-flex">
                  <div class="mr-3"><span class="icon-layers"></span> <a href="#"><?php echo "RM".$junkhuan['salary'] ?></a></div>
                </div>        
                <div class="ml-auto d-flex">
                <input class="btn btn-primary py-2 mr-1" type="submit" id="Submit" name="Submit" value="Apply Now">
				<input type="hidden" name="PTid" value="<?php echo $weicong['Part-TimerID'] ?>">
				<input type="hidden" name="JobID" value="<?php echo $junkhuan['JobID'] ?>">		
				
				</div>
			</div>
            </div>
            </div>
        </div>
</form>
</div>   

<div class="col-md-7 heading-section text-center ftco-animate">
                  <h2 style="display: inline-block; margin-left:650px;margin-top:10px"class="mb-4">Requirements:</h2></div>

                  
            <div class="container" style="margin-top:100px">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
               <div class="media-body">
                <h3 class="heading mb-3">&#10004;Worker Needed</h3>
                <span style='font-size:20px;'><p> 2 to 5 </p></span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="media-body">
                <h3 class="heading mb-3">&#10004;Date</h3>
                <span style='font-size:20px;'><p>2 to 5 years </p></span>

              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
                <div class="media-body">
               <h3 class="heading mb-3">&#10004;Location</h3>
                <span style='font-size:20px;'><p><?php echo $junkhuan['location'] ?></p></span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
                <div class="media-body">
                <h3 class="heading mb-3">&#10004;Description</h3>
                <span style='font-size:20px;'><p>2 to 5 years </p></span>
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
                <li><a href="../about.php" class="py-2 d-block">How it works</a></li>
                <li><a href="../login.php" class="py-2 d-block">Register</a></li>
                <li><a href="../blog.php" class="py-2 d-block">Blog</a></li>
                <li><a href="../contact" class="py-2 d-block">Contact Us</a></li>
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

            <p>  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by | <a href="home.php" target="_blank">8-Venture</a></p>
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
  <script src="../https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
    </body>
</html>