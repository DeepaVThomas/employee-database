<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE</title>
<style type="text/css">
table
{
margin-top: 150px;
border: 1px solid;
background-color: #eee;
}

td
{
border:0px;
padding: 10px;
}

th
{
border-bottom: 1px solid;
background-color: #ddd;
}

</style>
</head>
<body>
<form action="welcome.php" method="post">
<table align="center">
<tr>
<th colspan="3"><h2align="center">Login</h2></th>
</tr>
<tr>
<td>Username:</td>
<td><input type="text" name="uname" placeholder="Username"></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="pwd" placeholder="password"></td>
</tr>
<tr>
<td align="right" colspan="2"><input type="submit" name="login" value="login"></td>
</tr>
</table>
</form>
