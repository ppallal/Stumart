        <?php
               require'connect.php';
                
                $fname= mysql_real_escape_string($_POST['firstname']);
                $lname= mysql_real_escape_string($_POST['lastname']);
		$usn  = mysql_real_escape_string($_POST['usn']);
		$email= mysql_real_escape_string($_POST['email']);
		$secq  = mysql_real_escape_string($_POST['secq']);
		$secans= mysql_real_escape_string($_POST['secans']);		
		//$photo=mysql_real_escape_string(($_POST['photo']));   // check photo handling .. not sure
                $phone=intval($_POST['phoneno']);
                $query = "INSERT INTO `useraccount` VALUES (NULL, '{$fname}', '{$lname}','{$usn}', '{$email}', '{$phone}', '{$secq}', '{$secans}', '{$photo}',CURRENT_TIMESTAMP)";
              
	        // below code not required for now, will see later, if needed to fetch UID
			  
	        if($query_run=mysql_query($query))
                {
                  $query1="SELECT UID FROM useraccount WHERE usn = '{$usn}'";
                  if($query_run1=mysql_query($query1))
                  {
                        while($query_row1=mysql_fetch_assoc($query_run1))
                        {
                              $UID=$query_row1['UID'];
                              

                        }
			header('Location:../next.php?n='.$UID);
                  }
                  else
                  {
                      echo mysql_error();
                  }
				  
                }
