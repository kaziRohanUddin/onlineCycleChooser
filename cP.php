<?php
	session_start();
	$email=$_SESSION['email'];
	$cPass=$_POST['cPassword'];
	$nPass=$_POST['nPassword'];
	$conn=mysqli_connect("localhost","root","","cyclestoredb");
	if($conn){
		
		$query="UPDATE userregistration SET password='$nPass' where email='$email' ";
		 if(mysqli_query($conn,$query)){					 
			 $query="select password from userregistration where email='$email'";
				/*	 if($result=mysqli_query($conn,$query)){
					 while($row=mysqli_fetch_assoc($result)){	
					
					 echo $row['password'];
					 */
					 header('location:logInChangePass.php');
				 }
			}
		
	
 ?>
 