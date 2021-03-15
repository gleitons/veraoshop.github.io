<?php	
	if (empty($_POST['name4_5237_42321']) && strlen($_POST['name4_5237_42321']) == 0 || empty($_POST['email4_5237_42321']) && strlen($_POST['email4_5237_42321']) == 0 || empty($_POST['site_5237_42321']) && strlen($_POST['site_5237_42321']) == 0 || empty($_POST['message4_5237_42321']) && strlen($_POST['message4_5237_42321']) == 0)
	{
		return false;
	}
	
	$name4_5237_42321 = $_POST['name4_5237_42321'];
	$email4_5237_42321 = $_POST['email4_5237_42321'];
	$site_5237_42321 = $_POST['site_5237_42321'];
	$message4_5237_42321 = $_POST['message4_5237_42321'];
	$optin4_5237_42321 = $_POST['optin4_5237_42321'];
	
	$to = 'veraoshop@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Site Verão Shop ";
	$email_body = "Novo Comentário VeraoShop \n\n".
				  "Name4_5237_42321: $name4_5237_42321 \nEmail4_5237_42321: $email4_5237_42321 \nSite_5237_42321: $site_5237_42321 \nMessage4_5237_42321: $message4_5237_42321 \nOptin4_5237_42321: $optin4_5237_42321 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: admin@veraoshop.com\n";
	$headers .= "Reply-To: $email4_5237_42321";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>