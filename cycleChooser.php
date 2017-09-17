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
		<?php
			include("header.php");
			include("menu1.php");
		?>
					<br>
					<br>
		<div><center><h2>Cycle Chooser</h2></center></div>
					<br>
					<br>
					<br>
			<div><center>
				<form method="post" action="cycleChooserResult.php">
					<div>
						<label>Height (Inches):</label><br>
						<input type="text" required name="height">
					</div>
					<br>
					<div>
						<label>Weight (kg) :</label><br>
						<input type="text" required name="weight">
					</div>
					<br>
					<div>
						<label>Road Type:</label><br>
  						<input type="radio" name="roadType" value="onRoad" checked> On Road<br>
  						<input type="radio" name="roadType" value="offRoad"> Off Road<br>
					</div>
					<br>
					<br>
					<div>
						<input type="submit" value="Submit" name="submit">
					</div>
				</form></center>
			</div>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
	</body>
	<?php
		include("footer.php");
	?>
</html>
