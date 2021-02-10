<?php	
	if (empty($_POST['name4_26133']) && strlen($_POST['name4_26133']) == 0 || empty($_POST['email4_26133']) && strlen($_POST['email4_26133']) == 0 || empty($_POST['site_26133']) && strlen($_POST['site_26133']) == 0 || empty($_POST['message4_26133']) && strlen($_POST['message4_26133']) == 0)
	{
		return false;
	}
	
	$name4_26133 = $_POST['name4_26133'];
	$email4_26133 = $_POST['email4_26133'];
	$site_26133 = $_POST['site_26133'];
	$message4_26133 = $_POST['message4_26133'];
	$optin4_26133 = $_POST['optin4_26133'];
	
	$to = 'veraoshop@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Site Verão Shop ";
	$email_body = "Novo Comentário VeraoShop \n\n".
				  "Name4_26133: $name4_26133 \nEmail4_26133: $email4_26133 \nSite_26133: $site_26133 \nMessage4_26133: $message4_26133 \nOptin4_26133: $optin4_26133 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: admin@veraoshop.com\n";
	$headers .= "Reply-To: $email4_26133";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>