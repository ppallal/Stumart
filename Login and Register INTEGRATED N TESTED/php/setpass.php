 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Stumart</title>
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
<?php
               require 'connect.php';
              

                $secq=$_GET['secq'];
                $uid=intval($_GET['n']);
														
					echo "<h3>The Security Question is: ";
					echo  $secq."</h3>";
					echo "<br/>";
						
 ?>
    

        


        <form action="http://localhost/Stumart/Login/php/updatepass.php?<?php echo"uid=".$uid?>" method="post">
        <div >
            <div class="span3">
                <h4>  Enter security answer</h4>
            </div>
            <div class="span7">
                <input class="input-small span6" type="text" placeholder="Enter Security answer" name="secans">
            </div>
        </div>
        <div class="row-fluid">
            <div class="span3">
                <h4> New Password<br></h4>
            </div>
            <div class="span7">
                <input class="input-small span6" type="password" placeholder="Enter New Password" name="newpass">
            </div>
        </div>
		<div class="row-fluid">
            <div class="span3">
                <h4>Confirm  New Password<br></h4>
            </div>
            <div class="span7">
                <input class="input-small span6" type="password" placeholder="Confirm New Password" name="con_newpass">
            </div>
        </div>
        <div class="row-fluid">
			<div class="span3 offset3">
                    <input type="submit" name="submit" value="Update Password"/>
			</div>
        </div>
		</form>

    </div>
    <!-- /container -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
    </script>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src='main.js'></script>


</body>

</html>