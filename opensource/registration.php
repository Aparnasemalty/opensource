<?php

$reg=$_POST['reg'];
$name=$_POST['name'];
$pass=$_POST['password'];

if(isset($reg)||isset($pass))
{
	$conn=mysqli_connect("localhost","root","","calculator") or die(mysqli_error($conn));
	$q="insert into user(username,name,password) values('$reg','$name','$pass')";
	$res=mysqli_query($conn,$q) or die(mysqli_error($conn));
	echo"registered";
    header('refresh:2;url=index.php');
		
}
else
{
	header('refresh:2;url=index.php');
	echo("invalid details");
}



?>


