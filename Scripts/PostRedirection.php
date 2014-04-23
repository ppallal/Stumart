<?php
session_start();
require 'connect.php';

$ProductName = $_POST['ProductName'];
$result = mysql_query("SELECT* FROM products WHERE ProductName='{$ProductName}'");
//The while - lets remove the while.

while($row = mysql_fetch_array($result))
{
  echo $row['ProductName'] . " " . $row['ProductID']." " . $row['IsBook'];
  $ProductID = $row['ProductID'];
  $IsBook = $row['IsBook'];
  echo "<br />";
  $_SESSION['ProductID'] = $ProductID;
}

//Redirection
if($IsBook)
header('Location: WithBook.html');
else
header('Location: WithoutBook.html');


?>