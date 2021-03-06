<!doctype html>
<html lang="en">
<?php 
  include ("session.php");
  include("Mysqlcon.php");
  $today = date("Y-m-d");

$getjob = $con->query('SELECT * FROM `job` as a inner join `applicationid` as b on a.`jobID`=b.`jobID` inner join `payment` as c on a.`jobID`=c.`jobID`;');

while ($job = $getjob->fetch_assoc())
{
    $jobdate = strtotime($job['date'].' +1 day');
    $paymentdue = date('Y-m-d',strtotime($job['date'].' +1 month'));
    
    if ($job['Job_Status'] != 'Completed' && time() >= $jobdate)
    {
        $updatejobstatus = $con->prepare('UPDATE `job` SET `Job_Status` = "Completed" WHERE `JobID` = ?');
        $updatejobstatus->bind_param('i',$job['JobID']);
        $updatejobstatus->execute();
        $updatejobstatus->close();
        
        $updatepayment = $con->prepare('INSERT INTO `payment` (`JobID`,`Due_date`,`Status`) VALUES (?,?,"Pending")');
        $updatepayment->bind_param('is',$job['JobID'],$paymentdue);
        $updatepayment->execute();
        $updatepayment->close();
        
        /*$updatepayment1 = $con->prepare('INSERT INTO `part-timer_payment` (`JobID`,`Part-timerID`,`Payment_Status`) VALUES (?,?,"Pending")');
        $updatepayment1->bind_param('ii',$job['JobID'],$job['Part-timerID']);
        $updatepayment1->execute();
        $updatepayment1->close();*/

    }

    if($job['Job_Status'] == 'Completed'){
        $jobID=$job['JobID'];
        $ID=$job['Part-timerID'];
        $updatepayment1 ="INSERT INTO `part-timer_payment` (`JobID`,`Part-timerID`,`Payment_Status`) 
                        VALUES ('$jobID','$ID','Pending')";
        
        if (!mysqli_query($con,$updatepayment1)){
        
            die('Error: ' . mysqli_error($con));
        } 
    }
}

$checkpayment = $con->query('SELECT * FROM `payment`');

while ($payment = $checkpayment->fetch_assoc())
{
    $checksettle = $con->prepare('SELECT * FROM `part-timer_payment` as a inner join `job` as b on a.`jobID`=b.`jobID` WHERE a.`JobID` = ? AND a.`Payment_Status` <> "Paid"');
    $checksettle->bind_param('i',$payment['JobID']);
    $checksettle->execute();
    $checksettleres = $checksettle->get_result();
    $checksettle->close();
    
    if ($checksettleres->num_rows > 0)
    {
        $update = $con->prepare('UPDATE `payment` SET `Status` = "Pending" WHERE `JobID` = ?');
    }
    else
    {
        $update = $con->prepare('UPDATE `payment` SET `Status` = "Completed" WHERE `JobID` = ?');
    }
    
    $update->bind_param('i',$payment['JobID']);
    $update->execute();
    $update->close();
}
 
  $today = date("Y-m-d");


