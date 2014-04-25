<?php
session_start();
require 'connect.php';
$PostID = $_REQUEST[‘PostID’];
$select_query = "DELETE  FROM post WHERE PostID='{$PostID}'";
$result = mysql_query($select_query);
if(!$select_query_run)
    echo mysql_error();
?>
