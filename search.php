<?php
	require 'connect.php';
	$query = "SELECT ProductName as PN FROM products group By PN";
	$out="";
	if($query_run=mysql_query($query))
	{
		 while($query_row=mysql_fetch_assoc($query_run))
            {
                $out=$out.$query_row['PN'].";";
                              

            }
	}
	echo $out

?>