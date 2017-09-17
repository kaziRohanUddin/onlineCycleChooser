<?php
	session_start();
	if(isset($_SESSION['email'])==false){
		header('location:Home.php');
	}
	$email=$_SESSION['email'];

 ?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">

	</head>
	<body>
	<a href="contactUs.php" style="color:red">Please give your valuable feedback</a>
		<?php
			
			include("header.php");

			include("menu1.php");

		?>
<br>
<br>
<br>
<br>



	</body>
	<?php
		include("footer.php");
	?>
</html>