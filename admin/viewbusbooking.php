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
		
	<h1 align="center">Bus Request Details</h1>
	<div class="limiter">
		<h1 align="center"></h1>
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">	
						<table>
							<thead>
									
								
								<tr class="row100 head">
									<th class="cell100 column1">Booked By</th>
									<th class="cell100 column2">Bus No.</th>
									<th class="cell100 column3">Source</th>
									<th class="cell100 column4">Destination</th>
									<th class="cell100 column5">Fare</th>
								</tr>
							</thead>
						</table>
					</div>
<br><br>
					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<?php
									$link = mysqli_connect("localhost", "root", "", "buses");
									if (!$link) 
										{
											echo "Error: Unable to connect to MySQL." . PHP_EOL;
											echo "Debugging errno: " . mysqli_connect_errno().PHP_EOL;
										}
										else
										{

										$results=mysqli_query($link, "select * from busrequest"); 
																

										while ($row = mysqli_fetch_array($results))
										{
											echo '<tr class="row100 body"><td class="cell100 column1">'.$row['id'].'</td><td cell100 column2>'.$row['busno'].'</td><td cell100 column3>'.$row['source'].'</td><td cell100 column4>'.$row['destination'].'s<td cell100 column5>'.$row['fare'].'</td></tr>';
										}
										echo "</tr></tbody>";

										}
									?>
							
									
									

				

								

								
							</tbody>
						</table>
					</div>
				</div>
				
				

								


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>




























