<?php
$one=$_POST['name'];
$two=$_POST['email'];
$three=$_POST['subject'];
$four=$_POST['message'];
$con=mysqli_connect("localhost","root","root","buses");
if($con)
{
	mysqli_query($con,"insert into contact values('$one','$two','$three','$four')");
}
else
{
	echo  mysqli_error($con);
}
?>