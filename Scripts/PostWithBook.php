<?php
session_start();
require 'connect.php';

$ProductID = $_SESSION['ProductID'];
$Description = $_POST['Description'];
$Price = $_POST['Price'];
$SellerID = $_SESSION['UID'];
$Author = $_POST['Author'];
$Edition = $_POST['Edition'];


$insert_query = "INSERT INTO `post`(`Description`, `SellerID`, `ProductID`, `Price`) VALUES ('{$Description}','{$SellerID}','{$ProductID}','{$Price}')";
$result = mysql_query($insert_query);
//The while - lets remove the while.
if(!$result)
	echo mysql_error();
else
{	
	$result = mysql_query("SELECT PostID FROM post WHERE ProductID='{$ProductID}' and Description='{$Description}' and Price='{$Price}' and SellerID='{$SellerID}'");

	$row = mysql_fetch_array($result);
	  //echo $row['ProductName'] . " " . $row['ProductID']." " . $row['IsBook'];
	  $PostID = $row['PostID'];
	 
	
	$insert_query = "INSERT INTO `books`(`PostID`, `Author`, `Edition`) VALUES ('{$PostID}','{$Author}', '{$Edition}')";
	$result = mysql_query($insert_query);
	//The while - lets remove the while.
	if(!$result)
		echo mysql_error();
	else
		header('Location: PostSuccess.php');

}

?>