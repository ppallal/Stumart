<?php
    require'connect.php';
	
	$find = $_GET['field'];	
	//$find = mysql_real_escape_string($_POST['field']);
	$find = mysql_real_escape_string($find);
	
	//If the search term is not entered 
	if ($find == "") 
	{ 
		echo "<p>You forgot to enter a search term"; 
		exit; 
	} 
 
	//A bit of filtering 
	$find = strtoupper($find); 
	$find = strip_tags($find); 
	$find = trim ($find); 
		
	$data = mysql_query("SELECT * FROM products WHERE upper(ProductName) LIKE'%$find%'");
	if($result = mysql_fetch_array( $data)) 
	{ 
		$prodid = $result['ProductID']; 
		$isbook = $result['IsBook'];
	} 
	$anymatches=mysql_num_rows($data); 
	if ($anymatches == 0) 
	{ 
		echo "Sorry, but we can not find an entry to match your query<br><br>"; 
	} 
		
	$data = mysql_query("SELECT * FROM post WHERE ProductID = '$prodid'");
	while($result = mysql_fetch_array( $data)) 
	{ 
		//echo json_encode($result);
		$postid = $result['PostID'];
		$sellerid = $result['SellerID'];
		?> <img src="<?php echo $result['Photo']; ?>"><?php
		echo "*".$postid;
		echo "*<br>Price : ".$result['Price']."<br>";
		if($isbook > 0)
		{
			$data2 = mysql_query("SELECT * FROM books WHERE PostID = $postid");
			while($result2 = mysql_fetch_array( $data2)) 
			{ 
				echo "Author : ".$result2['Author']."<br>";
				echo "Edition : ".$result2['Edition']."<br>"; 
			}
		}
		echo "Description : ".$result['Description']."<br>";
		/*echo "$";
		echo "<br><br>SELLER INFO : <br>";
		$data3 = mysql_query("SELECT * FROM useraccount where UID = '$sellerid'");
		if($result3 = mysql_fetch_array($data3)) 
		{ 
			echo "Seller : ".$result3['FirstName']." ".$result3['LastName']."<br>";
			echo "USN : ".$result3['USN']."<br>";
			echo "Email_id : ".$result3['Email']."<br>";
			echo "Contact No. : ".$result3['Phone']."<br>";
		}*/
		echo "done";
		
	}
	
	//to do : take this from the review team
/*	$data = mysql_query("SELECT * FROM reviews WHERE ProductID = '$prodid'");
	while($result = mysql_fetch_array( $data)) 
	{ 
		echo "REVIEWS<br>".$result['Review']."<br>";
		echo "Likes : ".$result['Likes/Dislikes']."<br>";
	}*/
				
	// to do : if the user clicks on MORE INFO button, display the seller info
	/*echo "<br><br>SELLER INFO : <br>";
	$data = mysql_query("SELECT * FROM useraccount where UID = '$sellerid'");
	while($result = mysql_fetch_array( $data)) 
	{ 
		echo "Seller : ".$result['FirstName']." ".$result['LastName']."<br>";
		echo "USN : ".$result['USN']."<br>";
		echo "Email_id : ".$result['Email']."<br>";
		echo "Contact No. : ".$result['Phone']."<br>";
	} */
 ?> 