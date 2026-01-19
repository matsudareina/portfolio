<?php
// Check for empty fields
if(empty($_POST['name'])    ||
   empty($_POST['email'])   ||
   empty($_POST['message']) ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	

$to = 'katoreina.cj@gmail.com'; 
$email_subject = "コンタクトフォーム:  $name";
$email_body = "ポートフォリオサイトよりコンタクトフォーム\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: katoreina.cj@gmail.com\n"; 
$headers .= "Reply-To: $email_address";	
mb_send_mail($to,$email_subject,$email_body,$headers);
return true;			
?>