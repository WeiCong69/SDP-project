<!DOCTYPE html>
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
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form action="Registerprocess.php" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="FullName" name="FullName" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                  <label for="FullName">Full Name</label>
                </div>
              </div>
			  <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="Username" name="Username" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                  <label for="Username">Username</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="PhoneNumber" name="PhoneNumber" class="form-control" placeholder="Phone Number" required="required">
                  <label for="PhoneNumber">Phone Number</label>
                </div>
              </div>
			  <div class="col-md-6">			
					<select type="text" id="Gender" name="Gender" class="form-control" placeholder="Gender" required="required">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="Email" name="Email" class="form-control" placeholder="Email Address" required="required">
              <label for="Email">Email Address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required="required">
                  <label for="inputPassword">Password</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                  <label for="confirmPassword">Confirm password</label>
                </div>
              </div>
            </div>
          </div>
          <button id="btnSubmit" value="submit" class="btn btn-primary btn-block" href="login.php">Register</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script>
	    $(function () {
        $("#btnSubmit").click(function () {
            var password = $("#inputPassword").val();
            var confirmPassword = $("#confirmPassword").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
	</script>

</body>

</html>
