<?php
session_start();
if(isset($_SESSION['tid']) && isset($_SESSION['pwd']))
{include("header.php")
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div>
<h2 align="center">View Bus Booked</h2>
	
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
	
$count=1;
$teacherid= $_SESSION['tid'];
$sel_query="Select * from busrequest where status='Active' and Bookingid='$teacherid' ORDER BY Bookingid desc;";
$result = mysqli_query($link,$sel_query);
$rows=mysqli_num_rows($result);
if($rows>0)
{
	?>
	<center>
<table width="70%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
	<th><strong>S.No.</strong></th>
<th><strong>Bus No.</strong></th>
<th><strong>Source</strong></th>
<th><strong>Destination</strong></th>
	<th><strong>Fare</strong></th>
<th><strong>Cancel</strong></th>
</tr>
</thead>
	<?php
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
else
{
	echo "<h1 align='center'>No Bus Booked Till Now!<h1>";
}
} 

?>
</tbody>
</table>
</div>
</body>
</html>
	
<?php
}
else
{
	echo "<h1 align='center'>Please Login!</h1>";
	echo "<center><a href='../teacherlogin.php'>Login Here!</a></center>";
}
?>