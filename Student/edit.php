<?php
include("header.html");
$id=$_REQUEST['id'];
//echo $id;
$con = mysqli_connect("localhost", "root", "root", "buses");
	if (!$con) 
	{
    	echo "Error: Unable to connect to MySQL." . PHP_EOL;
    	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    	exit;
	}
else
{
$query = "SELECT * from student where stuid='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">

<h1 align="center">Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$name =$_REQUEST['name'];
$password =$_REQUEST['password'];
$email =$_REQUEST['email'];
$address =$_REQUEST['address'];
$contact =$_REQUEST['contact'];
$update="update student set name='".$name."',email='$email',address='$address',contact='$contact',password='$password' where stuid='".$id."'";
mysqli_query($con, $update) or die(mysqli_error($con));
$status = "Record Updated Successfully. </br></br>
<a href='editprofile.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div align="center">
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['stuid'];?>" />
<p>Name  <input type="text" name="name" placeholder="Enter Name" 
required value="<?php echo $row['name'];?>" size="40" /></p>

<p>Email   <input type="text" name="email" placeholder="Enter Email" 
required value="<?php echo $row['email'];?>" size="40" /></p>	
<p>Address   <input type="text" name="address" placeholder="Enter Address" 
required value="<?php echo $row['address'];?>" size="40" /></p>	

<p>Contact  <input type="text" name="contact" placeholder="Enter Contact" 
required value="<?php echo $row['contact'];?>" size="40" /></p>	
	
<p>Password<input type="text" name="password" placeholder="Enter password" 
required value="<?php echo $row['password'];?>" size="40" /></p>	
	
	
	
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>