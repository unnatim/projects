<?php

$prodbrand=$_REQUEST['bt'];
$prodtype=$_REQUEST['pt'];
$img = $_FILES['img']['name'];
$prodcost=$_REQUEST['cost'];


$pname=$_POST['pn'];
$pdesc=$_POST['pd'];

			

	$conn=mysql_connect('localhost','root','');
	mysql_select_db('review',$conn);

	
	if (!$conn) 
	{
		die("Connevtion Fail : ". mysql_error()."<br>");
	}
	else 
	{
		echo "Connection Sucessful<br>";
	}
	
	$sql="INSERT into product_info (pname,pbrand,type,descr,cost,imag)VALUES ('$pname','$prodbrand','$prodtype','$pdesc','$prodcost','$img');";
	
	if(!mysql_query($sql,$conn))
	{
		die("Error inserting into tabel : " . mysql_error($conn));
	}
	else
	{
		echo "Insertion Sucessful";
	}

?>



