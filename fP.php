<?php
	$email=$_POST['email'];
	$conn=mysqli_connect("localhost","root","","cyclestoredb");
	if(!$conn){
		die('could not connect:'.mysqli_connect_error());
	}
	else{
		$query="select * from userregistration where email='$email' ";
		$result = mysqli_query($conn,$query);		
		while($row=mysqli_fetch_assoc($result)){
			$pass=$row['password'];
		include "Classes/class.phpmailer.php";
					$mail=new PHPMailer();
					$mail->IsSMTP();   
					$mail->SMTPDebug=1;
					$mail->SMTPAuth = true;	
					$mail->SMTPSecure = 'ssl'; 								
					$mail->Host = "smtp.gmail.com";  
					$mail->Port=465;         
					$mail->IsHTML(true);
					$mail->Username = "onlinecyclechooser@gmail.com";                            
					$mail->Password = "onlineAiub";        				
					$mail->SetFrom("$mail->Username");
					$mail->Subject ="Sending Password";
					$mail->Body= "Your password: {$pass}";
					$mail->AddAddress($_POST["email"]);
							if($mail->Send()) {
							   header('Location:logInForgetPass.php');
							}		
							else{
								 echo 'Message could not be sent.';
							   echo 'Mailer Error: ' . $mail->ErrorInfo;
							   
							}
					
			 }
			}
			
		
		
		
?>