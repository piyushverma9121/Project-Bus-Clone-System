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
<h2 align="center"><font color='black'>View Record</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong><font color='black'>S.No</strong></th>
<th><strong><font color='black'>Name</strong></th>
<th><strong><font color='black'>Email</strong></th>
<th><strong><font color='black'>Edit</strong></th>
<th><strong><font color='black'>Delete</strong></th>
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

		$stuid=	$_SESSION['sid'];
		$pass=$_SESSION['pwd'];
$sel_query="Select * from student where status='Active' and stuid='$stuid' and password='$pass' ORDER BY stuid desc;";
$result = mysqli_query($link,$sel_query);
		echo mysqli_error($link);
while($row = mysqli_fetch_array($result))
{
?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["name"]; ?></td>
<td align="center"><?php echo $row["email"]; ?></td>
<td align="center">
<a href="edit.php?id=<?php echo $row["stuid"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["stuid"]; ?>">Delete</a>
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