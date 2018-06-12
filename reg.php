<?php
require_once 'dbconnect.php';

if (isset($_POST['dregister'])) 
{
$category="donor";
$name=$_POST['name'];
$age=$_POST['age'];
$blood_group=$_POST['bloodgrp'];
$location=$_POST['loc'];
$phone=$_POST['phno'];
$status=$_POST['stats'];
if($status== 'on')
	$stats=1;
else
	$stats=0;

$username=$_POST['username'];
$pwd=$_POST['pwd'];

$sql2="INSERT INTO accounts (username,pwd,category) VALUES ('$username','$pwd','$category')";
$result1=mysqli_query($DBcon,$sql2);
if($result1== false)
	echo mysqli_error();

$sql = "INSERT INTO donor (name,age,blood_group,phno,location,stats,username,pwd) VALUES ('$name',$age,'$blood_group',$phone,'$location',$stats,'$username','$pwd')";
$result = mysqli_query($DBcon,$sql);
if($result==false)
	echo"fail";
else
	header('Location: sucessreg.html'); 



}
require_once 'dbconnect.php';
if (isset($_POST['oregister'])) 
{
$category="organisation";
$name=$_POST['name'];
//echo $name;
$location=$_POST['location'];
//echo $location;
$contact=$_POST['contact'];
//echo $contact;
$username=$_POST['userid'];
//echo $username;
$pwd=$_POST['pwd'];
$bg=$_POST['bg'];
$b='';
foreach($bg as $b1)  
   {  
      $b .= $b1.",";  
   }
  
$sql2="INSERT INTO accounts (username,pwd,category) VALUES ('$username','$pwd','$category')";
$result1=mysqli_query($DBcon,$sql2);
if($result1== false)
	echo mysqli_error();


$sql1 = "INSERT INTO organisation (`o_name`,`o_loc`,`o_contact`,`o_user_id`,`o_pwd`,`o_bgrps`) VALUES ('$name','$location','$contact','$username','$pwd','$b')";
$result1 = mysqli_query($DBcon,$sql1);
if($result1==false)
	echo"fail1";
else
	header('Location: sucessreg.html'); 

}
?>