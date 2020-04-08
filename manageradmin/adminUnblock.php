<?php 
include("connection.php");
$id=intval($_GET['ID']);
$query = "UPDATE `part-timer` SET Status='Active' where `part-timerID`='$id'";
        
        if (!mysqli_query($con,$query)){
        
            die('Error: ' . mysqli_error($con));
        } 
        else {
            echo '<script>alert("This part-timer has been unblocked.He can apply job now");window.location.href = "adminremovePartTimer.php";</script>';
        }

?>