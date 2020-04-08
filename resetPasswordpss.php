<?php
$pass = $_POST['inputPassword'];
$passs = md5($pass);
$confirmpass = $_POST['confirmPassword'];
$cpass = md5($confirmpass);
$user = $_POST['Username'];

include("Mysqlcon.php");

if ($passs != $cpass){
	echo '<script>alert("Password does not match, pls try again with the same password.");
window.location.href = "reset-password.php";
</script>';
	} else {
		
$sql= "UPDATE userdata SET Password = '$passs' WHERE Username = '$user'";

$result = mysqli_query($con, $sql) or die('Error: ' . mysqli_error($con));

echo '<script>alert(" Password changed succesfully! ");
window.location.href = "login.php";
</script>';

mysqli_close($con);

	}
?>