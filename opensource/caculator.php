
<?php
session_start();
$reg=$_SESSION['username'];
if(isset($_SESSION['username']))
{
  ?>
  
  <?php
$sub1=$sub2=$sub3=$sub4=$sub5=$total=$per=0;
$con=mysqli_connect("localhost","root","","calculator") or die(mysqli_error($con));
error_reporting(0);
$sub1=$_POST['subject1'];
$sub2=$_POST['subject2'];
$sub3=$_POST['subject3'];
$sub4=$_POST['subject4'];
$sub5=$_POST['subject5'];
$sem=$_POST['semister'];
$total=$sub1+$sub2+$sub3+$sub4+$sub5;
$per=$total/5;
$q="insert into result(subject1,subject2,subject3,subject4,subject5,percentage,username,semister) values('$sub1','$sub2','$sub3','$sub4','$sub5','$per','$reg','$sem')";
$result=mysqli_query($con,$q) or die (mysqli_error($con));


?>
<html>
<head>
  <title>calculator</title>
</head>
<body>
<div style="border:1px solid;width:30%;">
<br><br><br>
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
&nbsp&nbsp&nbsp&nbspSubject 1:
<input type ="text" name="subject1" label ="subject 1" required>
<br>
&nbsp&nbsp&nbsp&nbspSubject 2:
<input type ="text" name="subject2" label ="subject 2" required>
<br>
&nbsp&nbsp&nbsp&nbspSubject 3:
<input type ="text" name="subject3" label ="subject 3" required>
<br>
&nbsp&nbsp&nbsp&nbspSubject 4:
<input type ="text" name="subject4" label ="subject 4" required>
<br>
&nbsp&nbsp&nbsp&nbspSubject 5:
<input type ="text" name="subject5" label ="subject 5" required>
<br><br><br>
&nbsp&nbsp&nbsp&nbspSemister:
<input type ="text" name="semister" label ="semister" required>
<br><br><br>
&nbsp&nbsp&nbsp&nbsp<button type="submit">Store &calculate</button>
  </form>
  <br><br>
</div>
<a href="dashbord.php"><button>Back to dashbord</button></a>


<div>
  <br><br><br><br>
  <?php
  if(isset($per))
  {
?>
Subject1:<?php echo $sub1;?><br>
Subject2:<?php echo $sub2;?><br>
Subject3:<?php echo $sub3;?><br>
Subject4:<?php echo $sub4;?><br>
Subject5:<?php echo $sub5;?><br>
<h3>Total:<?php echo $per;?>%</h3>







<?php






  }
  else
  {
 echo "N/A";
  }
  
  
  
  
  
  
  
  
  ?>
</div>

</body>
</html> 
  
  
  
  
  
  <?php
}
else
{
echo"unauthorise";
}


?>
