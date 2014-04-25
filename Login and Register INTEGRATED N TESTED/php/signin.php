
<?php
require'connect.php';
$username=$_POST["username"];
//echo $username;
$password=(md5($_POST["password"]));
//echo $password;
$query = "SELECT LoginID FROM login WHERE Username = '{$username}' and Password='{$password}'";

                   if($query_run=mysql_query($query))
                  {
						if(mysql_num_rows($query_run)==0)
					{
						echo "Enter valid username and password";
						
					}
					else
					{
                        while($query_row=mysql_fetch_assoc($query_run))
                        {
                              $LoginID=$query_row['LoginID'];
                            
                        }
						echo 'Successs!!!';
							// enter the appropriate page to go to after login
							//	header('Location:web_edititems.php?n='.$LoginID);
					}
				  }
                  else
                  {
                      echo mysql_error();
                  }

?>
