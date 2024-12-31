<?php
include("index.html");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Driver</title>
</head>
<body>
<form id="form1" name="form1" method="post">
  <table width="419" height="330" border="0" align="center">
    <tbody>
      <tr>
        <th colspan="2" scope="row"><h1 align="center"><u>Driver Signup</u></h1></th>
      </tr>
      <tr>
        <th width="144" scope="row">&nbsp;</th>
        <td width="253">&nbsp;</td>
      </tr>
      <tr>
        <th scope="row">Name</th>
        <td><input name="dname" type="text" required="required" id="dname" size="35"></td>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th scope="row">Qualification</th>
        <td><input name="quali" type="text" required="required" id="quali" size="35"></td>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th scope="row">Contact No.</th>
        <td><input name="phno" type="text" required="required" id="phno" size="35"></td>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th scope="row">Address</th>
        <td><textarea name="address" cols="32" id="address"></textarea></td>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th scope="row">Experience</th>
        <td><input name="exp" type="text" required="required" id="exp" size="35"></td>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th colspan="2" scope="row"><input type="submit" name="submit" id="submit" value="Submit">
        <input type="reset" name="reset" id="reset" value="Reset"></th>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>


<?php
if(isset($_POST['submit']))
{
	$link = mysqli_connect("localhost", "root", "root", "buses");
	if (!$link) 
	{
    	echo "Error: Unable to connect to MySQL." . PHP_EOL;
    	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    	exit;
	}
	else
	{
		$dn=$_POST['dname'];
		$qua=$_POST['quali'];
		$con=$_POST['phno'];
		$add=$_POST['address'];
		$exp=$_POST['exp'];
		mysqli_query($link, "INSERT INTO driver (name,qualification,contact,address,experience) VALUES ('$dn', '$qua',
		'$con','$add','$exp')"); 
		
		
		
	}
}

?>







