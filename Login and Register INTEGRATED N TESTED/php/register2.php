<?php
require 'connect.php';
$username=$_POST["username"];
$password=(md5($_POST["password"]));
$UID=$_POST['n'];
echo $UID;
$query = "INSERT INTO `login` VALUES (NULL, '{$UID}', '{$username}', '{$password}',0,CURRENT_TIMESTAMP);";
              
	       // Not required for now, will see later, if needed to fetch LoginID, use the below code
			  
	        if($query_run=mysql_query($query))
                {
                  $query1="SELECT LoginID FROM login WHERE UID = '{$UID}'";
                  if($query_run1=mysql_query($query1))
                  {
                        while($query_row1=mysql_fetch_assoc($query_run1))
                        {
                              $LoginID=$query_row1['LoginID'];

                        }
						echo 'success!!';
						echo $UID;
						
			// give the appropriate next page location below
			//header('Location:register2.php?n='.$LoginID);
                  }
                  else
                  {
                      echo mysql_error();
					  echo "failure";
                  }
				  
                }
                
?>
