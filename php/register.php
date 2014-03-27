        <?php
               require'connect.php';
                // header('Content-type: application/json');
                $fname= mysql_real_escape_string($_POST['firstname']);
                $lname= mysql_real_escape_string($_POST['lastname']);
				$usn=      mysql_real_escape_string($_POST['usn']);
				$email=  mysql_real_escape_string($_POST['email']);
				
				//$photo=mysql_real_escape_string(($_POST['photo']));   // check photo handling .. not sure
                $address=mysql_real_escape_string($_POST['address']);
				$city=mysql_real_escape_string($_POST['city']);
				//$dob=mysql_real_escape_string($_POST['dob']);    // check dob how to enter
                $phone=intval($_POST['phoneno']);
                $query = "INSERT INTO `useraccount` VALUES (NULL, '{$fname}', '{$lname}','{$usn}', '{$email}', '{$phone}', '{$photo}',CURRENT_TIMESTAMP)";
              
			  // Not required for now, will see later, if needed to fetch UID, use the below code
			  
			  if($query_run=mysql_query($query))
                {
                  $query1="SELECT UID FROM useraccount WHERE usn = '{$usn}'";
                  if($query_run1=mysql_query($query1))
                  {
                        while($query_row1=mysql_fetch_assoc($query_run1))
                        {
                              $UID=$query_row1['UID'];
                              // echo $shop_id;

                        }
						header('Location:register2.php?n='.$UID);
                  }
                  else
                  {
                      echo mysql_error();
                  }
				  
                }
