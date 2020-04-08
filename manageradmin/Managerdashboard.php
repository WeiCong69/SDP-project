<!DOCTYPE html>
<html class="no-js" lang="en">
<?php 
include("connection.php");
include ("session.php");

$today = date("Y-m-d");
$final=date('Y-m-1', strtotime("+1 month"));

$sql1="SELECT count(*) from job where `date` >= '$today' AND `date` < '$final'";
$sql2="SELECT count(*) from `part-timer`";
$sql3="SELECT count(*) FROM enquiry WHERE `date` > date_sub(now(), interval 1 week)";
$sql4="SELECT count(*) from `payment` where `Status`='Pending' AND `Due_date` > '$today' AND `Due_date` < '$final'";
$query = "SELECT Job_type,count(Job_type) FROM job GROUP BY `Job_type`";  
$query2 = "SELECT DATE_FORMAT(`date`, '%M') `month`, count(*)  FROM job GROUP BY DATE_FORMAT(`date`, '%M') ORDER BY FIELD( DATE_FORMAT(`date`, '%M'), 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' )"; 
$barchart2="SELECT DATE_FORMAT(`date`, '%M') `month`, sum(Salary*`Part-timer_needed`) as pay FROM job GROUP BY DATE_FORMAT(`date`, '%M') ORDER BY FIELD( DATE_FORMAT(`date`, '%M'), 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' )"; 
$result5 = mysqli_query($con, $query2);  
$result = mysqli_query($con, $query);  

$result1=mysqli_query($con,$sql1);
$result2=mysqli_query($con,$sql2);
$result3=mysqli_query($con,$sql3);
$result4=mysqli_query($con,$sql4);
$result6=mysqli_query($con,$barchart2);
?>
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

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
               <script type="text/javascript">  
               google.charts.load('current', {'packages':['corechart']});  
               google.charts.setOnLoadCallback(drawChart);  
               function drawChart()  
               {  
                    var data = google.visualization.arrayToDataTable([  
                              ['Category', 'Amount'],  
                              <?php  
                              while($row = mysqli_fetch_array($result))  
                              {  
                                   echo "['".$row["Job_type"]."', ".$row["count(Job_type)"]."],";  
                              }  
                              ?>  
                         ]);  
                    var options = {  
                          title: 'Percentage of Job based on Job category',  
                          //is3D:true,  
                          pieHole: 0.4  
                         };  
                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                    chart.draw(data, options);  
               }  
