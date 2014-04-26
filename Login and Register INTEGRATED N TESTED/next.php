<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    
    >
	
<?php
$n=$_GET['n'];

?>
<html lang="en">
<head>
    <title>STUMART Register form </title>
</head>
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
    input[type="text"],
    input[type="tel"],
	input[type="email"],
	input[type="date"],
	input[type="password"]{
        padding: 8px 6px;
        height: 22px;
        width:280px;
    }
    input[type="text"]:focus,
    input[type="file"]:focus,
	input[type="tel"]:focus,
	input[type="date"]:focus,
	input[type="email"]:focus{
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
	
       <form action="http://localhost/Stumart/Login/php/register2.php" method="post">
    
		<fieldset>
                <legend>STUMART Register Form</legend><!--
                <div>
                    <input type="text" name="first_name" placeholder="First Name"	tabindex="1" autocomplete="off"/>
                </div>
                <div>
                    <input type="text" name="last_name" placeholder="Last Name" tabindex="2" autocomplete="off"/>
                </div>
				<div>
                    <input type="text" name="usn" placeholder="Enter USN" tabindex="3" autocomplete="off"/>
                </div>
				<div>
                    <input type="email" name="email" placeholder="Email" tabindex="5" autocomplete="off"/>
                </div>
				<div>
                    <input type="tel" name="phoneno" placeholder="Phone Number" tabindex="6" autocomplete="off"/>
                </div>
				<div>
                    Upload Photo<input type="file" name="photo" placeholder="Photo" tabindex="7" autocomplete="off"/>
                </div>--> 
				<div>
                    <input type="text" name="username" placeholder="USERNAME"/>
                </div>
                <div>
                    <input type="password" name="password" placeholder="Password" tabindex="6" autocomplete="off"/>
                </div>
				<div>
                    <input type="password" name="Rpassword" placeholder="Repeat Password" tabindex="7" autocomplete="off"/>
                </div>
				<div style="display:none">
                    <input type="text" name="n" value="<?php echo $n;?>"/>
                </div>
				
				<!--
                <div>
                    <input type="" name="" placeholder=""/>
                </div>
                <div>
                    <div class="small">this textarea is just for test so you can see the placeholder working on textarea as well</div>
                    <textarea name="message" placeholder="Message"></textarea>
                </div>   --> 
                <input type="submit" name="submit" value="NEXT"/>
            </fieldset>    
        </form>
    </div>
</body>
</html>
