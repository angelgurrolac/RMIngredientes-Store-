<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone'])     ||
   empty($_POST['product']) 	||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No valido!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$product = $_POST['product'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'contacto@rmingredientes.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Mensaje de de la página RM ingredientes enviado por:  $name";
$email_body = "Buen día, has recibido un mensaje de la página RM ingredientes.\n\n"."Aqui los detalles:\n\nNombre de la persona que envía la petición: $name\n\nCorreo Eléctronico: $email_address\n\nNúmero de celular: $phone\n\nProductos de interés:\n$message\n\nMensaje:\n$message";
$headers .= "De: $email_address";	
$headers = "Content-Type: text/html; charset=UTF-8";
mail($to,$email_subject,$email_body,$headers);
return true;			
?>