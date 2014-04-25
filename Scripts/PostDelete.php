<?php
	session_start();
	require 'connect.php'
	$UID = $_SESSION['UID'];
	$PostID = $_SESSION['PostID'];
	
	if(isset($_SESSION['DeletePost']))
	{
		#Now write delete query
		$result = mysql_query("DELETE FROM `post` WHERE PostID='{$PostID}'");
		if($result)
		{
			
			
			unset($_SESSION['DeletePost']);
			header("url=ProductNames.php");
		}
		else
		{
			echo mysql_error();
		}
		
	}
	# that's all no? That's it with deleting mostly. Off we go to the next task.
?>