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
		$one=$_POST['name'];
$two=$_POST['email'];
$three=$_POST['phoneno'];
$four=$_POST['subject'];
$five=$_POST['message'];
		mysqli_query($link, "INSERT INTO driver (name,email,phone,subject,msg) VALUES ('$one', '$two',
		'$three','$four','$five')"); 
echo "<h1>Information Is Submitted Successfully!";
	
	}
}
echo "<h1 align='center'>Information Is Submitted Successfully!";
?>


