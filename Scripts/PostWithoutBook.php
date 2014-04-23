<?php
session_start();
require 'connect.php';

$ProductID = $_SESSION['ProductID'];
$Description = $_POST['Description'];
$Price = $_POST['Price'];
$SellerID = $_SESSION['UID'];
echo $Description;
echo $ProductID;
echo $Price;
echo $SellerID;

$insert_query = "INSERT INTO `post`(`Description`, `SellerID`, `ProductID`, `Price`) VALUES ('{$Description}','{$SellerID}','{$ProductID}','{$Price}')";
$result = mysql_query($insert_query);
//The while - lets remove the while.
if(!$result)
	echo mysql_error();
else
header('Location: PostSuccess.php');

?>