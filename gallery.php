<?php
 include 'header.php';
?>

<!-- gallery -->
	<div class="gallery py-5 text-center" id="gallery">
		<div class="py-xl-5 py-lg-3">
			<h3 class="tittle text-center">Our Gallery</h3>
			<p class="sub-tittle text-center mt-3 mb-sm-5 mb-4"></p>
			<div class="row no-gutters">
				<div class="col-md-3 gal-img">
					<a href="#gal1"><img src="images/ms.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-3 gal-img">
					<a href="#gal5"><img src="images/dn.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-3 gal-img">
					<a href="#gal4"><img src="images/bus.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-3 gal-img">
					<a href="#gal3"><img src="images/download.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
			</div>
			<div class="row no-gutters">
				<div class="col-md-3 gal-img ml-auto">
					<a href="#gal6"><img src="images/babag.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-3 gal-img mr-auto">
					<a href="#gal2"><img src="images/bb.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
			</div>
			<!-- gallery popups -->
			<!-- popup-->
			<div id="gal1" class="pop-overlay animate">
				<div class="popup">
					<img src="images/ms.jpg" alt="Popup Image" class="img-fluid" />
					<p class="mt-4"></p>
					<a class="close" href="#gallery">&times;</a>
				</div>
			</div>
			<!-- //popup -->
			<!-- popup-->
			<div id="gal2" class="pop-overlay animate">
				<div class="popup">
					<img src="images/bb.jpg" alt="Popup Image" class="img-fluid" />
					<p class="mt-4"></p>
					<a class="close" href="#gallery">&times;</a>
				</div>
			</div>
			<!-- //popup -->
			<!-- popup-->
			<div id="gal3" class="pop-overlay animate">
				<div class="popup">
					<img src="images/download.jpg" alt="Popup Image" class="img-fluid" />
					<p class="mt-4"></p>
					<a class="close" href="#gallery">&times;</a>
				</div>
			</div>
			<!-- //popup3 -->
			<!-- popup-->
			<div id="gal4" class="pop-overlay animate">
				<div class="popup">
					<img src="images/bus.jpg" alt="Popup Image" class="img-fluid" />
					<p class="mt-4"></p>
					<a class="close" href="#gallery">&times;</a>
				</div>
			</div>
			<!-- //popup -->
			<!-- popup-->
			<div id="gal5" class="pop-overlay animate">
				<div class="popup">
					<img src="images/dn.jpg" alt="Popup Image" class="img-fluid" />
					<p class="mt-4"></p>
					<a class="close" href="#gallery">&times;</a>
				</div>
			</div>
			<!-- //popup -->
			<!-- popup-->
			<div id="gal6" class="pop-overlay animate">
				<div class="popup">
					<img src="images/babag.jpg" alt="Popup Image" class="img-fluid" />
					<p class="mt-4"></p>
					<a class="close" href="#gallery">&times;</a>
				</div>
			</div>
			<!-- //popup -->
			<!-- //gallery popups -->
		</div>
	</div>
	<!-- //gallery -->
	<?php
	include 'footer.php';
	?>