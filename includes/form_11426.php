<?php	
	if (empty($_POST['name10_11426']) && strlen($_POST['name10_11426']) == 0)
	{
		return false;
	}
	
	$name10_11426 = $_POST['name10_11426'];
	
	$to = 'veraoshop@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Altura da Pessoa";
	$email_body = "Nova mensagem de Altura \n\n".
				  "Name10_11426: $name10_11426 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: adm@veraoshop.com\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>