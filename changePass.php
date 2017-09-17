<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">

	</head>
	<body>
		<?php
			include("header.php");
		?>
		<br>
					<br>
		<div><center><h2>Change Password</h2></center></div>
			<br>
					<br>
					<br>
			<div><center>
				<form method="post" action="cP.php">
					<div>
						<label>Current Password:</label>
						<input type="password" name="cPassword">
					</div>
					<br>
					<div>
						<label>New Password:</label>
						<input type="password" name="nPassword">
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
