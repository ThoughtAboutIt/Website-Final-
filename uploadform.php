<!DOCTYPE html>
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
/*if(isset($_POST['btn-upload']))
    {
	$uName = mysqli_real_escape_string($conn,$_POST['uName']);
    $hours = mysqli_real_escape_string($conn,$_POST['hours']);
    
    if(mysqli_query($conn,"INSERT INTO CAInfo (CodeacademyUsername,Hours) VALUES('$uName','$hours')"))
    {
		?>
        <script>alert('Successfully Uploaded ');</script>
        <?php
	}
	else
	{
		?>
        <script>alert('Error While Uploading...');</script>
        <?php
	}
}*/
?>
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
<center><h1>Codeacademy Upload Form</h1></center>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Codeacademy Username:
    <br>
    <br>
<input type="text" name="uName" required />
    <br>
    <br>
    Hours Completed:
    <br>
    <br>
<input type="text" name="hours"  required />
    <br>
    <br>
    Please select image to upload:
    <br>
    <br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br>
    <br>
    Please enter name of badge you would like to upload.
    <br>
    <br>
    <input id="icon image" class="file-path validate" type="text"  name="txtimagename">
    <br>
    <label for="icon_image" style="margin-left:100px"></label>
    <br>
    <input type="submit" value="Upload Information" name="submit">
</form>
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
