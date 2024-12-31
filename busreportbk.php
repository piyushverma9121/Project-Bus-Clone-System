<?php
include 'header.php';
echo "<br><br>";
if(isset($_POST['submit']))
{
	$link = mysqli_connect("localhost", "root", "", "buses");
	if (!$link) 
	{
    	echo "Error: Unable to connect to MySQL." . PHP_EOL;
    	echo "Debugging errno: " . mysqli_connect_errno().PHP_EOL;
	}
	else
	{
		
	$source=$_POST['source'];
	$destination=$_POST['destination'];
	$results=mysqli_query($link, "select * from bustbl where source='$source' and destination='$destination'"); 
	if(mysqli_num_rows($results)!=0)
	{
    		
	echo "<h1 align='center'>Bus Route From ".$source.' To '.$destination.'</h1>';
	echo '<center><table border=2 width="60%"><tr><th>Bus No.</th><th>Source</th><th>Destination</th></tr>';
		
	while ($row = mysqli_fetch_array($results))
	{
		echo '<tr><td>'.$row['busno'].'</td><td>'.$row['source'].'</td><td>'.$row['destination'].'</td></tr>';
	}
		echo '</center>';
		
	}
		else
		{
			echo '<h1 align="center">No Such Route Found</h1>';
		}
	}
}

?>
