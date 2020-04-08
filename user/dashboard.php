<?php
include ("session.php");
include ("Mysqlcon.php");
$username = $_SESSION['mySession'];

$today = date("Y-m-d");
$final=date('Y-m-1', strtotime("+1 month"));

$sql1="SELECT count(*) from job where `date` >= '$today' AND `date` < '$final'" ;
$sql2="SELECT count(*) from ((applicationid INNER JOIN job ON applicationid.JobID = job.JobID) INNER JOIN `part-timer` on applicationid.`Part-timerID` = `part-timer`.`Part-TimerID`)where `part-timer`.Username = '$username' ";
$sql3="SELECT count(*) FROM enquiry WHERE `date` > date_sub(now(), interval 1 week)";
$sql4="SELECT count(*) from `part-timer_payment` as a inner join `part-timer` as b on a.`part-timerID`=b.`part-timerID` inner join userdata as c on b.Username=c.Username where `Payment_Status`='Pending' AND c.username='$username' ";
$query = "SELECT Job_type,count(Job_type) FROM job GROUP BY `Job_type`";  
$result = mysqli_query($con, $query);  

$result1=mysqli_query($con,$sql1);
$result2=mysqli_query($con,$sql2);
$result3=mysqli_query($con,$sql3);
$result4=mysqli_query($con,$sql4);


