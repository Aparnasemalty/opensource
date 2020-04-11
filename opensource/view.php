<?php
$sem=$_POST['sem'];
session_start();
$reg=$_SESSION['username'];
if(isset($reg))
{
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>Document</title>
 </head>
 <body>
	 <?php
	 $conn=mysqli_connect("localhost","root","","calculator") or die(mysqli_error($conn));
	 error_reporting(0);
	 $q= "select * from result where username='$reg'&& semister='$sem'";
	 $result = mysqli_query($conn,$q) or die(mysqli_error($conn));
	  
	 $row=mysqli_fetch_array($result);
	 ?>
	 <h3>Registration Number:<?php echo $reg;?></h3>
	 <h3>Semester:<?php echo $row['semister']?></h3>
    <div style="border:1px solid black;margin-left:10%;width:40%;">
         <h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp1.Physics:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['subject1'];?></h4>
		 <h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp2.Chemistry:&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['subject2'];?></h4>
		 <h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp3.Maths:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['subject3'];?></h4>
		 <h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp4.Biology:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['subject4'];?></h4>
		 <h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp5.Computer:&nbsp&nbsp&nbsp&nbsp<?php echo $row['subject5'];?></h4>
		  
	</div>
	<H2>Percentage:- <?php echo $row['percentage'];?>%</H2>
	<a href="dashbord.php"><button>Back to home</button></a>
	 
	 
	 
	 
	 
	 
	 
	 <?php












	 
	 ?>
 </body>
 </html>
 
 
 
 <?php

}
else
{
	header('refresh:0;url=index.php');
}


?>


