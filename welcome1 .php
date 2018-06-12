<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();

if(isset($_GET['user'])){
    $user=$_GET['user'];
}else{
   echo "error";
}
$_SESSION['uname']=$user;
require_once 'dbconnect.php';
$sql = "SELECT category FROM accounts WHERE username='$user'";
$result = mysqli_query($DBcon,$sql);
$row = mysqli_fetch_assoc($result);
$rs = $row['category'];

if($rs="donor")
{
	$sql1 = "SELECT * FROM donor WHERE username='$user'";
	$result1 = mysqli_query($DBcon,$sql1);
	$row1 = mysqli_fetch_array($result1);
	$rs1 = $row1['name'];
	
	
	
	
}
?>

<!DOCTYPE HTML>
<html>
<head>
<link rel="icon" type="image" href="images/bd.jpg">
<title>BloodDonationManagement</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Dual Registration Form  Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Kotta+One' rel='stylesheet' type='text/css'><!--web-fonts-->
</head>
<body>
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li style="float:right"><a class="active" href="logout.php">logout</a></li>
</ul>
		<!---header--->
		<div class="header">
			<h1>Blood Donation Management System</h1>
		</div>
		<!---header--->
		<!---main--->
			<div class="main">
				<div class="main-section">
				<div class="registration-section">
					<div class="regform">
					<h2>Welcome!</h2>
					<span><h3>Hey, <?php echo $rs1; ?> </h3></span>
					
					<hr>
					<form action="two.php" method="POST">
					<span><h3>Blood Group:<?php echo $row1['blood_group'] ?></h3></span>
					<span><h3>Age:<?php echo $row1['age'] ?></h3></span>
					<span><h3>Phone:<?php echo $row1['phno'] ?></h3></span>
					<span><h3>Location:<?php echo $row1['location'] ?></h3></span>
								
					<button id="edit" name="edit">Edit</button>
					
					
					</form>
					
					
					
					
				 </div>
					<div class="clear"></div>
					</div>
					
				</div>
			</div>
			<div class="footer">
		
		</div>

		<!---main--->
</body>
</html>