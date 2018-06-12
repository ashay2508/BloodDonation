<?php

  
if (isset($_POST['login'])) {
$username=$_POST['uname'];
$password=$_POST['pwd'];

require_once 'dbconnect.php';
$sql = "SELECT password FROM admin WHERE user_id='$username'";
$result = mysqli_query($DBcon,$sql);
$row = mysqli_fetch_assoc($result);
$rs = $row['password'];

$sql1 = "SELECT o_pwd FROM organisation WHERE o_user_id='$username'";
$result1 = mysqli_query($DBcon,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$rs1 = $row1['o_pwd'];

$sql2 = "SELECT pwd FROM donor WHERE username='$username'";
$result2 = mysqli_query($DBcon,$sql2);
$row2 = mysqli_fetch_assoc($result2);
$rs2 = $row2['pwd'];


if($rs==$password)
{
	echo "login successful";
	header('Location: welcome.html'); 
}
else if($rs1==$password)
{
	header('Location: welcome2.php? user='.$username); 
	
}
else if($rs2==$password)
{
	header('Location: welcome1.php? user='.$username); 
		
}
else
	echo "<script type='text/javascript'>alert('Incorrect Username Or Password'); window.location = 'login.html';</script>";
	
}

?>
