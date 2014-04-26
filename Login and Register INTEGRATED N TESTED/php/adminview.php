<?php
               require'connect.php';


                $query = "SELECT u.UID, u.FirstName, u.LastName, u.USN, u.Email, u.Phone,l.username from useraccount u,login l where l.IsAdmin =0";
               echo"<h1><b>ADMIN PAGE </b></h1>";
			   echo"<h2>LIST OF USERACCOUNTS </h2>";
				if($query_run=mysql_query($query))
                {
					if(mysql_num_rows($query_run)==0)
					{
						echo"<h4>No users present</h4>";
					}
					else
					{
						while($query_row=mysql_fetch_assoc($query_run))
							{
								 echo"                       ";
								 echo"USER ID : ".$query_row['UID'];
								 echo"<br>                    ";
								 echo "FIRSTNAME : ".$query_row['FirstName'];
								 echo"<br>                    ";
								 echo"LAST NAME: ".$query_row['LastName'];
								 echo"<br>                    ";
								 echo"USN: ".$query_row['USN']; 
								 echo"<br>                    ";
								 echo"EMAIL: ".$query_row['Email'];
								 echo"<br>                    ";
								 echo"PHONE: ".$query_row['Phone'];
								 echo"<br>                    ";
								  echo"USERNAME: ".$query_row['username'];
								 
								 echo"<br><br>";

							}
					}
                }
                else
                {
                echo mysql_error();
                }
 ?>