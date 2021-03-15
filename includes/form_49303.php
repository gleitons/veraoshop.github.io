<?php	
	
	
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$optin_49303 = $_POST['optin_49303'];
	
	$to = 'naturfiveoficial@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Mam Caps Propaganda";
	$email_body = "Mensagem recebida Mam Caps \n\n".
				  ": $ \n: $ \n: $ \nOptin_49303: $optin_49303 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: send@naturfive.com\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>