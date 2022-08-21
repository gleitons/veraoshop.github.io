<?php	
	if (empty($_POST['name4_5237']) && strlen($_POST['name4_5237']) == 0 || empty($_POST['email4_5237']) && strlen($_POST['email4_5237']) == 0 || empty($_POST['site_5237']) && strlen($_POST['site_5237']) == 0 || empty($_POST['message4_5237']) && strlen($_POST['message4_5237']) == 0)
	{
		return false;
	}
	
	$name4_5237 = $_POST['name4_5237'];
	$email4_5237 = $_POST['email4_5237'];
	$site_5237 = $_POST['site_5237'];
	$message4_5237 = $_POST['message4_5237'];
	$optin4_5237 = $_POST['optin4_5237'];
	
	$to = 'veraoshop@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Site Verão Shop ";
	$email_body = "Novo Comentário VeraoShop \n\n".
				  "Name4_5237: $name4_5237 \nEmail4_5237: $email4_5237 \nSite_5237: $site_5237 \nMessage4_5237: $message4_5237 \nOptin4_5237: $optin4_5237 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: admin@veraoshop.com\n";
	$headers .= "Reply-To: $email4_5237";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>