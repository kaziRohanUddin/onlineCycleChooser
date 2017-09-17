<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="nav">
					<ul>
						<li><a href="cycleChooser.php">Cycle Chooser</a></li>
						<li><a href="aboutUs.php">About Us</a></li>
						<li><a href="contactUs.php">Contact Us</a></li>
					  
						<li class="reg dropdown">
						<a href="#" class="dropbtn"><?php echo $email ?></a>
						<div class="dropdown-content">
                            <a href="changePass.php">Change Password</a>
                            <a href="logout.php">Logout</a>
						</div>
						</li>
                   </ul>
		</div>
	</body>
</html>
