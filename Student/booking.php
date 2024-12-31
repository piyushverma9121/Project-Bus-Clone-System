<?php
	
session_start();
	include("header.html");
	

	$link = mysqli_connect("localhost", "root", "root", "buses");
	if (!$link) 
	{
    	echo "Error: Unable to connect to MySQL." . PHP_EOL;
    	echo "Debugging errno: " . mysqli_connect_errno().PHP_EOL;
	}
	else
	{
		$dn=$_SESSION['bno'];
		$qua=$_SESSION['so'];
		$con=$_SESSION['desti'];
		$fare=$_SESSION['fares'];	
		$date = date('Y-m-d H:i:s');
		$stuid=	$_SESSION['sid'];
	mysqli_query($link, "INSERT INTO busrequest (id,source,destination,busno,fare,status,bookingdate) VALUES ('$stuid','$qua','$con','$dn','$fare','Active','$date')"); 
		echo "<br><br><h1 align='center'>Your Request For Bus Is Accepted</h1>";
	echo mysqli_error($link);
		
}
?>