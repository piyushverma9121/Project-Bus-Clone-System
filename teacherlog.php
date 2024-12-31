<?php

	$link = mysqli_connect("localhost", "root", "root", "buses");
	if (!$link) 
	{
    	echo "Error: Unable to connect to MySQL." . PHP_EOL;
    	echo "Debugging errno: " . mysqli_connect_errno().PHP_EOL;
	}
	else
	{
		
		$na=$_POST['username'];
		$pwd=$_POST['pwd'];
		
		$results=mysqli_query($link, "select * from teacher where Teacherid='$na' and password='$pwd' and status='Active'"); 
		if(mysqli_num_rows($results) > 0)
		{
		
			session_start();
			$_SESSION['tid']=$na;
			$_SESSION['pwd']=$pwd;
			header('location:teacher/index.php');

		}
		else
		{
			echo "<div id='sty1'><br><center><h2>Wrong Username Or Password</h2></center></div>";
			
		}
		
		echo mysqli_error($link);
	}
?>