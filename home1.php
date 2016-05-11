<html>
<head>
<title>Homepage</title>


<?php 

		session_start();
		
		$conn=mysql_connect('localhost','root','');
		mysql_select_db('review',$conn);  
		
	
		
		$sql = "select * from product_info";
		$result=mysql_query($sql,$conn)
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

<br><div id="dec"><br>
<p id="center"><b>Hi <?php echo $_SESSION['username'].""; ?>!<br><br>

<!--

    
	//$username=$_REQUEST['user'];
	
	//echo "<h1 class='fontt'>Valid user</h1><br>";
	
	//	session_start(); ->You need to call session_start() BEFORE any output, HTML, echos - even whitespace.
	
	//$_SESSION['userstatus']='loggedin';
	//$_SESSION['username']=$username;                     -->
	


Let our member's reviews help you research every aspect of your phone before you buy your new handset including what insurance to get, which manufacturer or network to use and even where to go if you want to recycle your old phone. You can also compare tariffs as well as the sites and stores that sell them too.<br>
<br>
We also have reviews for the best Bluetooth headsets and accessories if you're looking for a handsfree in-car kit whilst on the road.<br><br>

Once you have your new mobile, take a look at what our users thought of the apps, games and many mobile unlocking services available.</b></p><br></div><br>

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

<!--<tr bgcolor="black"><th><img src="cam4.jpg" height="200" width="300" alt="Canon EOS 60Da" ></th>

<th align="left"><font face="Times New Roman" color="white" size="4">
<ul>
<li>Model:Canon EOS 60Da
<li>Style:Digital SLR
<li>Megapixels:18
</ul>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="1cam.html"><font color="white">Click to know more</font></a>
</font></th>
</tr>


<tr bgcolor="black"><th><img src="cam5.jpg" height="200" width="250" alt="Olympus VH-410"></th>

<th align="left"><font face="Times New Roman" color="white" size="4">
<ul>
<li>Model:Olympus VH-410
<li>Camera Type:Ultra Compact
<li>File Formats:JPEG
</ul>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="1cam.html"><font color="white">Click to know more</font></a>
</font></th>
</tr>

<tr bgcolor="black">
<th><img src="mic1.jpg" height="200" width="250" alt="Micromax Canvas Xpress 2" ></th>
<th align="left"><font face="Times New Roman" color="white" size="4">
<ul>
<li>Model : Micromax Canvas Xpress 2
<li>Display Size : 720 x 1280 pixels
<li>Features : Octa-core 1.4 GHz
</ul>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="1.html"><font color="white">Click to know more</font></a>
</font></th>
</tr>

<tr bgcolor="black"><th><img src="sam2.jpg" height="300" width="300" alt="Sony Xperia E4 Dual SIM SmartPhone" ></th>

<th align="left"><font face="Times New Roman" color="white" size="4">
<ul>
<li>Model : Sony Xperia E4 Dual SIM
<li>Screen Type : 16M Colours
<li>Operating System : Android
</ul>
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="mob.html"><font color="white">Click to know more</font></a>
</font></th>
</tr>

<tr bgcolor="black"><th><img src="cam2.jpg" height="200" width="250" alt="Canon Powershot SX500 IS" ></th>

<th align="left"><font face="Times New Roman" color="white" size="4">
<ul>
<li>Model:Canon Powershot SX500 IS
<li>Camera Type: Extra Zoom
<li>LCD Screen:3
</ul>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="cam.html"><font color="white">Click to know more</font></a>
</font></th>
</tr>

<tr bgcolor="black"><th><img src="cam3.jpg" height="200" width="300" alt="Canon EOS M"></th>

<th align="left"><font face="Times New Roman" color="white" size="4">
<ul>
<li>Model:Canon EOS M
<li>Style:Compact System Camera
<li>Weight:298g
</ul>
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="cam.html"><font color="white">Click to know more</font></a>
</font></th>
</tr>



<tr bgcolor="black"><th><img src="sam3.jpg" height="250" width="200" alt="Coolpad Note 3"></th>

<th align="left"><font face="Times New Roman" color="white" size="4">
<ul>
<li>Model : Coolpad Note 3
<li>Display Size : 5.5 inches
<li>Features : Octa Core, 1.3 GHz
</ul>
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="mob.html"><font color="white">Click to know more</font></a>
</font></th>
</tr> -->




