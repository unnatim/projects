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

#dec
{
	border: 3px solid black;
    
	padding: 20px 30px; 
    
	background-color:white; 
	width: 1070px;
    
	border-radius: 30px;

}

a
{
	color:black;
}


</style>
<title>Reviews</title>
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

<br>
<br>
<br><center>
<div><b><h1>Reviews : </h1></b> </div>

<?php


$conn=mysql_connect('localhost','root','');
mysql_select_db('review',$conn);

$sql="select * from rev where status=0";

$result=mysql_query($sql,$conn)or die(mysql_error());

/*foreach ($result as $row) 
	{
		echo $row['uname'].":".$row['pname']."----".$row['review']."<br>";
		echo "<a href='accept.php?rid=".$row['rid']."'>Accept</a><br>";
		echo "<a href='reject.php?rid=".$row['rid']."'>Reject</a><br>";
	}*/

while($row=mysql_fetch_assoc($result))
{
	echo '<div id="dec">';
	echo '<h3>';
	echo $row['uname'].":".$row['pname']."----".$row['des']."<br>";
	echo '</h3>';
	
	//echo $row['uname'].":".$row['pname']."----".$row['des']."<br>";
	
	echo "<br><button class='b1' type='button'><a style='text-decoration:none;' href='accept.php?rid=".$row['rid']."'>Accept</a></button><br>";
	echo "<br><button class='b1' type='button'><a style='text-decoration:none;' href='reject.php?rid=".$row['rid']."'>Reject</a></button><br>";
	echo '</div>';
}
	
	
/*	
while($row=mysql_fetch_assoc($result))
{
	echo '<div id="dec">';
	echo '<h3>';
	echo $row['uname'].":".$row['pname']."----".$row['des']."<br>";
	echo '</h3>';
	
	//echo $row['uname'].":".$row['pname']."----".$row['des']."<br>";
	
	echo "<br><button class='b1' type='button'><a style='text-decoration:none;' href='accept.php?rid=".$row['rid']."'>Accept</a></button><br>";
	echo "<br><button class='b1' type='button'><a style='text-decoration:none;' href='reject.php?rid=".$row['rid']."'>Reject</a></button><br>";
	echo '</div>';
}
*/

?>


</body>
</html>



