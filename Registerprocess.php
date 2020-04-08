<?php
include("Mysqlcon.php");

$pass = $_POST['inputPassword'];
$passs = md5($pass);
$confirmpass = $_POST['confirmPassword'];
$cpass = md5($confirmpass);

$user = $_POST['Username'];
$check = mysqli_query($con,"select * from userdata where Username ='$user'");
$checkrows = mysqli_num_rows($check);
 if($checkrows>0) {
      echo '<script>alert("Username already exist. Please try another username.");
window.location.href = "register.php";
</script>';
	 /*  header('Location: register.php'); */
   }	else if ($passs != $cpass){
	 echo '<script>alert("Password does not match, pls try again with the same password.");
window.location.href = "register.php";
</script>';
	}   else { 
   
$sql2="INSERT INTO userdata(Username, Email, Password, Role)

VALUES

('$_POST[Username]','$_POST[Email]','$passs','1')";

$sql="INSERT INTO `part-timer`(FullName, Gender, Email, PhoneNumber, Username)

VALUES

('$_POST[FullName]','$_POST[Gender]','$_POST[Email]','$_POST[PhoneNumber]','$_POST[Username]')";


	
/* if (!mysqli_query($con,$sql))
{
/* die('Error: ' . mysqli_error($con)); */
$result2 = mysqli_query($con, $sql2) or die('Error: ' . mysqli_error($con));
$result = mysqli_query($con, $sql) or die('Error: ' . mysqli_error($con));


echo '<script>alert("1 record added!Proceed to login.");
window.location.href = "login.php";
</script>';

mysqli_close($con);
}

?>