?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>8-Venture | User </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ 
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">-->
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- data-table CSS
		============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- charts C3 CSS
		============================================ -->
    <link rel="stylesheet" href="css/c3.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
                    <![endif]-->

    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3><?php echo ($_SESSION['mySession'])?></h3>
                    <p>Part Timer</p>
                    <strong>8-V	</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        
                                
                         <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="home.php" class="dropdown-item">Home</a>
                                <a href="dashboard.php" class="dropdown-item">Dashboard</a>                              
                                </div>
                        </li>
                           
                        
 
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-coins"></i> <span class="mini-dn">Payment</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="payment.php" class="dropdown-item">Payment</a>
                             </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-briefcase"></i> <span class="mini-dn">Jobs</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="home.php" class="dropdown-item">Find Job</a>
                                <a href="appliedjob.php" class="dropdown-item">Applied Job</a>
                                <a href="jobrating.php" class="dropdown-item">Job Rating</a>                              
                              </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-question-circle"></i> <span class="mini-dn">Forum</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="forum.php" class="dropdown-item">Forum</a>
                                <a href="inquiry.php" class="dropdown-item">Inquiry</a>

                            </div>
                        </li>
                     </ul>
                </div>
            </nav>
        </div>
        <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                               <div class="header-top-menu tabl-d-n">
                            </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                      
                                            <li class="nav-item" style="margin-right:5px;">

                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"  style="margin-left:30px;">
                                                
                                                <span class="admin-name"><?php echo ($_SESSION['mySession'])?></span>
                                                <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                                <li><a href="profile.php"><span class="adminpro-icon adminpro-user-rounded author-log-ic"></span>My Profile</a>
                                                </li>
                                                <li><a href="logout.php"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--														 non functionable 																										-->
                                        <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class=""></i></a>

                                            <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated flipInX">
                                                <ul class="nav nav-tabs custon-set-tab">
                                                    <li class="active"><a data-toggle="tab" href="#Notes">Notes</a>
                                                    </li>
                                                    <li><a data-toggle="tab" href="#Projects">Projects</a>
                                                    </li>
                                                    <li><a data-toggle="tab" href="#Settings">Settings</a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content">
                                                    <div id="Notes" class="tab-pane fade in active">
                                                        <div class="notes-area-wrap">
                                                            <div class="note-heading-indicate"></div>
                                                            <div class="notes-list-area notes-menu-scrollbar">
                                                                <ul class="notes-menu-list">
                                                                    <li></li></ul>                                                                                                                                  
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="Projects" class="tab-pane fade">
                                                        <div class="projects-settings-wrap">
                                                            <div class="note-heading-indicate"></div>
                                                            <div class="project-st-list-area project-st-menu-scrollbar">
                                                                <ul class="projects-st-menu-list">
                                                                 <li></li></ul></div>
                                                    </div>
                                                    <div id="Settings" class="tab-pane fade">
                                                        <div class="setting-panel-area">
                                                            <div class="note-heading-indicate">
                                              				<ul class="setting-panel-list">
                                                                <li></ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            </div>
 											<!--                                         		  Non functionable 								-->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end-->
            
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<div class="breadcome-heading">										
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="home.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><a href="dashboard.php"><strong>Dashboard</strong></a> <span class="bread-slash"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- income order visit user Start -->
            <div class="income-order-visit-user-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Payment</h2>
                                        <div class="main-income-phara">
                                            <p>Monthly</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php if($r=mysqli_fetch_assoc($result4)){ echo $r['count(*)'];
                                            } ?></span></h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline4"></span>
                                        </div>
                                    </div>
                                    <div class="income-range">
                                    <p>Payment</p>
                                    <a href="payment.php"><span class="income-percentange">More details &nbsp;<i class="fa fa-level-up"></i></span></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Jobs Available</h2>
                                        <div class="main-income-phara ">
                                            <p>Weekly</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php if($r=mysqli_fetch_assoc($result1)){ echo $r['count(*)'];
                                            } ?></span></h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline6"></span>
                                        </div>
                                    </div>
                                    <div class="income-range ">
                                        <p>New Jobs</p>
                                        <a href="home.php"><span class="income-percentange">More details &nbsp;<i class="fa fa-level-up"></i></span></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Applied Job</h2>
                                        <div class="main-income-phara visitor-cl">
                                            <p>Today</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php if($r=mysqli_fetch_assoc($result2)){ echo $r['count(*)'];
                                            } ?></span></h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline1"></span>
                                        </div>
                                    </div>
                                    <div class="income-range ">
                                        <p>Jobs applied</p>
                                         <a href="appliedjob.php"><span class="income-percentange">More details &nbsp;<i class="fa fa-level-up"></i></span></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Forum</h2>
                                        <div class="main-income-phara">
                                            <p>Monthly</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php if($r=mysqli_fetch_assoc($result3)){ echo $r['count(*)'];
                                            } ?></span></h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline2"></span>
                                        </div>
                                    </div>
                                    <div class="income-range ">
                                        <p>New Comment</p>
                                         <a href="forum.php"><span class="income-percentange">More details &nbsp;<i class="fa fa-level-up"></i></span></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- income order visit user End -->
			
            <!-- inquiry -->
            <?php 
             $inquiry= mysqli_query ($con, "Select * from enquiry as a inner join `Part-timer` as b on a.`Part-TimerID`= b.`Part-TimerID` ORDER BY EnquiryID DESC LIMIT 1 ");
              
            ?><?php
					while($row=mysqli_fetch_array($inquiry)){ 
						?>
				<div class="feed-mesage-project-area">
                <div class="container-fluid">
                    <div class="row">
						
                        <div class="col-lg-4">
                            <div class="sparkline11-list shadow-reset mg-tb-30">
                                <div class="sparkline11-hd">
                                    <div class="main-sparkline11-hd">
                                        <h1>Latest Inquiry</h1>
                                        <div class="sparkline11-outline-icon">
                                            <span class="sparkline11-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span class="sparkline11-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="sparkline11-graph dashone-comment dashtwo-comment comment-scrollbar">
                                    <div class="daily-feed-list">
                                            <div class="daily-feed-content" style="height: 75px;">
                                            <h4><?php echo $row['Enquiry'];?></h4><br>
                                            <p class="res-ds-n-t"><?php echo $row['Date'];?></p>
                                            </div>
                                    </div>
                                    <div class="clear"></div>
                                    <div style="margin-left:180px; margin-top:50px;"><a href="forum.php">View Reply</a></div>
                                </div>
                            </div>
                        </div>
                        <?php
							}
						?>            
                        <!-- applied job -->
                        <?php   
  $username = $_SESSION['mySession'];
  $result = mysqli_query ($con, "Select * From ((applicationid INNER JOIN job ON applicationid.JobID = job.JobID) INNER JOIN `part-timer` on applicationid.`Part-timerID` = `part-timer`.`Part-TimerID`) WHERE `part-timer`.Username='$username'");
 
 ?>
                         <div class="col-lg-4">
                            <div class="sparkline9-list shadow-reset mg-tb-30">
                                <div class="sparkline9-hd">
                                    <div class="main-sparkline9-hd">
                                        <h1>Job List</h1>
                                        <div class="sparkline9-outline-icon">
                                            <span class="sparkline9-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                         
                                            <span class="sparkline9-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                
                                
