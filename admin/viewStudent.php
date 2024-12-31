<?php
include("index.html")
	?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bus Details</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="tblimages/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="tblvendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="tblfonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="tblvendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="tblvendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="tblvendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="tblcss/util.css">
	<link rel="stylesheet" type="text/css" href="tblcss/main.css">
<!--===============================================================================================-->
</head>
<body>
		
	
	<div class="limiter">
		
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
											
								
						<table>
							<thead>
									
								
								<tr>
									<th colspan="5" ><h1 align="center">Student Details<h1></th>
										<tr><th></th></tr>												
								</tr>
									

							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
<?php
	$link = mysqli_connect("localhost", "root", "root", "buses");
	if (!$link) 
	{
    	echo "Error: Unable to connect to MySQL." . PHP_EOL;
    	echo "Debugging errno: " . mysqli_connect_errno().PHP_EOL;
	}
	else
	{
		
	$results=mysqli_query($link, "select * from student"); 
	
	echo '<center><table ><tr class="row100 head"><th>Student ID</th><th>Name</th><th>Gender</th><th>Address</th><th>Contact</th></tr>';
		
	while ($row = mysqli_fetch_array($results))
	{
echo '<tr><td>'.$row['stuid'].'</td><td>'.$row['name'].'</td><td>'.$row['gender'].'</td><td>'.$row['address'].'</td><td>'.$row['contact'].'</td></tr>';
	}
		echo '</center>';
		
	}
?>
