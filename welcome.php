<?php
$uname="admin";
$pwd="admin";
session_start();
if(isset($_SESSION['uname']))
{
echo "<h1>You have successfully logged in</h1>";
echo "<a href='employee_data_display.php'>View Employees</a><br>";
echo "<a href='form.html'>Add employee</a><br>";
echo "<a href='data_search.php'>Search employee</a><br>";
echo "<a href='employee_data_update.php'>Update employee details</a><br>";
echo "<br><a href='logout.php'><input type=button value=logout name=logout></a>";
}
else
{
if($_POST['uname']==$uname && $_POST['pwd']==$pwd)
{
$_SESSION['uname']=$uname;
echo "<script>location.href='welcome.php'</script>";
}
else
{
echo "<script>alert('username or password incorrect!')</script>";
echo"<script>location.href='login.php'</script>";
}
}
?>