if(isset($_POST['Submit'])){

  $wage= $_POST['Wage'];
  $jobType= $_POST['JobType'];
  $date = $_POST['Date'];
  $hasNotice = false;


  if(  !(empty($wage) || empty($jobType) || empty($date))){

    $sql ="SELECT * FROM Job 
          where salary >='$wage' AND Job_type='$jobType' AND `date` >= '$date' AND Job_Status ='Active'"; 

  } 
  else{

    $sql = "SELECT * FROM Job where Job_Status='Active' AND  `date` >='$today'";
  }
}
else{

  $sql = "SELECT * FROM Job where Job_Status='Active' AND `date` >='$today'"; 
  $notice=" ";
  $hasNotice = true;
}
?>
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
	          <li class="nav-item active"><a href="home.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="dashboard.php" class="nav-link">Dashboard</a></li>     
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
			<li class="nav-item  cta cta-colored"><a href="logout.php" class="nav-link">Logout</a></li>
			<?php
			}
			?>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('../images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We have <span class="number" data-number="8500">0</span> great job opportunities ready for you!</p>
            <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Your Dream <br><span>Job is Waiting</span></h1>

						<div class="ftco-search">
						<div class="row">
						<div class="col-md-12 nav-link-wrap">
			            <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			              <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Find a Job</a>

			             <!-- <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Find a Candidate</a> -->

			            </div>
			          </div>
			          <div class="col-md-12 tab-wrap">
			            
			            <div class="tab-content p-4" id="v-pills-tabContent">

			              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
			              	<form action="home.php" class="search-job" method="POST">
			              		<div class="row">
			              			<div class="col-md">
			              				<div class="form-group">
				              				<div class="form-field">
				              					<div class="icon"><span class="icon-briefcase"></span></div>
								                <input type="date" name="Date" class="form-control" min="<?php echo $today; ?>" placeholder=" Working date">
								              </div>
							              </div>
			              			</div>
			              			<div class="col-md">
			              				<div class="form-group">
			              					<div class="form-field">
				              					<div class="select-wrap">
						                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
						                      <select name="JobType" id="" class="form-control">
						                      	<option value="Event Crew">Event Crew</option>
						                        <option value="Promoter">Promoter</option>
						                        <option value="Waiter">Waiter</option>
						                        <option value="Usher">Usher</option>
												<option value="">Anything</option>
						                      </select>
						                    </div>
								            </div>
							              </div>
			              			</div>
			              			
			              			<div class="col-md">
			              				<div class="form-group">
			              					<div class="form-field">
				              					<div class="select-wrap">
						                       <div class="icon"><span class="ion-ios-arrow-down"></span></div>
						                      <input type="number" class="form-control" name="Wage" min="50" max="500" value= "Wage " placeholder="Wage (Between RM50 to Rm500)">
						                    </div>
								              </div>
							              </div>
			              			</div>
			              			<div class="col-md">
			              				<div class="form-group">
			              					<div class="form-field">
								                <input type="submit" value="Submit" name="Submit" class="form-control btn btn-primary">
								              </div>
							              </div>
			              			</div>
			              		</div>
			              	</form>
			              </div>
			            </div>
			          </div>
			        </div>
		        </div>
          </div>
        </div>
      </div>
    </div>
	    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-resume"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Make up your profile</h3>
                <p>Get yourself login to an account. Customize it , build your profile.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-collaboration"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Get to contact for information</h3>
                <p>Select your team and prepare the payment Cash or Goods option.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-promotions"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Top Careers</h3>
                <p>Our fellow teams will be there to complete your job to satisfaction.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-employee"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Outstanding Support</h3>
                <p>Having questions or issues? Let us know anytime and let us get it resolved.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
		<section class="ftco-section bg-light" id="#jobs">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
				<span class="subheading" style="margin-top:0px;">Recently Added Jobs</span>
				<h2 class="mb-4"><span>Recent</span> Jobs</h2>
			</div>
		</div>
 <?php
   
  $m = mysqli_query($con,$sql);  
  while($r =mysqli_fetch_assoc($m)){
?>           
	<div class="row">
    <div class="col-md-12 ftco-animate">
			<div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
              <h3 class="align-items-center"> <?php if($hasNotice == true){echo $notice;}?></h3>
              <div class="mb-4 mb-md-0 mr-5">
                <div class="job-post-item-header d-flex align-items-center">
                  <h2 class="mr-3 text-black h3"><?php echo $r['JobTitle']?></h2>
                  <div class="badge-wrap">
                   <span class="bg-primary text-white badge py-2 px-3"><?php echo $r['Job_type'] ?></span>
                  </div>
                </div>
                <div class="job-post-item-body d-block d-md-flex">
                  <div class="mr-3"><span class="icon-layers"></span> <a href="#"><?php echo "RM".$r['salary'] ?></a></div>
                  <div><span class="icon-my_location"></span> <span><?php echo
                  $r['location']  ?></span></div>
                </div>
              </div>

              <div class="ml-auto d-flex">
                <?php echo '<input type="button" value="Apply Job" class="btn btn-primary py-2 mr-1" onclick="window.location.href=\'job-single.php?id='.$r['JobID'].'\'">' ?>
              </div>
            </div>
          </div><!-- end -->
	</div>
  <?php
  }
  ?>
               <script>
// Add active class to the current button (highlight it)
var header = document.getElementById("button");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace("active", "");
  this.className += " active";
  });
}
</script>

        </div>
		
		</section>
   
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(../images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="135000">0</strong>
		                <span>Jobs</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="4000">0</strong>
		                <span>Members</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="3000">0</strong>
		                <span>Resume</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="1050">0</strong>
		                <span>Co-operate</span>
		              </div>
		            </div>
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