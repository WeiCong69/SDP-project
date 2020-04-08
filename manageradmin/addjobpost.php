<?php
include("connection.php");

$sql="INSERT INTO job(jobtitle,location,date,Job_type,salary,description) 
VALUES 
('$_POST[jobtitle]','$_POST[location]','$_POST[start]','$_POST[jobtype],'$_POST[salary]','$_POST[JobDetails]')";

$sql="INSERT INTO `job`(`JobTitle`, `location`, `salary`, `date`, `Job_type`, `Description`, `Job_Status`, `Username`) VALUES ('$_POST[jobtitle]','$_POST[location]','$_POST[salary]','$_POST[date]','$_POST[JobType]','$_POST[JobDetails]','Active',,)";
	if(isset($_POST['submit'])){

		if (!mysqli_query($con,$sql))
		{
		die('Error: ' . mysqli_error($con));
		}
		echo '<script>alert("1 record added!");
		window.location.href = "#";
		</script>';
		
		mysqli_close($con);

	}
		
		?>
