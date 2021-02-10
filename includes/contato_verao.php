<?php	
	if (empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['mensagem']) && strlen($_POST['mensagem']) == 0)
	{
		return false;
	}
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];
	$optin = $_POST['optin'];
	
	$to = 'veraoshop@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Contato Verão Shop";
	$email_body = "Mensagem do Site \n\n".
				  "Nome: $nome \nEmail: $email \nMensagem: $mensagem \nOptin: $optin \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: send@veraoshop.com\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>