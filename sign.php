
<html>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	$isValid=true;
	$host='localhost';
	$user='root';
	$pass='';
	$db='cyclestoredb';
					$conn=mysqli_connect($host,$user,$pass,$db);
					if($conn){		
						$query="select * from userregistration where email='".$email."' AND password='".$password."'";
						if($result=mysqli_query($conn,$query)){
							while($row=mysqli_fetch_assoc($result)){	  
								$name=$row['name'];
							}
							session_start();
							$_SESSION['email']=$email;
							header('location:signIn.php');
						}
					}			
}		 
?>
</html>
