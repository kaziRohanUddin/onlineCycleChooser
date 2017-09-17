<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){	
						
		$xml = new SimpleXMLElement("<users/>");
		$xml->addChild("user", "");
		$xml->user->addChild("body", $_REQUEST['body']);	
		
		
		
		$xml->asXML("feedBack.xml");
	$body=$_REQUEST['body'];
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
					$mail->Subject ="User FeedBack";
					$mail->Body= $body;
					$mail->AddAddress("$mail->Username");
							if($mail->Send()) {
							   header('Location:feedBack.php');
							}		
							else{
								 echo 'Message could not be sent.';
							   echo 'Mailer Error: ' . $mail->ErrorInfo;
							   
							}
		
	
	}
?>