<?php
$con=mysqli_connect("localhost","root","Appu196!","EMP");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM employees";
$result=mysqli_query($con,$sql);

if ($result->num_rows > 0) {

	echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
echo "<br><a href='welcome.php'><input type=button name=back value=back></a>";
echo "<br><a href='logout.php'><input type=button value=logout name=logout></a>";
mysqli_close($con);
?>