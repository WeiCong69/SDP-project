<!DOCTYPE html>
<?php 
  include ("session.php");
 ?>
<html>
<head>
    <title>Search Bar using PHP</title>
</head>
<body>
 
<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">
     
</form>
 
</body>
</html>
 
<?php
 
$con = new PDO("mysql:host=localhost;dbname=lol",'root','');
 
if (isset($_POST["submit"])) {
    $str = $_POST["search"];
    $sth = $con->prepare("SELECT * FROM `member` WHERE FirstName = '$str'");
 
    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth -> execute();
 
    if($row = $sth->fetch())
    {
        ?>
        <br><br><br>
        <table>
            <tr>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>PhoneNumber</th>
            </tr>
            <tr>
                <td><?php echo $row->FirstName;?></td>
                <td><?php echo $row->LastName;?></td>
                <td><?php echo $row->Email;?></td>
                <td><?php echo $row->PhoneNumber;?></td>
            </tr>
 
        </table>
<?php
    }
         
         
        else{
            echo "Name Does not exist";
        }
 
 
}
 
?>