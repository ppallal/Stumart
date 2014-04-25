<?php
require’connect.php’;
$Image = $_POST[‘Image‘];
$Description = $_POST[‘Description’];
$Title = $_POST[‘Title’];
$select_query = ‘INSERT into softcopy(‘Images’,’Description’,’Title’) VALUES(‘{$Image}’, ‘{$Description}’, ‘{$Title}’);
$result = mysql_query($select_query);
if(!$select_query_run)
    echo mysql_error();

?>