<?php while( $row = mysqli_fetch_array($result)){ ?>
                         <div class="sparkline9-graph dashone-comment">
                                    <div class="datatable-dashv1-list custom-datatable-overright dashtwo-project-list-data">
                                    <table class="table table-striped" data-toggle="table" data-pagination="true"  data-show-columns="true" data-resizable="false" data-cookie="true" data-page-size="5" data-page-list="[5, 10, 15, 20, 25]" data-cookie-id-table="saveId" >
                                            <thead>
                                                <tr>
                                                    <th data-field="JobID">ID</th>
                                                    <th data-field="JobTitle">Project</th>
                                                    <th data-field="salary">Price </th>
                                                    <th data-field="Job_Status">Status </th>
                                                    <th data-field="Application_Status">Application Status </th>
                                                    <th data-field="company" data-editable="false">Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                   <tr>
                                                   <?php while( $row = mysqli_fetch_assoc($result)){ ?>

                                                    <td><?php echo $row['JobID'];?></td>
                                                    <td><?php echo $row['JobTitle'];?></td>
                                                    <td><?php echo $row['salary'];?></td>
                                                    <td><?php echo $row['Job_Status'];?></td>
                                                    <td><?php echo $row['Application_Status'];?></td>
                                                    <td><a href="appliedjob.php">More details</a></td>
                                                   											
                                                 </tr>
                                                 <?php } ?>
                                                </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <?php } ?>	
                        <!--  -->
                          <div class="col-lg-4">
                            <div class="sparkline8-list shadow-reset mg-tb-30">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Ratings</h1>
                                        <div class="sparkline8-outline-icon">
                                            <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
 									<div class="sparkline8-graph dashone-comment messages-scrollbar dashtwo-messages">
                                    <div class="comment-phara">                                                                               
                                    
                                    <p>Ratings for Completed jobs</p>
                                </div>
                                
                                <?php 
                                	$result5 = mysqli_query ($con, "Select * From ((rating INNER JOIN job ON rating.JobID = job.JobID) INNER JOIN `part-timer` on rating.`Part-TimerID` = `part-timer`.`Part-TimerID`)WHERE `part-timer`.Username='$username'");
                                	
                                    $r = mysqli_fetch_array($result5);																		
                                	
                                	
                                ?>
                               <h4><a href="jobrating.php"><?php echo $r['JobTitle']?></a></h4>                                                             
                                 <span class="heading">Rating :</span>
                                                        <span class="fa fa-star <?php if($r['Rating_Score']>=1){
                                        echo 'checked"'; }?>"></span>                                                       
                                                        <span class="fa fa-star <?php if($r['Rating_Score']>=2){
                                        echo 'checked"'; }?>"></span>
                                                        <span class="fa fa-star <?php if($r['Rating_Score']>=3){
                                        echo 'checked"'; }?>"></span>
                                                        <span class="fa fa-star <?php if($r['Rating_Score']>=4){
                                        echo 'checked"'; }?>"></span>                                                       
                                                        <span class="fa fa-star <?php if($r['Rating_Score']>=5){
                                        echo 'checked"'; }?>"></span>								
								<br>
								<br>  
								 
										</div>
										</div>
										</div>
										</div>
										</div>
                        </div>
                   

                        
                            <!-- Footer Start-->
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                         <p>  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by | <a href="home.php" target="_blank">8-Venture</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
      <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/flot/jquery.flot.spline.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/jquery.flot.pie.js"></script>
    <script src="js/flot/Chart.min.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- map JS
		============================================ -->
    <script src="js/map/raphael.min.js"></script>
    <script src="js/map/jquery.mapael.js"></script>
    <script src="js/map/france_departments.js"></script>
    <script src="js/map/world_countries.js"></script>
    <script src="js/map/usa_states.js"></script>
    <script src="js/map/map-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
   

</html>