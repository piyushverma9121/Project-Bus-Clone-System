<?php
include("header.php");
$id=$_REQUEST['id'];
$con = mysqli_connect("localhost", "root", "root", "buses");
	if (!$con) 
	{
    	echo "Error: Unable to connect to MySQL." . PHP_EOL;
    	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    	exit;
	}
else
{
$query = "SELECT * from teacher where Teacherid='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		#div1
		{
			width:500px;
			position:absolute;
			left:500px;
		}
	</style>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">


<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$name =$_REQUEST['name'];
$department =$_REQUEST['department'];
$email =$_REQUEST['email'];
$contact =$_REQUEST['contact'];
$address =$_REQUEST['address'];
$password =$_REQUEST['password'];

$update="update teacher set name='".$name."', department='".$department."',email='$email',address='$address',contact='$contact',password='$password' where Teacherid='".$id."'";
mysqli_query($con, $update) or die(mysqli_error($con));
$status = "Record Updated Successfully. </br></br>
<a href='editprofile.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div id="div1">
	<h1>Update Record</h1>
<form name="form" method="post" action=""> 
<p>
  <input type="hidden" name="new" value="1" />
  <input name="id" type="hidden" value="<?php echo $row['Teacherid'];?>" />
</p>
	
<table width="312" border="4" align="center">
  <tbody>
    <tr>
      <th width="236" scope="row">Name</th>
      <th width="54" scope="row"><input name="name" type="text" 
required placeholder="Enter Name" style="color:black" value="<?php echo $row['name'];?>" size="35" /></th>
    </tr>
    <tr>
      <th colspan="2" scope="row">&nbsp;</th>
    </tr>
    <tr>
      <th scope="row">Department</th>
      <th scope="row"><input name="department" type="text" 
required placeholder="Enter Department" style="color:black" value="<?php echo $row['department'];?>" size="35" /></th>
    </tr>
    <tr>
      <th colspan="2" scope="row">&nbsp;</th>
    </tr>
    <tr>
      <th scope="row">Email</th>
      <th scope="row"><input name="email" type="text" 
required placeholder="Enter Email" style="color:black" value="<?php echo $row['email'];?>" size="35" /></th>
    </tr>
    <tr>
      <th colspan="2" scope="row">&nbsp;</th>
    </tr>
    <tr>
      <th scope="row">Address</th>
      <th scope="row"><input name="address" type="text" 
required placeholder="Enter Address" style="color:black" value="<?php echo $row['address'];?>" size="35" /></th>
    </tr>
    <tr>
      <th colspan="2" scope="row">&nbsp;</th>
    </tr>
    <tr>
      <th scope="row">Contact No.</th>
      <th scope="row"><input name="contact" type="text" 
required placeholder="Enter Contact" style="color:black" value="<?php echo $row['contact'];?>" size="35" /></th>
    </tr>
    <tr>
      <th colspan="2" scope="row">&nbsp;</th>
    </tr>
    <tr>
      <th scope="row">Password</th>
      <th scope="row"><input name="password" type="text" 
required placeholder="Enter password" style="color:black" value="<?php echo $row['password'];?>" size="35" /></th>
    </tr>
    <tr>
      <th colspan="2" scope="row">&nbsp;</th>
    </tr>
    <tr>
      <th colspan="2" scope="row"><input name="submit" type="submit" value="Update" style="color: black" / ></th>
    </tr>
  </tbody>
</table>

	
	
	
<p>&nbsp;</p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>