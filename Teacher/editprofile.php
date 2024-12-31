<?php
session_start();
if(isset($_SESSION['tid']) && isset($_SESSION['pwd']))
{
	include("header.php");
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
<h2>View Record</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Name</strong></th>
<th><strong>Department</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
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
	
$count=1;
$ab=$_SESSION['tid'];
$sel_query="Select * from teacher where status='Active' and Teacherid=$ab ORDER BY teacherid desc;";
$result = mysqli_query($link,$sel_query);
		echo mysqli_error($link);
while($row = mysqli_fetch_array($result))
{
?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["name"]; ?></td>
<td align="center"><?php echo $row["department"]; ?></td>
<td align="center">
<a href="edit.php?id=<?php echo $row["Teacherid"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["Teacherid"]; ?>">Delete</a>
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


<?php
}
else
{
	echo "<h1 align='center'>Please Login!</h1>";
	echo "<center><a href='../teacherlogin.php'>Login Here!</a></center>";
}
?>