//barchart1
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
                            ['Month', 'Job Count'],  
                              <?php  
                              while($row5 = mysqli_fetch_array($result5))  
                              {  
                               
                                   echo "['".$row5["month"]."', ".$row5["count(*)"]."],";  
                              }  
                              ?>          
        ]);

        var options = {
          title: '',
          width: 820,
          height:400,
          legend: { position: 'none' },
          chart: { title: '',
                   subtitle: '' },
          bars: 'vertical', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Job Count'} // Top x-axis.
            }
          },
          bar: { groupWidth: "30%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
//barchart2

      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
                            ['Month', 'Job Count'],  
                              <?php  
                              while($row6 = mysqli_fetch_array($result6))  
                              {  
                               
                                   echo "['".$row6["month"]."', ".$row6["pay"]."],";  
                              }  
                              ?>          
        ]);

        var options = {
          title: '',
          width: 1220,
          height:750,
          legend: { position: 'none' },
          chart: { title: '',
                   subtitle: '' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Job Count'} // Top x-axis.
            }
          },
          bar: { groupWidth: "50%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div1'));
        chart.draw(data, options);
      };    
      };               
    </script>  
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
                    <p>Manager</p>
                    <strong>8-V	</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        
                                
                         <li class="nav-item"><a href="Managerdashboard.php"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span></a>
                        </li>
                           
                        
                      	<li class="nav-item"><a href="managerviewjob.php"><i class="fa big-icon fa-envelope"></i> <span class="mini-dn">Job Post</span></a>
                        </li>
                        <li class="nav-item"><a href="managerviewpaymentandrating.php"><i class="fa big-icon fa-coins"></i> <span class="mini-dn">Payment</span></a>
                        </li>
                        <li class="nav-item"><a href="registeradmin.php"><i class="fa big-icon fa-users"></i> <span class="mini-dn">Add Admin Account</span></a>
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
                                            <li><a href="Managerdashboard.php">Home</a> <span class="bread-slash">/</span>
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
                                        <h2>Uploaded Job</h2>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span>&nbsp;</span><span class="counter"><?php if($r=mysqli_fetch_assoc($result1)){ echo $r['count(*)'];
                                            } ?></span></h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline4"></span>
                                        </div>
                                    </div>
                                    <div class="income-range">
                                    <p></p>
                                    <a href="managerviewpaymentandrating.php"><span class="income-percentange">More details &nbsp;<i class="fa fa-level-up"></i></span></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Number of Part-timer</h2>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php if($r2=mysqli_fetch_assoc($result2)){ echo $r['count(*)'];
                                            } ?></span></h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline6"></span>
                                        </div>
                                    </div>
                                    <div class="income-range ">
                                        <p>People</p>
                                        <a href="managerviewjob.php"><span class="income-percentange">More details &nbsp;<i class="fa fa-level-up"></i></span></a>
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
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php if($r3=mysqli_fetch_assoc($result3)){ echo $r3['count(*)'];
                                            } ?></span></h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline1"></span>
                                        </div>
                                    </div>
                                    <div class="income-range ">
                                        <p>New Enquiry</p>
                                         <a href="forum.php"><span class="income-percentange">More details &nbsp;<i class="fa fa-level-up"></i></span></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Pending Payment</h2>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php if($r4=mysqli_fetch_assoc($result4)){ echo $r4['count(*)'];
                                            } ?></span></h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline2"></span>
                                        </div>
                                    </div>
                                    <div class="income-range ">
                                        <p>Jobs</p>
                                         <a href="managerviewpaymentandrating.php"><span class="income-percentange">More details &nbsp;<i class="fa fa-level-up"></i></span></a>
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
            <div class="feed-mesage-project-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="sparkline11-list shadow-reset mg-tb-30">
                                <div class="sparkline11-hd">
                                    <div class="main-sparkline11-hd">
                                        <h1>Inquiry</h1>
                                    </div>
                                </div>              
                                <div class="feed-mesage-project-area">
                                    <div id="piechart" style="width:395px; height: 400px;">
                                 <div class="container-fluid">
                                    <div class="row">
                                <div style="width:auto;">  
                            
                                
                        </div>  
                    </div>  
                        </div>
                         </div>
                         </div>                 
                         </div>                     
                         </div>  
  
            <!-- joblist -->
            <div class="feed-mesage-project-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="sparkline11-list shadow-reset mg-tb-30">
                                <div class="sparkline11-hd">
                                    <div class="main-sparkline11-hd">
                                        <h1>Job Count By Month</h1>
                                    </div>
                                </div>              
                                <div class="feed-mesage-project-area">
                                 <div class="container-fluid">
                                    <div class="row">
                                <div style="width:auto;">
                                <div id="top_x_div" style="width: 400px; height: 400px;"></div>      
                          </div> 
                    </div>  
                        </div>
                         </div>
                         </div>                 
                         </div>                     
                         </div>                      

                <!-- Total Payment by month -->
            <div class="feed-mesage-project-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline11-list shadow-reset mg-tb-30">
                                <div class="sparkline11-hd">
                                    <div class="main-sparkline11-hd">
                                        <h1>Total Payment by month</h1>
                                    </div>
                                </div>              
                                <div class="feed-mesage-project-area">
                                 <div class="container-fluid">
                                    <div class="row">
                                <div style="width:auto;">  
                            <div id="top_x_div1"></div>
                          </div> 
                    </div>  
                        </div>
                         </div>
                         </div>                 
                         </div>                     
                         </div> 
 
                        <!--  -->
                         
                                                            
                            <!-- Footer Start-->
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                         <p>  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by | <a href="Managerdashboard.php" target="_blank">8-Venture</a></p>

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