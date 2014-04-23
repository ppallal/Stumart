<?php
session_start();
require ‘connect.php’;
$ProductName = $_POST[‘ProductName’];
$IsBook = $_POST[‘IsBook’];
$select_query = INSERT INTO `products`(`ProductName`, `IsBook`) VALUES (‘{$ProductName}’, ‘{$IsBook}’);
#Should add a redirection
?>
