<?php
	session_start();
	if(isset($_SESSION['email'])==false){
		header('location:Home.php');
	}
	$email=$_SESSION['email'];

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Online Cycle Chooser</title>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>


	<div class="navbar navbar-default navbar-fixed-top" id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="Home.php" class="navbar-brand">Online Cycle Chooser</a>
			</div>

			

			<ul class="nav navbar-nav navbar-right">
				

				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $email ?></a>
					<ul class="dropdown-menu">
                            <li><a href="changePass.php">Change Password</a></li>
                            <li><a href="logout.php">Logout</a></li>
                   </ul>
				</li>
			</ul>
		</div>
	</div>
		<br><br><br>

<?php
	include 'dataShow.php';
?>
<br>
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-md-8">
			
				<div class="navbar navbar-default navbar-fixed-bottom" id="bottomnav">					
					<div class="panel-footer"><center>&copy; 2017</center></div>			
				</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</div>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
	<script src="assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	 <script src="main.js"></script> 
</body>
</html>