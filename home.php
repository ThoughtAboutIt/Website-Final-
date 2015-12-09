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
    <title>Welcome<?php echo $userRow['email']; ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  	<link rel="shortcut icon" href="logo.png" type="logo/png" /> <!---Logo In Tab-->
    <link rel="stylesheet" href="css/loginstyle.css" type="text/css" />
</head>

<body>

<!-- Page Content -->
<div id="page-content-wrapper">
    <nav class="top-nav"> 
         <div id="header">
	<div id="left">
    </div>
    <div id="right">
    	<div id="content">
        	Welcome <?php echo $_SESSION['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
        </div>
    </div>
</div>         
    </nav>
        <div class="container-fluid">
            <br>
            <div class="row">
                 <div class="container">
                <div class="cardpanel">
                    <div class="container">
                        <div id="content1">
		<h1 id="heading">User Profile</h1>
		<div id="column1">
			<p class="headings">First Name: <p class="user_results">Josh</p></p>
		</div>
		<div id="column2">
			<p class="headings">Last name: <p class="user_results">Ball</p></p>
		</div>
		<div id="column3">
			<p class="headings">Student Number: <p class="user_results">S0234736</p></p>
		</div>
		<div id="column4">
			<p class="headings">Email: <p class="user_results">joshball@gmail.com</p></p>
		</div>
		<p class="headings">Badges:</p>
		<div id="badges_container">
			<img src="images/badge1.png" class="badges">
			<img src="images/badge2.png"class="badges">
			<img src="images/badge3.png" class="badges">
			<img src="images/badge4.png" class="badges">
			<img src="images/badge5.png" class="badges">
			<img src="images/badge6.png" class="badges">
			<img src="images/badge7.png" class="badges">
			<img src="images/badge8.png" class="badges">
			<img src="images/badge9.png" class="badges">
			<img src="images/badge10.png" class="badges">
			<img src="images/badge11.png" class="badges">
			<img src="images/badge12.png" class="badges">
		</div>
		<div>
            <a href="uploadform.php">
                <button class="btn waves-effect waves-light" type="button">Upload Badges</button></a>
		</div>
	</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
<br>
    <!-- /#wrapper -->
<!-- Footer -->
<?php include_once "includes/footer.php";// include for Footer ?>     
<!-- JS -->
<?php include_once "includes/scripts.php";// include for Javascripts ?>

</body>

</html>
