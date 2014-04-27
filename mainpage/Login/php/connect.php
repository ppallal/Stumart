
// incase of localhost , configure the below code according to your specifications

<?php
  $conn_error ='Could not connect';
  $host='localhost';
  $user='root';
  $pass='';
  $mysql_db='stumart';
  mysql_connect($host,$user,$pass) or die(conn_error);
  mysql_select_db($mysql_db);

?>
