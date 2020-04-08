<?php
include("Mysqlcon.php");
include ("session.php");
$gg = md5('456');

$username = $_SESSION['mySession'];
$result = mysqli_query ($con, " SELECT * from `part-timer` INNER JOIN userdata on `part-timer`.Username = userdata.Username where userdata.Username = '$username' "); 
$row = mysqli_fetch_array($result);

if (isset($_POST["Submit"])){
$sql = "UPDATE userdata SET
Email='$_POST[email]'
WHERE Username='$_POST[username]'";
$result2 = mysqli_query($con, $sql) or die('Error: ' . mysqli_error($con));
	
$sql2 = "UPDATE `part-timer` SET
Email='$_POST[email]',
FullName='$_POST[fullname]',
PhoneNumber='$_POST[phonenumber]',
About='$_POST[About]',
Address='$_POST[city]'
WHERE Username='$_POST[username]'";
$result3 = mysqli_query($con, $sql2) or die('Error: ' . mysqli_error($con));
echo '<script>alert("Updated");	
	window.location.href = "profile.php";
			  </script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>8-Venture</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="profile/jquery.min.js"></script>
    <link href="profile/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="profile/profile.css">    
    </head>
<body>
<style>
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
    text-decoration:none;

}

.previous {
  background-color: #f1f1f1;
  color: black;
  
}
</style>
<button style="margin-left: 30px; margin-bottom:5px;"><a href="dashboard.php" class="previous">&laquo; Back to Dashboard</a></button>

<div class="container">
<div class="row">
        <div class="col-lg-4">
           <div class="profile-card-4 z-depth-3">
            <div class="card">
              <div class="card-body text-center bg-primary rounded-top">
               <div class="user-box">
                <img src="img/message/1.jpg" alt="user avatar">
              </div>
              <h5 class="mb-1 text-white" id="username"> <span><?php echo $username ?> </span></h5>
              </div>
              <div class="card-body">
                <ul class="list-group shadow-none"> 
                <li class="list-group-item">
                  <div class="list-icon">
                    <i class="fa fa-phone-square"></i>
                  </div>
                  <div class="list-details">
                    <span class="name"><?php echo $row['FullName'];?></span>
                    <small>Name</small>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="list-icon">
                    <i class="fa fa-envelope"></i>
                  </div>
                  <div class="list-details">
                    <span class="email"><?php echo $row['Email'];?></span>
                    <small>Email Address</small>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="list-icon">
                    <i class="fa fa-globe"></i>
                  </div>
                  <div class="list-details">
                  <span class=".phonenumber"><th><?php echo $row['PhoneNumber'];?></th></span>
                    <small>Mobile Number</small>
                  </div>
                </li>
                </ul>
                 </div>
              </div>
           </div>
        </div>
        <div class="col-lg-8">
           <div class="card z-depth-3">
            <div class="card-body">
            <ul class="nav nav-pills nav-pills-primary nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active show"><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a>
                </li>
                                <li class="nav-item">
                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Edit</span></a>
                </li>
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active show" id="profile">
                    <h5 class="mb-3">User Profile</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>About</h6>
                            <p>
                                <?php echo $row['About'];?>
                            </p>
                        </div>
                        <div class="col-md-6">
                        	<h6>Address</h6>
                            <p>
                                <?php echo $row['Address'];?>
                            </p>
                        </div>
                     </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="edit">
                    <form action="profile.php" method="post" >
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Username</label>
                            <div class="col-lg-9">
                                <input readonly class="form-control" name="username" type="text" value="<?php echo $row['Username'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Name</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="fullname" type="text" value="<?php echo $row['FullName'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="email" type="email" value="<?php echo $row['Email'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Mobile Number</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="phonenumber" type="text" value="<?php echo $row['PhoneNumber'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Address</label>
                            <div class="col-lg-6">
                                <input class="form-control" name="city" type="text" value="<?php echo $row['Address'];?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">About</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="About" type="text" value="<?php echo $row['About'];?>"">
                            </div>
                        </div>                  
                            <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Password</label>
                            <div class="col-lg-9">
                                <a href="../forgot-password.php"> Press this link to reset password</a>
                            </div>
                        </div>
                        <!--<div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password" value="">
                            </div>
                        </div>-->
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <input type="Submit" id="Submit" name="Submit" class="btn btn-primary" value="Save Changes">
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

<script src="profile/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>