<html>
<head>
<title>User Login</title>
<link rel="Stylesheet" href="csss.css">
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


<br><br><center>
<span class="outset">
<blockquote>


<?php
	
// Retrieve details from HTMl files , like this : 
$username=$_REQUEST['name'];

$password=$_REQUEST['pwd'];


// check length of the password
	if(strlen($password)<5)
	{
		die("Password length must be greater than 5");
	}
	else
	{
    
	
$con = mysql_connect('localhost','root',''); 

if(!$con)
	die("Database not connected.Error Message : " . mysql_error());
else
{
	echo('<br><h1 class="fontt">Database is connected.Connection made</h1>');
}

//selects one DB out of many DBs 	
mysql_select_db('review',$con);

$sql="Select * from admi where name='$username' and pwd='$password'" ; 


if (!mysql_query($sql,$con))
		{
		die(' Error: ' . mysql_error());
		}
	header('Location:arev.html');
 
	mysql_close($con);

$result1=mysql_query($sql,$con) or die(mysql_error());

/*
if (mysql_num_rows($result1)==0  )	 
{
	echo '<h1 class="fontt">You are not a valid user</h1>';
	echo "<h1 class='fontt'>Click here to Register : </h1>";
	echo '<a href="regis.html"><input class="button1" type="submit" value="Register"></a>';

}
else
{
	//echo "<h1 class='fontt'>Valid user</h1><br>";
	
	session_start();
	
	$_SESSION['userstatus']='loggedin';
	$_SESSION['username']=$username;
	
	//echo "<h1 class='fontt'>Welcome ".$_SESSION['username']."</h1>";
	
	
	header('Location:home1.php');

}*/
	
	
	
	}
	
?>


