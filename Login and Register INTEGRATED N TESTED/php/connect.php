<?php
  $conn_error ='Could not connect';
  $host='localhost';
  $user='root';
  $pass='welcome';
  $mysql_db='stumart2';
  mysql_connect($host,$user,$pass) or die(conn_error);
  mysql_select_db($mysql_db);

?>
