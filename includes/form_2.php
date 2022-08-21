<?php	
	if (empty($_POST['nome']) && strlen($_POST['nome']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['mensagem']) && strlen($_POST['mensagem']) == 0)
	{
		return false;
	}
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];
	$aceiteostermos = $_POST['aceiteostermos'];
	
	$to = 'hdpd.adm@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Site HD PD";
	$email_body = "Nova Mensagem de HD \n\n".
				  "Nome: $nome \nEmail: $email \nMensagem: $mensagem \nAceiteostermos: $aceiteostermos \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: admin@hdprodutosdigitais.com\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>