<?php	
	if(empty($_POST['nombre']) || empty($_POST['email']) || empty($_POST['message']))
	{
		return false;
	}
	
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from cpc.";
	$email_body = "You have received a new message. \n\n".
				  "Nombre: $nombre \nEmail: $email \nMessage: $message \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>