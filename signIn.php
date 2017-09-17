<?php
	session_start();
	
	if($_SESSION['email']=="k.rohan.u@gmail.com"){			
		header('location:aProfile.php');
	}
	
	else if(isset($_SESSION['email'])==false){
		header('location:Home.php');
	}
	else{
	header('location:uProfile.php');
	}
 ?>