<?php	
	if (empty($_POST['email_338']) && strlen($_POST['email_338']) == 0 || empty($_POST['mensagem_338']) && strlen($_POST['mensagem_338']) == 0)
	{
		return false;
	}
	
	$nome_338 = $_POST['nome_338'];
	$email_338 = $_POST['email_338'];
	$mensagem_338 = $_POST['mensagem_338'];
	$optin_338 = $_POST['optin_338'];
	
	$to = 'veraoshop@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Contato Verão Shop";
	$email_body = "Mensagem do Site \n\n".
				  "Nome_338: $nome_338 \nEmail_338: $email_338 \nMensagem_338: $mensagem_338 \nOptin_338: $optin_338 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: send@veraoshop.com\n";
	$headers .= "Reply-To: $email_338";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>