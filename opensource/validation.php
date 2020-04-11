 <?php
 
 $reg=$_POST['reg'];
 $pass=$_POST['password'];
 $conn=mysqli_connect("localhost","root","","calculator") or die(mysqli_error($conn));
 if((isset($reg))&&(isset($pass)))
{
	
$q= "select * from user where username='$reg' && password = '$pass'";
$result = mysqli_query($conn,$q) or die(mysqli_error($conn));
$num = mysqli_num_rows($result);
if($num==1)
{
	$row=mysqli_fetch_array($result);
	session_start();
	{
		$_SESSION['username']=$reg;
	}

   header('refresh:0;url=dashbord.php');

}
else
{
echo"invalid";
header('refresh:2:url=index.php');

}

}
else
{
echo"fill correct details";
header('refresh:2:url=index.php');
}

?>


 