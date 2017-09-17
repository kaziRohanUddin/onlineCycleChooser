<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">

	</head>
	<body>
	<a href="contactUs.php" style="color:red">Please give your valuable feedback</a>
		<?php
			
			include("header.php");

			include("menu.php");

		?>

		<!--Slideshow-->

		<div class="slideshow-container">

		 <div class="mySlides fade">
		  		<img src="image/bike1.jpg" style="width:100%">
		  	<div class="text">bike</div>
			</div>

		<div class="mySlides fade">
		  <img src="image/mountain.jpg" style="width:100%">
		  <div class="text">Mountain Bike</div>
		</div>
		</div>

		<div style="text-align:center">
		  <span class="dot"></span>
		  <span class="dot"></span>
		</div>
		<!-- slideshow End-->
		
		<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			for (i = 0; i < slides.length; i++) {
			   slides[i].style.display = "none";
			}
			slideIndex++;
			if (slideIndex> slides.length) {slideIndex = 1}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";
			dots[slideIndex-1].className += " active";
			setTimeout(showSlides, 3000); // Change image every 2 seconds
		}
		</script>



	</body>
	<?php
		include("footer.php");
	?>

</html>
