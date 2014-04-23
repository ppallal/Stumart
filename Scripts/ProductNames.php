<html lang="en">
<body style="text-align:center" >

<style type="text/css">
    #wrapper {
        width:450px;
        margin:0 auto;
        font-family:Verdana, sans-serif;
    }
    legend {
        color:#0481b1;
        font-size:16px;
        padding:0 10px;
        background:#fff;
        -moz-border-radius:5px;
        box-shadow: 0 1px 5px rgba(4, 129, 177, 0.5);
        padding:5px 10px;
        text-transform:uppercase;
        font-family:Helvetica, sans-serif;
        font-weight:bold;
    }
    fieldset {
        border-radius:4px;
	background: #fff; 
        background: -moz-linear-gradient(#fff, #f9fdff);
     	background: -o-linear-gradient(#fff, #f9fdff);
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fff), to(#f9fdff)); /
        background: -webkit-linear-gradient(#fff, #f9fdff);
        padding:20px;
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
    input[type="search"],
    input[type="search"],
    input[type="search"],
    input[type="search"],
    input[type="text"],
    input[type="text"],
	input[type="file"],
	input[type="text"]{
        padding: 8px 6px;
        height: 40px;
        width:280px;
    }
    
    
    
    input[type="search"]:focus,
    input[type="search"]:focus,
    input[type="search"]:focus,
    input[type="search"]:focus,
    input[type="text"]:focus,
    input[type="text"]:focus,
	input[type="file"]:focus,
	input[type="text"]:focus{
        background:#f5fcfe;
        text-indent: 0;
        z-index: 1;
        color: #373737;
        -webkit-transition-duration: 400ms;
        -webkit-transition-property: width, background;
        -webkit-transition-timing-function: ease;
        -moz-transition-duration: 400ms;
        -moz-transition-property: width, background;
        -moz-transition-timing-function: ease;
        -o-transition-duration: 400ms;
        -o-transition-property: width, background;
        -o-transition-timing-function: ease;
        width: 380px;
        
        border-color:#27931d;
        box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
        opacity:0.6;
    }
    input[type="submit"]{
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
    textarea {
        padding:3px;
        width:96%;
        height:100px;
    }
    textarea:focus {
        background:#ebf8fd;
        text-indent: 0;
        z-index: 1;
        color: #373737;
        opacity:0.6;
        box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
        border-color:#ccc;
    }
    .small {
        line-height:14px;
        font-size:12px;
        color:#999898;
        margin-bottom:3px;
    }
</style>
<body>
    <div id="wrapper">


<form method = "POST" action = "PostRedirection.php">
<fieldset>
<legend>Create Post:</legend>


<?php
////
session_start();
////
$_SESSION['UID']='1';
require 'connect.php';
echo $_SESSION['UID'];

$select_query = "Select ProductName from products";
$select_query_run = mysql_query($select_query);
if(!$select_query_run)
	echo mysql_error();

echo "Select Product <select name='ProductName' >";
while($select_query_array = mysql_fetch_array($select_query_run))
{
	echo "<option value =".htmlspecialchars($select_query_array["ProductName"]).">".htmlspecialchars($select_query_array["ProductName"]).
		"</option>";
}
echo "</select>";

?>

</br></br><input type="submit" name="submit" value="SUBMIT"/></br>
</fieldset>
</form>
</body>
</html>
