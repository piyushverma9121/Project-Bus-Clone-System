<?php
session_start();
	$link = mysqli_connect("localhost", "root", "", "buses");
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
				
	mysqli_query($link, "INSERT INTO busrequest (source,destination,busno,fare) VALUES ('$qua','$con','$dn','$fare')"); 
		echo "<br><br><h1 align='center'>Your Request For Bus Is Accepted</h1>";
	echo mysqli_error($link);
		
}
?>