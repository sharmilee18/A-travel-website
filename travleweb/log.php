<?php
session_start();
$mainid_id=$_POST['Email'];
$password=$_POST['Password'];

$connection=mysql_connect("localhost","root","");
$db=mysql_select_db("persondata",$connection);

$sql="SELECT * FROM personinformation WHERE Email='$Email' AND Password='$Password'";

$resultt=mysql_query($sql,$connection);

$count=1;
if($count==1)
{	
	
	$_SESSION['Email']=$Email;
	$_SESSION['Password']=$Password;
	echo "Login successfull";
	header("location:prc.php");	
}
else
	echo "User does not exist";
mysql_close($connection);





?>