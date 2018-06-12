<?php


if (isset($_POST['csv'])) {
	require_once 'dbconnect.php';
	$sql = "SELECT c_date,COUNT(*) FROM consumer GROUP BY (c_date)";
	$result = mysqli_query($DBcon,$sql);
	
	

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
		<!---header--->
		<div class="header">
			<h1>Blood Donation Management System</h1>
		</div>
		
		<!---header--->
		<!---main--->
			<div class="main">
				
				<div class="main-section">
				
				<div class="registration-section">

					<table >
					
					<h2>Consumer</h2>
					
					<br>
					   <tr>
						  <th>Date</th>
						  <th>No of consumers</th>
						  
						  
						</tr>
						<?php 
						
						while ($array = mysqli_fetch_assoc($result))
						{?>
							
							<tr> <td><?php echo $array['c_date'];?> </td> 
								 <td><?php echo $array['COUNT(*)']; ?> </td> 
								  
							</tr>
							
				    <?php	}?>
							
							
						
					</table>
					<br>
					
					</br>
					
					
				</div>
			</div>
			<div class="footer">
		
		</div>

		<!---main--->
</body>
</html>
<?php } ?>



