<?php
include("header.html");
$id=$_REQUEST['id'];
$con = mysqli_connect("localhost", "root", "root", "buses");
	if (!$con) 
	{
    	echo "Error: Unable to connect to MySQL." . PHP_EOL;
    	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    	exit;
	}
else
{

	
	$query = "update busrequest set status='Deactive' WHERE Bookingid='$id'"; 
	$result = mysqli_query($con,$query) or die ( mysqli_error());
	//header("Location: editprofile.php"); 
	echo "<h1 align='center'>Request For Cancellation Is Accepted</h1>";
	echo mysqli_error($con);
}
?>