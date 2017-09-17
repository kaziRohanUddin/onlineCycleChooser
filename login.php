<html>
	<head>
	<style>
	.form{
	padding:60px;
	font-size:20px;
	}

	.submit-button {
			background-color: #3F51B5;
			border: none;
			color: white;
			padding: 7px 15px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 14px;
			margin: 4px 2px;
			cursor: pointer;
		}
	</style>
	</head>
	<body>
		<?php

			include("header.php");

		?>


		<div>
		<table width=100% height=100%>
			<tr>
			<td width=50%>
				<img src="image/cover.jpg" alt="Bijoy Sarani view" height=100% width =100% >
			</td>
			<td width=20%>
				<div class="form">
		<form method='post' action="sign.php" >
					<h2 style="color:blue;">Online Cycle Chooser</h2>
					<br>
					Email:<br/>
					<input type="text" name="email"><br/><br/>
					Password:<br/>
					<input type="Password" name="password">
					<br/> <br/>
					 <a href="forgetPass.php">Forget Password?</a>  <br><br>
			<input type="submit" value="Login" class="submit-button" ><br><br>
					<a href="registration.php" style="text-decoration: none;"><u>Sign Up</u><a/><br><br>
					<a href="home.php" style="text-decoration: none;"><u>Home</u><a>
			</form>
				</div>
			</td>
			</tr>
		</table>
		</div>

	</body>
	<?php
		include("footer.php");
	?>
</html>