<html>
<head>
<title>Submit Review</title>
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

			session_start();
		
			$pname=$_GET['name2'];
			$review=$_GET['review'];
			$uname=$_SESSION['username'];
			
			$conn=mysql_connect('localhost','root','','review');
		    mysql_select_db('review',$conn); 
			
			$sql = "INSERT into rev(pname,uname,rid,des,status) VALUES('$pname','$uname',0,'$review',0);";
			
			mysql_query($sql,$conn);

			//echo "Data inserted";
			header('Location:home2.php');

?>


</body>
</html>