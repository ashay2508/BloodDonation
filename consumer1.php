<?php
require_once 'dbconnect.php';
if(isset($_POST['search']))
{
	$bg=$_POST['blood_group'];

	
	$date=date("y-m-d");
	//$date_array = explode("-",$date); // split the array
	//$var_day = $date_array[0]; //day seqment
	//$var_month = $date_array[1]; //month segment
	//$var_year = "20".$date_array[2]; //year segment
	//$new_date = "$var_day-$var_month-$var_year"; // join them together
	//echo $new_date;

	$sqc="INSERT INTO consumer(c_bg,c_date) VALUES ('$bg','$date')";
	$res= mysqli_query($DBcon,$sqc);
	$sql = "SELECT name,location,phno FROM donor WHERE blood_group='$bg'";
	$result = mysqli_query($DBcon,$sql);
	$array = mysqli_fetch_assoc($result);
	$sql1 = "SELECT o_name,o_loc,o_contact FROM organisation WHERE FIND_IN_SET('$bg', o_bgrps)";
	$result1 = mysqli_query($DBcon,$sql1);
	$array1 = mysqli_fetch_assoc($result1);
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
		<!---header--->
		<div class="header">
			<h1>Blood Donation Management System</h1>
		</div>
		
		<!---header--->
		<!---main--->
			<div class="main">
				
				<div class="main-sec">
				
				<div class="registration-section">

					<table >
					
					<h2>Available Donors</h2>
					<?php
					if($array!=null)
					{
						?>
					<br>
					   <tr>
						  <th>Name</th>
						  <th>Location</th>
						  <th>Phone no</th>
						  
						</tr>
						<?php 
						
						while ($array = mysqli_fetch_assoc($result))
						{?>
							
							<tr> <td><?php echo $array['name'];?> </td> 
								 <td><?php echo $array['location']; ?> </td> 
								 <td><?php echo $array['phno']; ?> </td> 
							</tr>
							
				    <?php	}
							
							}	
						else {	?>
							<tr><h3>no results found</h3></tr>
						<?php } ?>
							
					</table>
					<br>
					
					</br>
					<table >
					<h2>Organisations</h2>
					<?php
					if($array1!=null)
					{
						?>
					</br>
					   <tr>
						  <th>Name</th>
						  <th>Location</th>
						  <th>Phone no</th>
						  
						</tr>
						<?php 
						
						while ($array1 = mysqli_fetch_assoc($result1))
						{?>
							
							<tr> <td><?php echo $array1['o_name'];?> </td> 
								 <td><?php echo $array1['o_loc']; ?> </td> 
								 <td><?php echo $array1['o_contact']; ?> </td> 
							</tr>
							
				    <?php	}
					        }
					else {
					?>
					<tr><h3>no results found</h3></tr>
					<?php } 
					 ?>
					</table>

					
					<div class="clear"></div>
					
					</div>
					
				</div>
			</div>
			<div class="footer">
		
		</div>

		<!---main--->
</body>
</html>


	
	
