<?php 
include("connection.php");
include ("session.php");
 $id=intval($_REQUEST['JobID_fixed']);

 $sql="SELECT C.FullName,A.JobID,C.`Part-timerID`,D.PaymentID from job as A 
 		   INNER JOIN applicationid as B on A.JobID=B.JobID 
        inner JOIN `part-timer` as C on B.`Part-timerID`=C.`Part-timerID` 
        INNER JOIN payment as D on D.JobID=A.JobID
        where A.Job_Status='Completed' AND D.Status='pending' AND A.JobID='$id'";
        
 if(!$result=mysqli_query($con,$sql)){  
 	die('Error'.mysqli_error($con));
 }

         if(isset($_POST['rating']) && $_POST['Submit']){
            foreach($_POST['rating'] as $id => $rating)
            {
                //$rating=$_POST['rating'];
                $parttimerID=$_REQUEST['Part-timerID'][$id];
                $jobID=$_REQUEST['JobID'][$id];
                $paymentID=$_REQUEST['PaymentID'][$id];

            $checkRating = $con->prepare('SELECT * FROM `Rating` WHERE `Part-timerID`=? AND `JobID`=? ');
            $checkRating->bind_param('ii',$parttimerID,$jobID);
            $checkRating->execute();
            $checkRating=$checkRating->get_result();

            if($checkRating->num_rows<1){
            $insertPayment="INSERT INTO `part-timer_payment`( `JobID`, `Part-timerID`, `Payment_Status`) 
                            VALUES ('$jobID','$parttimerID','Paid')";
            $insertRating="INSERT INTO `rating`(`Rating_Score`, `Part-timerID`, `JobID`) 
                            VALUES ('$rating','$parttimerID','$jobID')";

              if(!$insert1=mysqli_query($con,$insertPayment)){
                  die('Error'.mysqli_error($con));
              }else{
                $done= true;
                if(!$insert2=mysqli_query($con,$insertRating)){
                  die('Error'.mysqli_error($con));
                }
              }
            }else{
              $done= false;
            }
          }

          if ($done==true){
            echo '<script>alert("Payment and Rating has been updated!");window.location.href = "test payment.php";</script>';
          }else{
              echo '<script>alert("Payment and Rating has already been updated!");window.location.href = "test payment.php";</script>';

          }
          }
?>
<DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>

<h3 style="font-size: 40px;text-align:center;padding:30px 0; ">Payment And Rating</h3>

<form action="PaymentAndRating.php" method="POST">
<div class="container" >
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Rating</th>
    </tr>
  </thead>

<?php  
 	while($r=mysqli_fetch_assoc($result)){
echo'


  <tbody>
    <tr>
      <th scope="row">'.$r['FullName'].'</th>
      <td>
                                <input type="radio" name="rating['.$r['Part-timerID'].']" value="5"> 
                                <input type="radio" name="rating['.$r['Part-timerID'].']" value="4"> 
                                <input type="radio" name="rating['.$r['Part-timerID'].']" value="3"> 
                                <input type="radio" name="rating['.$r['Part-timerID'].']" value="2"> 
                                <input type="radio" name="rating['.$r['Part-timerID'].']" value="1"> 
      </td>
    </tr>

  </tbody>

                           <input type="hidden" name="Part-timerID['.$r['Part-timerID'].']" value="'.$r['Part-timerID'].'">
                            <input type="hidden" name="JobID['.$r['Part-timerID'].']" value="'.$r['JobID'].'">
                            <input type="hidden" name="JobID_fixed" value="'.$r['JobID'].'">
                            <input type="hidden" name="PaymentID['.$r['Part-timerID'].']" value="'.$r['PaymentID'].'">
                            ';
}
?>
	


</table>
<div>
<div class="container text-center" style="padding-top: 50px;">

                    <input class="btn btn-success" type="submit" name="Submit" value="Update">
</div>
</form>
</body>
</html>