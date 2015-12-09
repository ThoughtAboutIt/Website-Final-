<?php
session_start();
include 'includes/dbconnect.php';
if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysqli_query($conn,"SELECT Email FROM users WHERE user_id=".$_SESSION['user']);
while($row = mysqli_fetch_array($res))
{
    $_SESSION['username'] = $row['Email'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  	<link rel="shortcut icon" href="logo.png" type="logo/png" /> <!---Logo In Tab-->
</head>

<body>

<!-- Page Content -->
<div id="page-content-wrapper">
    <nav class="top-nav"> 
        <div class="container"> 
            <div id="content">
        	Welcome <?php echo $_SESSION['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
        </div>
          <center><div class="nav-wrapper"><h1>Profile</h1></div></center>
        </div>
    </nav>
        <div class="container-fluid">
            <div class="row">
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
<!-- Footer -->
<?php include_once "includes/footer.php";// include for Footer ?>     
<!-- JS -->
<?php include_once "includes/scripts.php";// include for Javascripts ?>

</body>

</html>
