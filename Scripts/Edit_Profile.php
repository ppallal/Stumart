<?php
  session_start();
require 'connect.php';

$UID = $_SESSION[‘UID’];
$FirstName = $_POST[‘FirstName’];
$LastName = $_POST[‘LastName’];
$USN = $_POST['USN'];
$Email =  $_POST['Email'];
$Phone =  $_POST['Phone'];
$Photo =  $_POST['Photo'];

$select_query = "INSERT INTO useraccount(`FirstName`, `LastName`, `USN`, `Email`, `Phone`, `Photo`, `Timestamp`) VALUES (‘{$FirstName}’, ‘{$LastName}’, ‘{$USN}’, ‘{$Email}’, ‘{$Phone}’, ‘{$Photo}’)WHERE UID='{$UID}'";

$result = mysql_query($select_query);
if(!$select_query_run)
    echo mysql_error();
 #Do some redirection no
}
  ?>
