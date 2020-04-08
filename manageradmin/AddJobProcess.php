<?php
/*
include("../connection.php");

/*
$sql="INSERT INTO job(jobtitle,location,date,Job_type,salary,description) 
VALUES 
('$_POST[jobtitle]','$_POST[location]','$_POST[start]','$_POST[jobtype],'$_POST[salary]','$_POST[JobDetails]')";


$sql="INSERT INTO `job`(`JobTitle`, `location`, `salary`, `date`, `Job_type`, `Description`, `Job_Status`, `Username`) 
	VALUES 
	('$_POST[jobtitle]','$_POST[location]','$_POST[Salary]','$_POST[date]','$_POST[JobType]',
	'$_POST[Description]','Active','$_POST[Username]')";
	
	
	if(isset($_POST['Submit'])){

	$a=$_POST[jobtitle];
	$b=$_POST[location];
	$c=$_POST[Salary];
	$d=$_POST[date];
	$e=$_POST[JobType];
	$f=$_POST[Description];
	$g=$_POST[Username];

	echo $a." ".$b." ".$c." ".$d." ".$d." ".$e." ".$f." ".$g;
		
		if (!mysqli_query($con,$sql))
		{
		die('Error: ' . mysqli_error($con));
		echo '<script>window.location.href = "AddJob.php";</script>';
		}
		echo '<script>alert("1 record added!");
		window.location.href = "AddJob.php";
		</script>';
		
		mysqli_close($con);

	}
	*/


include("connection.php");
include("session.php");

/*
$sql="INSERT INTO job(jobtitle,location,date,Job_type,salary,description) 
VALUES 
('$_POST[jobtitle]','$_POST[location]','$_POST[start]','$_POST[jobtype],'$_POST[salary]','$_POST[JobDetails]')";
*/
    
    
    if(isset($_POST['Submit'])){

    $a=$_POST['jobtitle'];
    $b=$_POST['location'];
    $c=$_POST['Salary'];
    $d=$_POST['date'];
    $e=$_POST['JobType'];
    $f=$_POST['Description'];
    $g=$_SESSION['mySession'];
    $h=$_POST['PartTimerneeded'];

    $sql="INSERT INTO `job`(`JobTitle`, `location`, `salary`, `date`, `Job_type`, `Description`, `Job_Status`, `Username`, `Part-timer_needed`) 
    VALUES 
    ('$a','$b','$c','$d','$e','$f','Active','$g','$h')";
        
        if (mysqli_query($con,$sql)){
       		echo '<script>alert("Job uploaded!"); 
			window.location.href = "AddJob.php";</script>';
        } else {
            die('Error: ' . mysqli_error($con));        }
       
        mysqli_close($con);

    }
        
        ?>
		
	
