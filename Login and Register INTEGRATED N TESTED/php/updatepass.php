<?php
require'connect.php';
              	
                $uid=intval($_GET['uid']);
                $newpass=mysql_real_escape_string(md5($_POST['newpass']));
				$secans=mysql_real_escape_string($_POST['secans']);
              
	echo $secans;
	echo $newpass;
                
                $query ="SELECT SecurityAns FROM useraccount WHERE UID = '{$uid}'";
               
                  if($query_run=mysql_query($query))
                  {
                        while($query_row=mysql_fetch_assoc($query_run))
                        {
                              $truesecans=$query_row['SecurityAns'];
							  echo $truesecans;
                         }
                  }
                  else
                  {
                      echo mysql_error();
                  }
				  
			   if($secans==$truesecans)
				  {
				 
						$q1="update login set password='{$newpass}' where  uid='{$uid}'";
						$query_run1=mysql_query($q1);
						
						
                 
				 header('Location:../log.html');
					}
				  else
				  {
				  echo 'Incorrect Security answer. New Password Update failed';
				  }
				  
				  
                

?>