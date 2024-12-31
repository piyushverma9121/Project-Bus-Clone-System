<?php
include("header.php");
$con = mysqli_connect("localhost", "root", "root", "buses");
	if (!$con) 
	{
    	echo "Error: Unable to connect to MySQL." . PHP_EOL;
    	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    	exit;
	}
else
{
	$id=$_REQUEST['id'];
	//$query = "DELETE FROM teacher WHERE Teacherid='$id'"; 
	$query = "update teacher set status='Deactive' WHERE Teacherid='$id'"; 
	$result = mysqli_query($con,$query) or die ( mysqli_error());
	header("Location: editprofile.php"); 
	echo mysqli_error($con);
}
?>