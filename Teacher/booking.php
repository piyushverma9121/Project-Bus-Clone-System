<?php
	session_start();
	$link = mysqli_connect("localhost", "root", "root", "buses");
	if (!$link) 
	{
    	echo "Error: Unable to connect to MySQL." . PHP_EOL;
    	echo "Debugging errno: " . mysqli_connect_errno().PHP_EOL;
	}
	else
	{		
		$id=$_SESSION['tid'];
		$dn=$_SESSION['bno'];
		$qua=$_SESSION['so'];
		$con=$_SESSION['desti'];
		$fare=$_SESSION['fares'];
		$date = date('Y-m-d H:i:s');
		mysqli_query($link, "INSERT INTO busrequest (Bookingid,source,destination,busno,fare,status,bookingdate) VALUES ('$id','$qua','$con','$dn','$fare','Active','$date')"); 
		echo "<br><br><h1 align='center'>Your Request For Bus Is Accepted</h1>";	
		header('Refresh: 2; URL=index.html');

		echo mysqli_error($link);		
	}	
?>