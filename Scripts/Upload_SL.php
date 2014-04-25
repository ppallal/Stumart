<?php
require’connect.php’;
$Url = $_POST[‘Url‘];
$Description = $_POST[‘Description’];
$Title = $_POST[‘Title’];
$select_query = "INSERT into softlink(‘Url’,’Description’,’Title’) VALUES(‘{$Url}’, ‘{$Description}’, ‘{$Title}’ ");
$result = mysql_query($select_query);
if(!$select_query_run)
    echo mysql_error();

?>