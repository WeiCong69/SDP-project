<!DOCTYPE html>
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
                    <a href="#"><img src="img/message/1.jpg" alt="" />
                    </a>
                    <h3><?php echo ($_SESSION['mySession'])?></h3>
                    <p>Admin</p>
                    <strong>8-V </strong>
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
                                        <!--     non functionable   -->
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
            
            <!-- Edit Job Start-->
            <?php
    include("connection.php");

    $jobID =intval($_GET['JobID']);
    $sql="SELECT * FROM job where JobID='$jobID'";

    if(!$result=mysqli_query($con,$sql)){

        die('Error:'. mysqli_error($con));
    }

        
    if(isset($_POST['Submit'])){

        $a=$_POST['jobtitle'];
        $b=$_POST['location'];
        $c=$_POST['Salary'];
        $d=$_POST['date'];
        $e=$_POST['JobType'];
        $f=$_POST['Description'];
        $h=$_POST['Status'];
        $i=$_POST['PartTimerneeded'];

        $update="UPDATE `job` SET 
        `JobTitle` = '$a',
        `location`='$b',
        `salary` ='$c',
        `date` ='$d',
        `Job_type` ='$e',
        `Description` ='$f', 
        `Job_Status` ='$h',
        `Part-timer_needed`='$i'WHERE JobID='$jobID'"; 

        
        if (!mysqli_query($con,$update)){
            die('Error: ' . mysqli_error($con));
        } 
        else {
            echo '<script>alert("Job details has been updated!");
			window.location.href = "adminviewjob.php";</script>';
        }
       

    }
        
?>

            
            <div class="login-form-area mg-t-30 mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <?php
                            
                            while($r=mysqli_fetch_assoc($result))
                            {
                        ?>
                        <form class="form-group"  action="EditJob.php?JobID=<?php echo $r['JobID'];?>" method="post">
                           <div class="container">
   
    <input type="hidden" name="JobID" value="<?php echo $r['JobID']; ?>">
      <div class="text-center">
	<h3 style="font-size:40px; text-align:center">Edit Job Post</h3>
	</div>
                                         
   <div class="container">
       
  <form action="EditJob.php?JobID=<?php echo $r['JobID']?>" method="post">
  <div class="form-group">
    <label>Job Title</label> 
	<input class="form-control" type="text" name="jobtitle" value="<?php echo $r['JobTitle']; ?>"/>
  </div>
    <div class="form-group">
    <label>Location</label>
         <input class="form-control" type="text" name="location" value=" <?php echo $r['location']; ?>" />
  </div>
  <div class="form-group">
    <label>Date</label>
       <input class="form-control" type="datepicker" name="date" id="start" value="<?php echo $r['date']; ?>" />

  </div>
  
  <input type="hidden" name="Username" value="<?php echo $r['Username']; ?>">
  
<div class="form-group">
    <label >Job Type</label>
                                                <select name="JobType" id="" class="form-control">
                                                <option value="Event Crew" 
                                                <?php if(($r['Job_type'])== "Event Crew"){  ?>
                                                    
                                                    Selected
                                                <?php  } ?>>Event Crew</option>
                                                <option value="Promoter"  
                                                <?php if(($r['Job_type'])== "promoter"){  ?>
                                                    
                                                    Selected
                                                <?php  } ?>>Promoter</option>
                                                <option value="Waiter"    
                                                <?php if(($r['Job_type'])== "Waiter"){  ?>
                                                    
                                                    Selected
                                                <?php  } ?>>Waiter</option>
                                                <option value="Usher"     
                                                <?php if(($r['Job_type'])== "Usher"){  ?>
                                                    
                                                    Selected
                                                <?php  } ?>>Usher</option>
                                            </select>  
                                            </div>
                                            
<div class="form-group">
    <label >Status</label>
<select name="Status" id="" class="form-control">
                                                <option value=" Active" 
                                                <?php if(($r['Job_Status'])== "Active" ){  ?>
                                                    
                                                    Selected
                                                <?php  }  ?>>Active</option>

                                                <option value="Completed " 
                                                <?php if(($r['Job_Status'])== "Completed" ){  ?>
                                                    
                                                    Selected
                                                <?php  }  ?>>Completed</option>

                                                <option value="Removed" 
                                                <?php if(($r['Job_Status'])== "Removed" ){  ?>
                                                    
                                                    Selected
                                                <?php  }  ?>>Removed</option>
                                            </select> 
                                            </div>   
   <div class="form-group">
    <label>Part-Timer Needed</label>
     <input type="number" class="form-control" name="PartTimerneeded" min="1" max="500" value= "Wage " placeholder="Part-timer Needed">
  </div>

  <div class="form-group">
    <label>Salary</label>
    <input type="number" class="form-control" name="Salary" min="50" max="500" value= "Wage " placeholder="Wage per part-timer">

  </div>
<div class="form-group">
    <label >Description</label>
    <textarea class="form-control" name="Description" rows="6"></textarea>
  </div>
 <div class="form-group text-center">
  <button type="submit" name="Submit" class="btn btn-success">Submit</button>
 </div>  

<br><br><br>
</div> 
            <?php  }  ?>
                        </form>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
            <!-- Edit Job End-->
                                                            
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