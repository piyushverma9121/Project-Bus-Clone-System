<?php
include("header.php");
?>

<!doctype html>
<html>
<head>
<style>
#div1
{	
	height: 580px;
	width:580px;
	position: absolute;
	left:420px;
	box-shadow: 0px 0px 10px cornflowerblue;

}
	
</style>	
	
<meta charset="utf-8">
<title>Signup Here!</title>
</head>

<body>
<div id="div1">
<form id="form1" name="form1" method="post">
  <table width="491" height="426" border="0" align="center">
    <tbody>
      <tr>
		  <th colspan="2" scope="row"><h1><strong><u>Student Signup Here</u></strong></h1></th>
      </tr>
      <tr>
        <th scope="row">Student ID</th>
        <td><input name="sid" type="text" required="required" id="sid" size="40"></td>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th scope="row">Name</th>
        <td><input name="sname" type="text" id="sname" size="40"></td>
      </tr>
      <tr>
        <th width="161" scope="row">&nbsp;</th>
        <td width="308">&nbsp;</td>
      </tr>
      <tr>
        <th scope="row">Password</th>
        <td><input name="password" type="password" id="password" size="40"></td>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th scope="row">Email</th>
        <td><input name="smail" type="email" id="smail" size="40"></td>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th scope="row">Gender</th>
        <td><p>
          <label>
            <input type="radio" name="gender" value="Female" id="gender_0">
            Female</label>
          <br>
          <label>
            <input type="radio" name="gender" value="Male" id="gender_1">
            Male</label>
          <br>
        </p></td>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th scope="row">Address</th>
        <td><textarea name="address" cols="40" id="address"></textarea></td>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th scope="row">Contact No.</th>
        <td><input name="phno" type="text" required="required" id="phno" size="40"></td>
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
	</div>
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
		$gen="";
		if(isset($_POST['gender']))
		{
			$gen=$_POST['gender']; 
		}
		
		$one=$_POST['sid'];
		$two=$_POST['sname'];
		$three=$_POST['password'];
		$four=$_POST['smail'];
		
		$six=$_POST['address'];
		$seven=$_POST['phno'];
		$d=mysqli_query($link, "INSERT INTO student(stuid,name,password,email,gender,address,contact,status) VALUES ('$one', '$two','$three','$four','$gen','$six','$seven','Active')"); 
    echo mysqli_connect_errno($d);
	}
}

?>




