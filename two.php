<?php
session_start();
if(isset($_SESSION['uname'])) 
	$var=$_SESSION['uname'];
else{
   echo "error";
}

$_SESSION['uname']=$var;
if (isset($_POST['edit'])) {
	
	require_once 'dbconnect.php';
	$sql = "SELECT * FROM donor WHERE username='$var'";
	$result = mysqli_query($DBcon,$sql);
	$row = mysqli_fetch_assoc($result);
}
	?>
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
		<!---header--->
		<div class="header">
			<h1>Blood Donation Management System</h1>
		</div>
		<!---header--->
		<!---main--->
			<div class="main">
				<div class="main-section">
				<div class="registration-section">
					<h2>EDIT</h2>
					
					<div class="register-form">
					<div class="regform">
					<form action="update.php" method="POST" >
						<span>Name:</span><input name="name" type="text" value="<?php echo $row['name']; ?>" required >
						<span>Age:</span><input name="age" type="text" value="<?php echo $row['age']; ?>" required  >
						<span>Blood Group:</span><input name="bloodgrp" type="text" value="<?php echo $row['blood_group']; ?>" required   >
						<span>Phone Number:</span><input name="phno" type="text" value="<?php echo $row['phno']; ?>" required  >
						<span>Location:</span><input name="loc" type="text" value="<?php echo $row['location']; ?>" required  >
						<span>Status:</span><input name="sta" type="text" value="<?php echo $row['stats'];?>" required  ><br><span><text> <?php if($row['stats']==1) echo "can donate blood"; else echo "cannot donate blood"; ?></text></span>
						
						<button id="update" name="update">Update</button>
						
					</form>
					</div>
				
					
					
				
					</div>
					<div class="clear"></div>
					</div>
					
				</div>
			</div>
			
		<!---main--->
</body>
</html>

	
	




	


?>