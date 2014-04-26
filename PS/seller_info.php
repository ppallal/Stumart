<html>
<style type="text/css">
    #wrapper {
        width:450px;
        margin:0 auto;
        font-family:Verdana, sans-serif;
    }
    legend {
		
		color:#0481b1;
        font-size:16px;
        padding: 100px;
        background:#fff;
        -moz-border-radius:5px;
        box-shadow: 0 1px 5px rgba(4, 129, 177, 0.5);
        padding:15px 15px;
        text-transform:uppercase;
        font-family:Helvetica, sans-serif;
        font-weight:bold;
    }
    fieldset {
		top:600px;
        border-radius:4px;
		background: #fff; 
        background: -moz-linear-gradient(#fff, #f9fdff);
     	background: -o-linear-gradient(#fff, #f9fdff);
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fff), to(#f9fdff)); /
        background: -webkit-linear-gradient(#fff, #f9fdff);
        padding:10px;
		border: 1px solid #27931d;
       border-color:#27931d;
        //border-color:rgba(4, 129, 177, 0.4);
    }
    input,
    textarea {
        color: #373737;
        background: #fff;
        border: 1px solid #27931d;
        color: #aaa;
        font-size: 14px;
        line-height: 1.2em;
        margin-bottom:15px;

        -moz-border-radius:4px;
        -webkit-border-radius:4px;
        border-radius:4px;
        box-shadow: 0 1px 2px rgba(0, 255, 0, 0.1) inset, 0 1px 0 rgba(255, 255, 255, 0.2);
    }

    button[type="submit"]{
        background: #222;
        border: none;
        text-shadow: 0 -1px 0 rgba(0,0,0,0.3);
        text-transform:uppercase;
        color: #eee;
        cursor: pointer;
        font-size: 15px;
        margin: 5px 0;
	
        padding: 5px 22px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        -webkit-border-radius:4px;
        -webkit-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
        -moz-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
        box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
    }
	.div1
	{
		
		float : right;
		width : 900px;
		height : 1500px;
		top : 150px;
	}
	.div2
	{
		position : absolute;
		width : 300px;
		height : 400px;
		left : 100px;
		top : 30px;
	}
	.span
	{
		display:inline-block;
		  margin:0 30px;
	}
	img
	{
		position: absolute;
        width: 250px;
        height: 300px;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
	}
	.div3
	{
		top : 350px;
		float : left;
	}
</style>
<head>
<?php
		require'connect.php';
		if(isset($_GET['postid']))
		{
		  $var = $_GET['postid']; //some_value
		}
		$data = mysql_query("SELECT * FROM post WHERE postid ='$var'");
		if($result = mysql_fetch_array( $data)) 
		{
			$prodid=$result['ProductID'];
			$sellerid=$result['SellerID'];
		}
		$disp_image=$result['Photo'];
		/*?> <img src="<?php echo $result['Photo']; ?>">
		<?php*/
		//echo ",";
		$data2= mysql_query("SELECT * FROM products WHERE ProductID ='$prodid'");
			if($result2 = mysql_fetch_array( $data2)) 
			{
				$disp_ProdName = $result2['ProductName'];
				$isbook=$result2['IsBook'];
			}
			$disp_Price = $result['Price'];
			$disp_Author = "";
			$disp_Edition = ""; 
			if($isbook > 0)
			{
				
				$data3 = mysql_query("SELECT * FROM books WHERE PostID = '$var'");
				while($result3 = mysql_fetch_array( $data3)) 
				{ 
					$disp_Author = $result3['Author'];
					$disp_Edition = $result3['Edition']; 
				}
		}
		$disp_Desc = $result['Description'];
		//echo "<br><br>SELLER INFO : <br>";
		$data4 = mysql_query("SELECT * FROM useraccount where UID = '$sellerid'");
		if($result4 = mysql_fetch_array($data4)) 
		{ 
			$disp_Name = $result4['FirstName']." ".$result4['LastName'];
			$disp_USN = $result4['USN'];
			$disp_Email = $result4['Email'];
			$disp_Phone = $result4['Phone'];
		}
		?>
<script type = "text/javascript">
window.onload=load;
function load()
{
var JImage="<?php echo $disp_image;?>";
var JPName="<?php echo $disp_ProdName;?>";
var JPrice="Rs. "+"<?php echo $disp_Price;?>";

var JAuthor="<?php echo $disp_Author;?>";
var JEdition="<?php echo $disp_Edition;?>";
var JDescription="<?php echo $disp_Desc;?>";
var JName="<?php echo $disp_Name;?>";
//var JUSN="<?php echo $disp_USN;?>";
var JEmail="<?php echo $disp_Email;?>";
var JPhone="<?php echo $disp_Phone;?>";

var e=document.getElementsByTagName('img')[0];
e.setAttribute("src",JImage);

var e=document.getElementById("name");
e.appendChild(document.createTextNode(JPName));

var e=document.getElementById("price");
e.appendChild(document.createTextNode(JPrice));

var e=document.getElementById("author");
e.appendChild(document.createTextNode(JAuthor));

var e=document.getElementById("edition");
e.appendChild(document.createTextNode(JEdition));

var e=document.getElementById("desc");
e.appendChild(document.createTextNode(JDescription));

var e=document.getElementById("seller");
e.appendChild(document.createTextNode(JName));

var e=document.getElementById("email");
e.appendChild(document.createTextNode(JEmail));

var e=document.getElementById("phone");
e.appendChild(document.createTextNode(JPhone));
//var e=document.getElementsByTagName('td')[2].id;
//var text = document.createTextNode("Nisha");
//e.setAttribute('data-value',"Nisha");
//e.innerHTML="Nisha";
//alert(document.getElementsByTagName('div')[0].id);
//var test = document.getElementByClassName("div2");
//alert(test);
//alert(document.getElementsByTagName('img')[0].id);
//e.setAttribute("src",JImage);
//var n=document.getElementsByTagName('td')[2].id;
//n.value="Nisha";
//document.getElementByI("name").innerHTML="Nisha";
}
</script>

</head>
<body >
<div class = "div2"><img src="" id="image" ></div>
<div class = "div1">	
	<fieldset>
		<legend>ITEM DETAILS </legend>
		<table border="0" align="center">
		<tr>
		<td>NAME:</td><td style="width:30px"></td><td id="name"></td>
		</tr>
		<tr>
		<td>PRICE:</td><td style="width:30px"></td><td id="price">
		</tr>
		<tr>
		<td>AUTHOR:</td><td style="width:30px"></td><td id="author">
		</tr>
		<tr>
		<td>EDITION:</td><td style="width:30px"></td><td id="edition">
		</tr>
		<tr>
		<td>DESCRIPTION:</td><td style="width:30px"></td><td id="desc">
		</tr>
		<tr>
		<td></td><td style="width:30px"></td>
		</tr>
		<tr>
		<td></td><td style="width:30px"></td>
		</tr>
		<tr>
		<td>SELLER:</td><td style="width:30px"></td><td id="seller">
		</tr>
		<tr>
		<td>E-MAIL:</td><td style="width:30px"></td><td id="email">
		</tr>
		<tr>
		<td>PHONE:</td><td style="width:30px"></td><td id="phone">
		</tr>
		</table>
		</fieldset>
		</div>

</body>
</HTML>
</body>
</html>
