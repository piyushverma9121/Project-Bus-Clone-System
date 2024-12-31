<?php
session_start();
include("header.html")
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bus Details</title>
	
<!--===============================================================================================-->
</head>
<body>
<div>
	<center>
		<h1 align="center"><font color="black">College Bus Details</font></h1>
		
				
						<table width="50%">
								<tr >
									<th><font color="black">Bus No.</font></th>
									<th><font color="black">Source</font></th>
									<th><font color="black">Destination</font></th>
								</tr>
							
								<?php
									$link = mysqli_connect("localhost", "root", "root", "buses");
									if (!$link) 
										{
											echo "Error: Unable to connect to MySQL." . PHP_EOL;
											echo "Debugging errno: " . mysqli_connect_errno().PHP_EOL;
										}
										else
										{
												$sid=$_SESSION['sid'];

										$results=mysqli_query($link, "select * from busrequest where Bookingid='$sid' and status='Active'"); 
																

										while ($row = mysqli_fetch_array($results))
										{
											echo '<tr><td><font color="black">'.$row['busno'].'</td><td ><font color="black">s'.$row['source'].'</td><td><font color="black">'.$row['destination'].'</td></tr>';
										}
										echo "</tr>";

										}
									?>
							
									
									

				

								

								
							</tbody>
						</table>
	</center>
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




























