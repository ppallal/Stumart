        <?php
               require'connect.php';
                
        $fname= mysql_real_escape_string($_POST['firstname']);
        $lname= mysql_real_escape_string($_POST['lastname']);
		$usn  = mysql_real_escape_string($_POST['usn']);
		$email= mysql_real_escape_string($_POST['email']);
		$secq  = mysql_real_escape_string($_POST['secq']);
		$secans= mysql_real_escape_string($_POST['secans']);
		
		##
		$query = 'select count(*) from useraccount';
		$result = mysql_query($query);
		$PhotoID = mysql_result($result, 0);
		
		$photo = $_FILES['file']['name'];
		if(!$photo)
		{
		
			$url = 'Image/Default.png';
		}
		else
		{
			$url = 'Image/'.$PhotoID.'.png';
		}
		move_uploaded_file($_FILES["file"]["tmp_name"],$url);
		
		//$photo=mysql_real_escape_string(($_POST['photo']));   // check photo handling .. not sure
                $phone=intval($_POST['phoneno']);
                $query = "INSERT INTO `useraccount` VALUES (NULL, '{$fname}', '{$lname}','{$usn}', '{$email}', '{$phone}', '{$secq}', '{$secans}', '{$url}',CURRENT_TIMESTAMP)";
				echo "done";
              
	        // below code not required for now, will see later, if needed to fetch UID
			  
			  #$query_run=mysql_query($query);
	        echo "done2";
			if($query_run=mysql_query($query))
                {
				echo "done1";
                  $query1="SELECT UID FROM useraccount WHERE usn = '{$usn}'";
                  if($query_run1=mysql_query($query1))
                  {
                        while($query_row1=mysql_fetch_assoc($query_run1))
                        {
                              $UID=$query_row1['UID'];
                              

                        }
						echo "done";
			header('Location:../next.php?n='.$UID);
                  }
                  else
                  {
					echo "done";
                      echo mysql_error();
                  }
				  
                }
