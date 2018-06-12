<?php
require_once 'dbconnect.php';
session_start();
if(isset($_SESSION['uname'])) 
	$var=$_SESSION['uname'];
else{
   echo "error";
}

if (isset($_POST['update'])) {
$name=$_POST['name'];

$age=$_POST['age'];

$blood_group=$_POST['bloodgrp'];

$phone=$_POST['phno'];

$location=$_POST['loc'];

$status=$_POST['sta'];



$sql = "UPDATE donor SET name='$name', age=$age, blood_group='$blood_group', phno=$phone, location='$location', stats=$status WHERE username='$var'";
$result = mysqli_query($DBcon,$sql) ;

if($result==true)
	header('Location: welcome1.php? user='.$var);

}

?>
