<html>
<head>
<!--
<style>
#div1
{
    height: 290px;
    width: 500px;
    position: absolute;
    left: 470px;
    box-shadow: 0px 0px 10px cornflowerblue;
}
#buttonstyle
{
	background-color: coral;
	height: 40px;
	width: 80px;
}
#sty1
	{
		height: 200px;
		width: 500px;
		position: relative;
		top: 300px;
    	left: 470px;
    box-shadow: 0px 0px 10px cornflowerblue;
	}
	
</style>	-->
		<?php
			session_start();
	include("header.html");
	?>
	

<meta charset="utf-8">
<title>Bus Request</title>
</head>
<body>	
<div id="div1">
<center>
<form id="form1" name="form1" method="post">
  <table width="391" border="0" align="center">
    <tbody>
      <tr>
		  <th colspan="2" scope="row"><h1><strong><u>Bus Request Form</u></strong></h1></th>
      </tr>
      <tr>
        <th width="169" scope="row">Source</th>
        <td width="200"><input name="source" type="text" required="required" id="source" size="35"></td>
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
        <th scope="row">&nbsp;</th>
        <td><input type="submit" name="search" id="search" value="Search"></td>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
    </tbody>
  </table>
</form>
		</div>
</body>
</html>
</select>

<?php
if(isset($_POST['search']))
{
	$link = mysqli_connect("localhost", "root", "root", "buses");
	if (!$link) 
	{
    	echo "Error: Unable to connect to MySQL." . PHP_EOL;
    
	}
	else
	{
		
		$so=$_POST['source'];
		$desti=$_POST['destination'];
		
		$results=mysqli_query($link, "select * from bustbl where source='$so' and destination='$desti'"); 
		if(mysqli_num_rows($results) > 0)
		{
		
		echo "<div><center><form name='booking' action='booking.php' metho='post'><table width='70%'><th>Bus No.</th><th>Source</th>
		<th>Destination</th><th>Driver No.</th><th>Fare</th><th>Booking</th>";
	
	while ($row = mysqli_fetch_array($results))
{
		
		$_SESSION["bno"]=$row['busno'];
		$_SESSION["so"]=$row['source'];
		$_SESSION["desti"]=$row['destination'];
		$_SESSION["fares"]=$row['Fare'];
		
echo '<tr><td>'.$row['busno'].'</td><td>'.$row['source'].'</td><td>'.$row['destination'].'</td><td>'.$row['driverno'].'</td><td>'.$row['Fare'].'</td><td><input type="Submit" name="book" value="Book"></td></tr>';
	}
		echo '</form></table></div>';
		
	}
	else
	{
		echo "<div id='sty1'><br><center><h2>No Route Found</h2></center></div>";
	}
		
	}
}
?>



