<?php
$email = $_GET['Email'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Include the Composer generated autoload.php file. 
require 'C:\xampp\composer\vendor\autoload.php'; */

/* If you installed PHPMailer without Composer do this instead: */

require 'PHPMailer-master\src\Exception.php';
require 'PHPMailer-master\src\PHPMailer.php';
require 'PHPMailer-master\src\SMTP.php';

/* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
$mail = new PHPMailer(TRUE);
?>


<?php
try {

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'griblepop@gmail.com';   // SMTP username
$mail->Password = '324586nicson';           // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to



   /* Set the mail sender. */
   $mail->setFrom('griblepop@gmail.com', '8-Venture');

   /* Add a recipient. */
   //$mail->addAddress('firdaus@apu.edu.my', 'receipient');
	$mail->addAddress($email);
	
   /* Set the subject. */
   $mail->Subject = 'Password Reset';

   /* Set the mail message body. */
   $mail->Body = "Press the following link to reset your password  '<a href='http://localhost:8080/8-Venture/reset-password.php'> </a>' ";

   /* Finally send the mail. */
   $mail->send();
}
catch (Exception $e)
{
   /* PHPMailer exception. */
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   /* PHP exception (note the backslash to select the global namespace Exception class). */
   echo $e->getMessage();
}
?>


<?php
if ($mail->Send()) { 
        header("Location: login.php");//echo "Message Sent!";            
    }

?>