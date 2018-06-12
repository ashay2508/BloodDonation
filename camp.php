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
<div class="main">
				
				
		
<?php
if(isset($_POST['camp']))
{
	$date=date('y-m-d');
	require_once 'dbconnect.php';
	$date=date('y-m-d');
	//echo $date;
	$sql="SELECT organiser,cam_loc,contact FROM camp_avl WHERE date='$date'";
	$result=mysqli_query($DBcon,$sql);
	//$array1=mysqli_fetch_array($result);
	//echo $array['organiser'];
//if($array1==null)
	//{
		//echo "<script type='text/javascript'>alert('No Camps Being Conducted Today! ');window.location = 'consumer.php';</script>";
		
	//}
	//else
	//{
	?>
	<div class="main-section">
				
				<div class="registration-section">
				
	
	<table>
	<tr><h3>Camps Held Today!<h3></tr>
	<br><br>
	<tr>
						  <th>Name</th>
						  <th>Location</th>
						  <th>Phone no</th>
						  
						</tr>
	
	<?php
			if($array1=mysqli_fetch_array($result))
			{
				while($array2=mysqli_fetch_array($result))
				{
			?>			
							
							<tr> <td><?php echo $array2['organiser'];?> </td> 
								 <td><?php echo $array2['cam_loc']; ?> </td> 
								 <td><?php echo $array2['contact']; ?> </td> 
							</tr>
						
			<?php } 
			}
			else echo "<script type='text/javascript'>alert('No Camps Held Today!'); window.location = 'consumer.php';</script>";
}
			
?>
</table>

</div>
</div>
</div>
</body>
</html>