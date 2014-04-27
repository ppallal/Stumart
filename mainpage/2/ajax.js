function ajax1(search)
	{
		xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				list=xmlhttp.responseText;
				var ob=document.getElementById("categorymenu");
				var l=list.split(";")
				var x="";
				for (var i in l)
				{
					x+="<li rel="+l[i]+">"+l[i]+"<\li>"
				}
				ob.innerHTML=x;					
			}
		};
		xmlhttp.open("GET","../search.php?search=",true);
		xmlhttp.send();		
	}