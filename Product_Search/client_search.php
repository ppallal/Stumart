<html>	
<body>
	<!-- HTML for SEARCH PASTE -->
	<style type="text/css">
		.tftextinput2
		{
			margin: 0;
			padding: 4px 15px;
			font-family: Arial, Helvetica, sans-serif;
			font-size:14px;
			color:#666;
			border:1px solid #0076a3; border-right:0px;
			border-top-left-radius: 5px 5px;
			border-bottom-left-radius: 5px 5px;
		}
		.sort
		 {
			  position: relative;
			  width : 250px;
			  height : 450px;
			  left : 100px;
		}
		.image1
		{
        position: absolute;
        width: 250px;
        height: 300px;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
      }
	span{
    display:inline-block;
    margin:0 30px;
	}
	.div2
	{
			position:absolute;
			width:220px;
			padding:15px;
			background-color : #E8E8E8;
			opacity : 0.7;
			bottom : 55px;
			border : 2px solid;
			border : 1px solid #B0B0B0;
			border-top-left-radius: 5px;
			border-top-right-radius: 5px;
			border-bottom-left-radius: 5px;
			border-bottom-right-radius: 5px;
	}
	.rdiv
	{
		position:bottom;
		width:520px;
		padding:15px;
		background-color : #E8E8E8;
		opacity : 0.7;
		bottom : 55px;
		border : 2px solid;
		border : 1px solid #B0B0B0;
		border-top-left-radius: 5px;
		border-top-right-radius: 5px;
		border-bottom-left-radius: 5px;
		border-bottom-right-radius: 5px;
	}
	.div3
	{
		position:absolute;
		bottom:160px;
		width: 250px;
		height : 80px;
		color:black;
		background-color:#33FF00;
		opacity:0.6;
		font-weight:bold;
        font-size:13px;
	}
	</style>
	<script language="javascript" type="text/javascript">
	var old_val = "";
	//var sub_array;
	<!-- 
	
	//Browser Support Code
	function ajaxFunction()
	{
		var ajaxRequest;  // The variable that makes Ajax possible!
	
		try
		{
   // Opera 8.0+, Firefox, Safari
			ajaxRequest = new XMLHttpRequest();
		}
		catch (e)
		{
   // Internet Explorer Browsers
			try
			{
				ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
			}
			catch (e) 
			{
				try
				{
					ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch (e)
				{
         // Something went wrong
					alert("Your browser broke!");
					return false;
				}
			}
		}
		
 // Create a function that will receive data sent from the server and will update div section in the same page.
		
		// Now get the value from user and pass it to the server script.
		var x= document.getElementById('field').value;
		if(x.value != old_val)
		{
			old_val = x.value;
			ajaxRequest.onreadystatechange = function()
			{
				if(ajaxRequest.readyState == 4)
				{
					var ajaxDisplay = document.getElementById('ajaxDiv');
				
				//ajaxDisplay.innerHTML = ajaxRequest.responseText;
					var string=ajaxRequest.responseText;
				//alert(ajaxRequest.responseText);
					Array_books=string.split("done");
					Array_books.pop();
				//alert(Array_books[0]);
				//var alist=ajaxRequest.responseText;
					document.body.appendChild(ajaxDisplay);
					
					if(Array_books.length == 0)
						ajaxDisplay.innerHTML += "<center><h4 top = \"50px\"> No matches found </h4><center>";

					for(i=0;i<Array_books.length;i++)
					{
						sub_array=Array_books[i].split("*");
						//alert(sub_array);
						
						
						//var image = Array_books[i].image;
						
						sp = document.createElement("span");
						div_ele = document.createElement("div");
						div2 = document.createElement("div");
						
						div2.setAttribute("class","div2");
						//div_ele.setAttribute("onclick","more_details(event,sub_array);");
						div_ele.setAttribute("class","sort");
						
						//$(div_ele).hover(on_hover(this,Array_books[i],i),off_hover(this,Array_books[i],i));
					//	div_ele.setAttribute("onmouseover","on_hover(this, Array_books["+i+"],"+i+");");
					//	div_ele.setAttribute("onmouseout","off_hover(this, Array_books["+i+"],"+i+");");
					//	div_ele.innerHTML = "<a href='post.php?postid='><img src = \""+image+"\" class = \"image1\"></a>";
					//	div2.innerHTML = "<b>Price : Rs."+Array_books[i].book_price+"</br>Rating :"+stars+"</b>";
						
						var img=sub_array[0].split(">");
						var pid=sub_array[1];
						//alert(pid);
						div_ele.innerHTML = "<a href='seller_info.php?postid="+pid+"'>" + img[0] + " class = \"image1\"></a>";
						//var sub_array2= sub_array[1].split("$");
						div2.innerHTML = sub_array[2];
						
						div_ele.appendChild(div2);
						sp.appendChild(div_ele);
						ajaxDisplay.appendChild(sp);
					}
				}	
			}
			
		}
		//var visit = 0;
		// Now get the value from user and pass it to the server script.
		var field = document.getElementById('field').value;
		//alert(field);
		var queryString = "?field=" + field ;
		ajaxRequest.open("GET", "server_search.php" + queryString, true);
		ajaxRequest.send(null); 
	}
	</script>
	<form name='myForm'>
	<div id = "search">
	<input type='text' id='field' class="tftextinput2" size="21" maxlength="120" placeholder="Search our website">
	<input type='button' onclick='ajaxFunction()' 
							  value='Search'/>
							  </div>
	</form>

	<div id='ajaxDiv'></div>
</body>
</html>