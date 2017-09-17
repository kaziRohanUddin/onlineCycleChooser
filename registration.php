<!DOCTYPE html>
<html>
<head>
	<title>Online Cycle Chooser</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php

		include("header.php");



	?>
			<div><center><h2>Signup Form</h2></center></div>
			<br>
			<div><center>
				<form method="post" action="userReges.php" enctype="multipart/form-data">
					<div>
						<label>First Name:</label>
						<br>
						<input name="f_name">
					</div>
				<br>
					<div>
						<label>Last Name:</label>
						<br>
						<input name="l_name">
					</div>
				<br>
					<div>
						<label>Email:</label>
						<br>
						<input name="email">
					</div>
				<br>
					<div>
						<label>Password:</label>
						<br>
						<input type="password" name="password">
					</div>
				<br>
					<div>
						<label>Mobile:</label>
						<br>
						<input name="mobile">
					</div>
				<br>
					<div>
						<label>Date Of Birth(mm/dd/yyyy):</label>
						<br>
						<input name="dob">
					</div>
				<br>
					<div>
						<label>Address:</label>
						<br>
						<input type="text" name="address">
					</div>
					<br>
					<div>
						<label>Image:</label>
						<br>
						<input name="file" type="file"/>
					</div>
					
					<br>
					<div>
						<input type="submit" value="Sign Up" name="signup">
					</div>
				</form></center>
			</div>
			<br>

</body>
	<?php
		include("footer.php");
	?>
</html>
