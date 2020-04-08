<?php session_start(); ?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>8-Venture</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="index.php" method="post">
          <div class="form-group">
            <div class="form-label-group" data-validate = "Username">
              <input type="text" id="Username" name="Username" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
              <label for="Username">Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group" data-validate = "Password" >
              <input type="password" id="Password" name="Password" class="form-control" placeholder="Password" required="required">
			  <label for="Password">Password</label>
			</div>
          </div>
          <button class="btn btn-primary btn-block" type="Submit">
		  <a href="index.php" style="color: white; text-decoration:none;">Login </a>
		  
		  </button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
          <a class="d-block small mt-3" href="index.php">Back to main menu</a>        
          </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
