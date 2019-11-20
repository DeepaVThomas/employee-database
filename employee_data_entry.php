<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$con=mysqli_connect("localhost","root","Appu196!","EMP");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_query($con,"INSERT INTO employees(firstname,lastname,email)VALUES('$firstname','$lastname','$email')");

	echo "Employee added sucessfully";
	

mysqli_close($con);
echo "<br><a href='welcome.php'><input type=button name=back value=back></a>";
echo "<br><a href='logout.php'><input type=button value=logout name=logout></a>";
?>
