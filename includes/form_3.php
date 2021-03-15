<?php	
	if (empty($_POST['ncpletoduvidas']) && strlen($_POST['ncpletoduvidas']) == 0 || empty($_POST['emailcduvidas']) && strlen($_POST['emailcduvidas']) == 0 || empty($_POST['duvidasc']) && strlen($_POST['duvidasc']) == 0)
	{
		return false;
	}
	
	$ncpletoduvidas = $_POST['ncpletoduvidas'];
	$emailcduvidas = $_POST['emailcduvidas'];
	$duvidasc = $_POST['duvidasc'];
	$optin3 = $_POST['optin3'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Ncpletoduvidas: $ncpletoduvidas \nEmailcduvidas: $emailcduvidas \nDuvidasc: $duvidasc \nOptin3: $optin3 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $emailcduvidas";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>