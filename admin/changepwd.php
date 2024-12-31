<?php
	session_start();
include("index.html");
?>


<html>
<title>ChangePassword</title>
	<center>
<form name="form1" method="post" action="">
  <table width="396" border="0">
    <tbody>
      <tr>
        <th colspan="2" scope="row"><h1 align="center">Change Password</h1></th>
      </tr>
      <tr>
        <th width="138" scope="row">&nbsp;</th>
        <td width="144">&nbsp;</td>
      </tr>
      <tr>
        <th scope="row">Old Password</th>
        <td><input name="password" type="password" required="required" id="password" size="30"></td>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th scope="row">New Password</th>
        <td><input name="password2" type="password" id="password2" size="30"></td>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th colspan="2" scope="row"><input type="submit" name="submit" id="submit" value="Change Password"></th>
      </tr>
    </tbody>
  </table>
  
 
</form>
		</center>
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
	
			$na=$_SESSION['un'];
	$a=$_POST['password'];
	$b=$_POST['password2'];
	
	$results=mysqli_query($link, "select * from admin where name='$na' and password='$a'"); 
	if(mysqli_num_rows($results)>0)
	{
		mysqli_query($link,"update admin set password='$b' where name='admin'");
		echo "<center>Password Changed Successfully</center>";
	}
	else
	{
		echo "<center>Wrong Password</center>";
	}
	echo mysqli_error($link);
	}
}
?>
