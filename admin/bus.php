<?php
include("index.html");
?>
<!doctype html>
<html>
<head>
<style>
#div1
{	
	height: 400px;
	width:450px;
	
	position: absolute;
	left:470px;
	box-shadow: 0px 0px 10px cornflowerblue;

}
#buttonstyle
{
	background-color: coral;
	height: 40px;
	width: 80px;
}
	
</style>	
	
<meta charset="utf-8">
<title>Bus Information</title>
</head>

<body>
	<br><br>
<div id="div1">
	
<form id="form1" name="form1" method="post">
  <table width="391" border="0" align="center">
    <tbody>
      <tr>
		  <th colspan="2" scope="row"><h1 align="center"><strong><u>Add A Bus</u></strong></h1></th>
      </tr>
      <tr>
        <th width="169" scope="row">&nbsp;</th>
        <td width="200">&nbsp;</td>
      </tr>
      <tr>
        <th scope="row">Bus No.</th>
        <td><input name="busno" type="text" id="busno" size="35"></td>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th scope="row">Source</th>
        <td><input name="source" type="text" required="required" id="source" size="35"></td>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th scope="row">Destination</th>
        <td><input name="destination" type="text" id="destination" size="35"></td>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th scope="row">Driver No.</th>
        <td>
<select name="drvid">
    <option value="" selected="selected" disabled="">---Selected---</option>
    <?php
	$con = mysqli_connect("localhost", "root", "root", "buses");
	
    $query = "SELECT driverid FROM driver";
    $query_run = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($query_run)) 
	{
        echo "<option value='".$row['driverid']."'>".$row['driverid']."</option>";
    }
	?>
			</select>
	</td>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
	      <th><strong>Fare</strong></th>
		<td><input type="text" name="fare" required></td>
      </tr>
		  <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
		
		
		
      <tr>
        <th colspan="2" scope="row"><input type="submit" id="buttonstyle" name="submit" id="submit" value="Submit"> <input type="reset" name="reset" id="buttonstyle" id="reset" value="Reset"></th>
      </tr>
    </tbody>
  </table>
</form>
		</div>
</body>
</html>
</select>

<?php
if(isset($_POST['submit']))
{
	$link = mysqli_connect("localhost", "root", "root", "buses");
	if (!$link) 
	{
    	echo "Error: Unable to connect to MySQL." . PHP_EOL;
    	echo "Debugging errno: " . mysqli_connect_errno().PHP_EOL;
	}
	else
	{
		$dn=$_POST['busno'];
		$qua=$_POST['source'];
		$con=$_POST['destination'];
		$add=$_POST['drvid'];
		$fare=$_POST['fare'];
		
	mysqli_query($link, "INSERT INTO bustbl (busno,source,destination,driverno,fare) VALUES ('$dn', '$qua','$con','$add','$fare')"); 
	echo mysqli_error($link);
		
	}
}
?>
