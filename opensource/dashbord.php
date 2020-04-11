 <?php
 session_start();
 {
	$user=$_SESSION['username'];

 }

 if(isset($_SESSION['username']))
 {
	$conn=mysqli_connect("localhost","root","","calculator") or die(mysqli_error($conn));
	error_reporting(0);
    $q= "select * from user where username='$user'";
	$result = mysqli_query($conn,$q) or die(mysqli_error($conn));
	 
	$row=mysqli_fetch_array($result);
	 
	 
	
		?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=h2, initial-scale=">
			<title>Document</title>
		</head>
		<body>
			<h3>Welcome:<?php echo $row['name']?></h3>
			<h4>Registration Number:<?php echo $row['username']?></h4>
			
			<br><br><br><br>

			<form method="POST" action="view.php">
			View Marks:  <br><br><br>
			<input type="text" name="sem" placeholder="Enter semister"><br><br>
			<button type="submit">Search</button>
			</form>
		   <h3>Enter the marks:-</h3><br>
		   <a href="caculator.php"><button>Enter Marks</button></a>
		</body>
		</html>
		
		<a style="float:right;margin-right:70%;"href="logout.php"><button >Logout</button></a>
		<?php
 }
 else{
	 header('refresh:0;url=index.php');
 }
 
 

?>


 