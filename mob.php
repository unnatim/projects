<html>
<head>
<title>Latest mobiles</title>

<?php 
		session_start();
		
		$pname=$_GET['pname'];
		
		$conn=mysql_connect('localhost','root','','review'); 
		mysql_select_db('review',$conn); 
		
		$sql = "select * from product_info where pname='$pname'";
		$result = mysql_query($sql,$conn);
?>



<link rel="Stylesheet" href="css3.css">
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

<h1>Latest mobiles</h1>

<?php

if (!$result) 
{
    die(mysql_error());
}

while($row=mysql_fetch_assoc($result))
	{


		echo '<span id="images">';

		echo '<img src="'.$row['imag'].'" style="height:300;>
												 width:300;">';
				echo "<br><br>";
				echo '<a href="mob.php?pname='.$row['pname'].'"">'.$row['pname'].'</a>';
				echo "<br><br>";
				
				//echo $row['descr']."<br/>";
				print nl2br( $row['descr'] );   //converts \n\r (new line) to html's <br>.
				
				echo "<br><br>";
				echo "COST : ". $row['cost'];
				echo "<br><br>";
				
				error_reporting(E_PARSE);  //this will only allow parse errors to be shown.
				
				if ($_SESSION['userstatus']=='loggedin') 
				{
					echo '<a href="urev.php?name1='.$row['pname'].'">Add review</a><br><br>';
				}
				else
				{
					
					echo '<a href="login.html">Login to review</a>';
					echo '<br>';
				}

	}
?>
	
	
<?php 
	
		$conn=mysql_connect('localhost','root','','review');
		mysql_select_db('review',$conn); 
		
		$sql="select * from rev where status = 1 AND pname='$pname'";
		
		$result = mysql_query($sql,$conn);
		
		
		while($row=mysql_fetch_assoc($result))
	    {
			echo '<h3>Reviews are : </h3>';	
			echo 'User '.$row['uname']." : ".$row['pname']." ----> ".$row['des']."<br><br>";
		}
		
		echo '</span>';
		
		echo '<br>';echo '<br>';echo '<br>';
		
		
?>


</body>
</html>




