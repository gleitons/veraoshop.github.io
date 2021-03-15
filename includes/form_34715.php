<?php	
	if (empty($_POST['name4_34715']) && strlen($_POST['name4_34715']) == 0 || empty($_POST['email4_34715']) && strlen($_POST['email4_34715']) == 0 || empty($_POST['site_34715']) && strlen($_POST['site_34715']) == 0 || empty($_POST['message4_34715']) && strlen($_POST['message4_34715']) == 0)
	{
		return false;
	}
	
	$name4_34715 = $_POST['name4_34715'];
	$email4_34715 = $_POST['email4_34715'];
	$site_34715 = $_POST['site_34715'];
	$message4_34715 = $_POST['message4_34715'];
	$optin4_34715 = $_POST['optin4_34715'];
	
	$to = 'veraoshop@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Site Verão Shop ";
	$email_body = "Novo Comentário VeraoShop \n\n".
				  "Name4_34715: $name4_34715 \nEmail4_34715: $email4_34715 \nSite_34715: $site_34715 \nMessage4_34715: $message4_34715 \nOptin4_34715: $optin4_34715 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: admin@veraoshop.com\n";
	$headers .= "Reply-To: $email4_34715";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>