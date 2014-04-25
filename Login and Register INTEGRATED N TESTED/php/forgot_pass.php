<?php
require'connect.php';
$email=$_POST["email"];
echo $email;
//echo $password;
$query = "SELECT  SecurityQ, UID FROM useraccount WHERE Email = '{$email}' ";

                   if($query_run=mysql_query($query))
                  {
						if(mysql_num_rows($query_run)==0)
					{
						echo "Not a registered user account!!";
						
					}
					else
					{
                        while($query_row=mysql_fetch_assoc($query_run))
                        {
							  $SecQ=$query_row['SecurityQ'];
                              $UID=$query_row['UID'];
                            
                        }
						echo 'Successs!!!';
							// enter the appropriate page to go to after login
								header('Location:setpass.php?n='.$UID.'&secq='.$SecQ);
					}
				  }
                  else
                  {
                      echo mysql_error();
                  }

?>
