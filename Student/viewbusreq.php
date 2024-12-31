<?php
session_start();
include("header.html");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<h2 align="center"><font color='black'>View Bus Booked</h2>
<center>
<table width="70%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
	<th><font color='black'><strong>S.No.</strong></th>
<th><font color='black'><strong>Bus No.</strong></th>
<th><font color='black'><strong>Source</strong></th>
<th><font color='black'><strong>Destination</strong></th>
	<th><font color='black'><strong>Fare</strong></th>
<th><font color='black'><strong>Cancel</strong></th>
</tr>
</thead>
<tbody>
<?php
	$link = mysqli_connect("localhost", "root", "root", "buses");
	if (!$link) 
	{
    	echo "Error: Unable to connect to MySQL." . PHP_EOL;
    	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    	exit;
	}
	else
	{	
	$stuid=	$_SESSION['sid'];
		$pass=$_SESSION['pwd'];
$count=1;
$sel_query="Select * from busrequest where status='Active' and Bookingid='$stuid' ORDER BY Bookingid desc;";
$result = mysqli_query($link,$sel_query);
		echo mysqli_error($link);
while($row = mysqli_fetch_array($result))
{
?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["busno"]; ?></td>
<td align="center"><?php echo $row["source"]; ?></td>
	<td align="center"><?php echo $row["destination"]; ?></td>
	<td align="center"><?php echo $row["fare"]; ?></td>
<td align="center">
	
	<a href="cancel.php?id=<?php echo $row["Bookingid"]; ?>">Cancel</a>
	

</td>
</tr>
<?php 
 $count++; 
} 
	}
?>
</tbody>
</table>
</div>
</body>
</html>