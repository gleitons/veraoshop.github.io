<?php	
	if (empty($_POST['name4_11306']) && strlen($_POST['name4_11306']) == 0 || empty($_POST['email4_11306']) && strlen($_POST['email4_11306']) == 0 || empty($_POST['site_11306']) && strlen($_POST['site_11306']) == 0 || empty($_POST['message4_11306']) && strlen($_POST['message4_11306']) == 0)
	{
		return false;
	}
	
	$name4_11306 = $_POST['name4_11306'];
	$email4_11306 = $_POST['email4_11306'];
	$site_11306 = $_POST['site_11306'];
	$message4_11306 = $_POST['message4_11306'];
	$optin4_11306 = $_POST['optin4_11306'];
	
	$to = 'veraoshop@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Site Verão Shop ";
	$email_body = "Novo Comentário VeraoShop \n\n".
				  "Name4_11306: $name4_11306 \nEmail4_11306: $email4_11306 \nSite_11306: $site_11306 \nMessage4_11306: $message4_11306 \nOptin4_11306: $optin4_11306 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: admin@veraoshop.com\n";
	$headers .= "Reply-To: $email4_11306";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>