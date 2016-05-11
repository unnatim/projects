<html>
<head>
<title>Latest cameras</title>

<?php 

		$conn=mysql_connect('localhost','root','','review'); 
		mysql_select_db('review',$conn); 
		
		$sql = "select * from product_info where type='Camera'";
		
		$result = mysql_query($sql,$conn);
		
?>

<style>

body
{
background: -webkit-linear-gradient(top, rgba(255,0,0,0.1), rgba(255,0,0,0.5)); /* For Safari 5.1 to 6.0 */
}

#patch
{
background-color:black;	
-webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(70%, transparent), to(rgba(255,255,255,0.2)));
-webkit-transition: all 0.2s ease-in-out 0s;
border: 1px solid #ad9c9c;
border-radius: 6px 6px 6px 6px;
}

#one
{
background-color:black;
font-family:Helvetica;
font-size:20px;
float:left;
margin-top:0px;
margin-left:10px;  
}

#dec
{
	border: 5px solid black;
    
	padding: 20px 30px; 
    
	background-color:white; 
	width: 1070px;
    
	border-radius: 30px;

}

a
{
	color:white;
}

</style>
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

<h1>Latest cameras</h1>

<table border="1" bordercolor="white">
<tr bgcolor="black"><th><font face="Times New Roman" color="white" size="5">Featured Products</font></th>
<th><font face="Times New Roman" color="white" size="5">Specifications</font></th></tr>


<?php
    
	while($row=mysql_fetch_assoc($result))
	{
		
		echo '<tr bgcolor="black"><th><img style="width:250px; 
												  height:300px;" src="'.$row['imag'].'"></th>';

		echo '<th align="left"><font face="Times New Roman" color="white" size="4">';

        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a color="white" href="mob.php?pname='.$row['pname'].'"">'.$row['pname'].'</a>';
	}

?>


</font></th>
</tr>
</table>

</body>
</html>

