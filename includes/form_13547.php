<?php	
	if (empty($_POST['name4_13547']) && strlen($_POST['name4_13547']) == 0 || empty($_POST['email4_13547']) && strlen($_POST['email4_13547']) == 0 || empty($_POST['site_13547']) && strlen($_POST['site_13547']) == 0 || empty($_POST['message4_13547']) && strlen($_POST['message4_13547']) == 0)
	{
		return false;
	}
	
	$name4_13547 = $_POST['name4_13547'];
	$email4_13547 = $_POST['email4_13547'];
	$site_13547 = $_POST['site_13547'];
	$message4_13547 = $_POST['message4_13547'];
	$optin4_13547 = $_POST['optin4_13547'];
	
	$to = 'veraoshop@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Site Verão Shop ";
	$email_body = "Novo Comentário VeraoShop \n\n".
				  "Name4_13547: $name4_13547 \nEmail4_13547: $email4_13547 \nSite_13547: $site_13547 \nMessage4_13547: $message4_13547 \nOptin4_13547: $optin4_13547 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: admin@veraoshop.com\n";
	$headers .= "Reply-To: $email4_13547";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>