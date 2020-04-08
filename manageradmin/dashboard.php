<!doctype html>
<?php 
  include ("session.php");
 ?>
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
                    <a href="#"><img src="img/message/1.jpg" alt="" /></a>
                    <h3><?php echo ($_SESSION['mySession'])?></h3>
                    <p>Admin</p>
                    <strong>8-V	</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        
                                
                         <li class="nav-item"><a href="dashboard.php"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span></a>
                        </li>
                           
                        
                      	<li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-envelope"></i> <span class="mini-dn">Job Post</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="AddJob.php" class="dropdown-item">Add New Job</a>
                                <a href="adminviewjob.php" class="dropdown-item">View Job Post</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="Test Payment.php"><i class="fa big-icon fa-coins"></i> <span class="mini-dn">Payment and Rating</span></a>
                        </li>
                        <li class="nav-item"><a href="adminremovePartTimer.php"><i class="fa big-icon fa-users"></i> <span class="mini-dn">Manage Account</span></a>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-question-circle"></i> <span class="mini-dn">Inquiry</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="../user/forummngad.php" class="dropdown-item">Forum</a>
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
                                        <li class="nav-item dropdown">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span class=""></span></a>
                                            <div role="menu" class="author-message-top dropdown-menu animated flipInX">
                                                 </div>
                                                 </li>
                                             <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                                <span class="admin-name"><?php echo ($_SESSION['mySession'])?></span>
                                                <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                                <li><a href="logout.php"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--	 non functionable 	-->
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
 											<!--    Non functionable   -->
 											
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
                                            <li><a href="dashboard.php">Home</a> <span class="bread-slash">/</span>
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
            
            <!-- View Job Post start-->
                        <?php
			    include("connection.php");
			
			    $today=date("Y-m-d");
			    $notice=" ";
			    
			
			    if(isset($_POST['Submit'])){
			
			        $status=$_POST['Status'];
			        $date=$_POST['Date'];
			        $sql2 = "SELECT * FROM JOB WHERE Job_Status='$status' AND `date`>='$date'";  
			        if(!$result=mysqli_query($con,$sql2)){
			
			            die('Error:'.mysqli_error($con));
			        }
			
			
			    }else{
			
			        $sql = "SELECT * FROM JOB";
			        if(!$result=mysqli_query($con,$sql)){
			
			            die ('Error:'.mysqli_error($con));
			        }
			    }
			?>

									<div class="container">
										<div class="text-center">
											<h3 style="font-size:40px">Job Post</h3>
										</div>
										<br>
                                      <form action="adminsearchjob.php" class="search-job" method="POST">
									    <div class="form-group col-md-6">
									      <label for="inputCity">Date</label>
									            <input type="date" name="Date" class="form-control" placeholder=" Working date" min=<?php echo $today; ?>>    </div>
									    <div class="form-group col-md-4">
									      <label for="inputState">Status</label>
                                                  <select name="Status" id="" class="form-control">
                                                    <option value="Active">Active</option>
                                                    <option value="Completed">Completed</option>
                                                    <option value="Removed">Removed</option>
                                                  </select>
											    </div>
											    <div class="form-group col-md-2">
											      <label for="inputZip"></label><br>
                                                   <input type="submit" value="Submit" name="Submit" class="btn btn-primary">
											    </div>
											  </div>
                                            <!--<div class="form-group col-md-4">
                                                <div class="form-field">
                                                    <div class="icon"><span class="icon-briefcase"></span></div>
                                             
                                                  	</div>
                                              	</div>
                                            </div>  
                                   
                                        
                                      <div class="form-group col-md-4">
                                                <div class="form-field">
                                                  <div class="select-wrap">
                                                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                </div>
                                                </div>
                                             </div>
                                      </div>
                                        

                                      
                                             <div class="form-group col-md-4 ">
                                                <div class="form-field text-center">
 
                                                  </div>
                                              </div> -->
                                     
                                 
									</form><br><br>
									<div class="container">
											<table class ="table table-striped" width="150%">
											    <tr>
											    <td scope="col">Job Title</td>
											    <td scope="col">Location</td>
											    <td scope="col">Salary</td>
											    <td scope="col">Date</td>
											    <td scope="col">Job_type</td>
											    <td scope="col">Description</td>
											    <td scope="col">Job Status</td>
											    <td scope="col">Number of people needed</td>
											    <td scope="col">Uploaded by</td>
											  
											
											<?php
											
											    while($r=mysqli_fetch_assoc($result)){
											
											        echo "<tr>";
											        echo "<td>";
											        echo $r['JobTitle'];
											        echo "</td>";
											        echo "<td>";
											        echo $r['location'];
											        echo "</td>";
											        echo "<td>";
											        echo $r['salary'];
											        echo "</td>";
											        echo "<td>";
											        echo $r['date'];
											        echo "</td>";
											        echo "<td>";
											        echo $r['Job_type'];
											        echo "</td>";
											        echo "<td>";
											        echo $r['Description'];
											        echo "</td>";
											        echo "<td>";
											        echo $r['Job_Status'];
											        echo "</td>";
											        echo "<td>";
											        echo $r['Part-timer_needed'];
											        echo "</td>";
											        echo "<td>";
											        echo $r['Username'];


											        
											        }
											        mysqli_close($con); //to close the database connection
											?>
											</table>
											</div>
		</div>
            <!-- View Job Post End-->
                                                            
                            <!-- Footer Start-->
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                         <p>  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by | <a href="dashboard.php" target="_blank">8-Venture</a></p>

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