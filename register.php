<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}
include_once 'includes/dbconnect.php';
if(isset($_POST['btn-signup']))
{
	$fname = mysqli_real_escape_string($conn,$_POST['fname']);
	$lname = mysqli_real_escape_string($conn,$_POST['lname']);
	$snumber = mysqli_real_escape_string($conn,$_POST['snumber']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$upass = md5(mysqli_real_escape_string($conn,$_POST['pass']));
	
	if(mysqli_query($conn,"INSERT INTO users (FirstName,LastName,StudentNumber,Email,Password) VALUES('$fname','$lname','$snumber','$email','$upass')"))
	{
		?>
        <script>alert('successfully registered ');</script>
        <?php
	}
	else
	{
		?>
        <script>alert('error while registering you...');</script>
        <?php
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/loginstyle.css" type="text/css" />

</head>
<body>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="fname" placeholder="First Name" required /></td>
</tr>
<tr>
<td><input type="text" name="lname" placeholder="Last Name" required /></td>
</tr>
<tr>
<td><input type="text" name="snumber" placeholder="Student Number"/></td>
</tr>
<tr>
<td><input type="email" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup">Sign Me Up</button></td>
</tr>
<tr>
<td><a href="index.php">Sign In Here</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>
