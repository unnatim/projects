<html>
<head>
<style>

.b1
{
padding-left:50px;
padding-right:50px;
color:black;
font-size:25px;
border-radius: 3px;
border:  1px solid black;
box-shadow: 0 0 5px rgba(0,0,0,.2);
background: #FFFFFF; 
}

.b1:hover
{
    background: #DC143C;
    color: white;
    box-shadow: 0 0 10px rgba(255,255,255,1); 
}


</style>
<title>Enter Review</title>
<link rel="Stylesheet" href="css1.css">
</head>
<body>

<div id="patch">
<img src="logo.jpg" height="60" width="150"><hr>
<span id="one">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="home.php"><font color="white">Home</font></a></span>

<span id="one">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mobile.php"><font color="white">Mobile</font></a></span>

<span id="one">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="camera.php"><font color="white">Camera</font></a></span>

<span id="one">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="login.html"><font color="white">Login</font></a></span>

<span id="one">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Adlogin.html"><font color="white">Admin Login</font></a></span><br><br><br>

</div>



<?php

session_start();

echo "<div><b><h1>Welcome ".$_SESSION['username']." , Enter your review here : </h2></b></div>";
		 
$pname=$_GET['name1'];

echo "<br>";
echo "<center>";
echo "<form action='reviewadd.php' method='get'>";

echo "<input type='hidden' value='".$pname."' name='name2'>";	

echo "<br><textarea name='review' id='review' rows=8 cols=50></textarea>";
echo "<br><br><br><input type='submit' class='b1'>";
echo "</form>";
echo "</table>";

?>


</body>
</html>



