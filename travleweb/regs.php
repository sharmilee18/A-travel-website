<?php

$connect=mysql_connect("localhost", "root", "");
/*
if(!$connect)
{
	
	die("could not connect to database");
	
}

else
{
	
	echo "successfully connected";
}
*/

/*
$sql=mysql_query("CREATE DATABASE persondata",$connect);
if(!$sql)
{
 echo"could not create database";
 
}
else
{
 echo"successfully created";
}
*/

/*
mysql_select_db("persondata",$connect);
$table="CREATE TABLE personinformation(

Firstname varchar(50),
Lastname varchar(50),
Email varchar(50),
Country varchar(50),
Password varchar(20)


)";
$sql=mysql_query($table,$connect);
if(!$sql)
{
 echo"could not create table";
 
}
else
{
 echo"successfully created table";
}

*/


mysql_select_db("persondata",$connect);
$table1="insert into personinformation(Firstname,Lastname,Email,Country,Password)
VALUES('$_POST[Firstname]','$_POST[Lastname]','$_POST[Email]','$_POST[Country]','$_POST[Password]')";
$sql=mysql_query($table1,$connect);
/*
if(!$sql)
{
 echo"could not create table";
 
}
else
{
 echo"successfully created table";
}

mysql_close($connect);

*/


?>


<style>
p {
    border: 1px solid black;
    background-color: lightblue;
    padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 80px;
}
</style>
<p>

<tr>
		<td colspan="6"> <a href='login.html'>Back to login page for login</a></td>
</tr>
</p>