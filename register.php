<?php 

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];

$con=mysql_connect('localhost','root','');
mysql_select_db('review',$con);

if ($fname==''||$lname==''||$email==''||$pwd=='') 
{
	die(mysql_error());

}
else
{
	$sql="INSERT into user_info (uname,email,pwd) values ('$fname','$email','$pwd')";
	mysql_query($sql);
	
	//echo "You have registered successfully";	
	
	if (!mysql_query($sql,$con))
		{
			die(' Error: ' . mysql_error());
		}
	header('Location:home1.php');
}


?>

