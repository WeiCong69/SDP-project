<?php
include("connection.php");

$pass = $_POST['inputPassword'];
$pass = md5($pass);
$confirmpass = $_POST['confirmPassword'];
$confirmpass = md5($confirmpass);

$user = $_POST['Username'];
$check = mysqli_query($con,"select * from userdata where Username ='$user'");
$checkrows = mysqli_num_rows($check);
 if($checkrows>0) {
      echo '<script>alert("Username already exist. Please try another username.");
window.location.href = "registeradmin.php";
</script>';
	 /*  header('Location: register.php'); */
   } else { 
   
$sql2="INSERT INTO userdata(Username, Password, Email, Role)

VALUES

('$_POST[Username]','$pass','$_POST[Email]','3')";


	
/* if (!mysqli_query($con,$sql))
{
/* die('Error: ' . mysqli_error($con)); */
$result2 = mysqli_query($con, $sql2) or die('Error: ' . mysqli_error($con));


echo '<script>alert("1 record added!Proceed to login.");
window.location.href = "Managerdashboard.php";
</script>';

mysqli_close($con);
}

?>