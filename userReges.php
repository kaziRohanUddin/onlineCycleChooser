
<html>
<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){	
	$Fname=$_REQUEST['f_name'];
	$Lname=$_REQUEST['l_name'];
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];	
	$mobile=$_REQUEST['mobile'];
	$dob=$_REQUEST['dob'];
	$address=$_REQUEST['address'];

	$host='localhost';
	$user='root';
	$pass='';
	$db='cyclestoredb';
	$image="image/".basename($_FILES['file']['name']);
		$move=move_uploaded_file($_FILES['file']['tmp_name'],$image );
		
		
			$conn=mysqli_connect($host,$user,$pass,$db);
			if(!$conn){
				die('could not connect:'.mysqli_connect_error());
			}
			else{
			//	echo 'connected successfully<br>';	
				if(explode("@",$email)<explode(".",$email)){
					$query="insert into userregistration (firstName,lastName,email,password,mobile,DOB,address,image) values ('$Fname','$Lname','$email','$password','$mobile','$dob','$address','$image')";
					
						if(mysqli_query($conn,$query)){
						//	echo "Record inserted";
							header('Location: logInReg.php');
						}
						else{
							echo "could not record:".mysqli_error($conn);
						}
					//mysqli_close($conn);
					}
					else{
						echo "Invalid Email  ";echo $email;
					}
				}
			}
			
	
?>

</html>