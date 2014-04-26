<?php
session_start();
require ‘connect.php’;
$ProductName = $_POST[‘ProductName’];
$IsBook = $_POST[‘IsBook’];
$select_query = INSERT INTO `products`(`ProductName`, `IsBook`) VALUES (‘{$ProductName}’, ‘{$IsBook}’);
$select_query_run = mysql_query($select_query);
if(!$select_query_run)
	echo mysql_error();
#Should add a redirection
?>
