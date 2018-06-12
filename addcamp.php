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
	<li><a class="active" href="login.html">Back</a></li>
  <li style="float:right"><a class="active"  href="home/index.html">Home</a></li>
  
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
					<h2>Add a Camp</h2>
					<!--<div class="social-icons">
						<a href="#"><i class="icon"></i><span>Sign in with twitter</span></a>
						<a href="#"><i class="icon1"></i><span>Sign in with facebook</span></a>
						<a href="#"><i class="icon2"></i><span>Sign in with google +</span></a>
					</div>-->
					<div class="register-form">
					<div class="regform">
					<form action="" method="POST">
						
						<input type="text" name="organiser" placeholder="Organiser" required>
						<input type="text" name="phno" placeholder="Contact" required>
						<input type="text" name="loc" placeholder="Location" required>
						<input type="text" name="date" placeholder="Date" required>
						
						
						<button name="cregister">Register</button>
						
					</form>
					<?php
					if(isset($_POST['cregister']))
					{
						$org=$_POST['organiser'];
						$contact=$_POST['phno'];
						$loc=$_POST['loc'];
						$date=$_POST['date'];
						$date_array = explode("/",$date); // split the array
						$var_day = $date_array[0]; //day seqment
						$var_month = $date_array[1]; //month segment
						$var_year = $date_array[2]; //year segment
						$new_date = $var_year."-".$var_month."-".$var_day; // join them together
						//echo $new_date;
						require_once 'dbconnect.php';
						$sql2="INSERT INTO camp_avl (date,organiser,cam_loc,contact) VALUES ('$new_date','$org','$loc',$contact)";
						$result1=mysqli_query($DBcon,$sql2);
						if($result1)
							echo "<script type='text/javascript'>alert('successful');</script>";
						
					}
					?>
					</div>
				
					
					
				
					</div>
					<div class="clear"></div>
					</div>
					
				</div>
			</div>
			<div class="footer">
		<!--	<p>&copy 2016 Dual Registration Form . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>-->
		</div>

		<!---main--->
</body>
</html>

