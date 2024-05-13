<?php
function conn()
{
	$serverName="localhost";
	$userName="root";
	$pass="";
	$dbName="Employee";
	$con=new mysqli($serverName,$userName,$pass,$dbName);
	return $con;
}
?>