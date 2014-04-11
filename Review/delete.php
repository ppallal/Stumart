<?php 
require('connect.php');
$deleteid=$_GET['id'];
mysql_query("DELETE FROM cmnt WHERE id=$deleteid");
header("location: cb.php");
?>