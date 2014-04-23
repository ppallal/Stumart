<?php
  session_start();
require 'connect.php';
$UID = $_SESSION[‘UID’];
$select_query = "SELECT* FROM useraccount WHERE UID='{$UID}'";
$result = mysql_query($select_query);
if(!$select_query_run)
    echo mysql_error();

  while($row = mysqli_fetch_array($result))
  {
#First name, Lastname, USN, Email, Phone, Photo, time stamp 
#(Table structure for your ref :)

  $FirstName =$row['FirstName']." ".$last=$row['LastName'];
  $LastName=$row['Phone'];
  $USN=$row['USN'];
  $Email = $row['Email'];
$Phone = $row['Phone'];
$Photo = $row['Photo'];
  
}
  ?>
