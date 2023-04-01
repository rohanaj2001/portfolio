<?php
// Check for empty fields
// if(empty($_POST['name'])  		||
//    empty($_POST['email']) 		||
//    empty($_POST['phone']) 		||
//    empty($_POST['message'])	||
//    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
//    {
// 	echo "No arguments Provided!";
// 	return false;
//    }

// $name = $_POST['name'];
// $email_address = $_POST['email'];
// $phone = $_POST['phone'];
// $message = $_POST['message'];

// // Create the email and send the message
// $to = 'rohanajroni@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
// $email_subject = "Website Contact Form:  $name";
// $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
// $headers = "From: noreply@rohanaj.tech\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
// $headers .= "Reply-To: $email_address";
// mail($to,$email_subject,$email_body,$headers);
// return true;


// <----------from Postmark--------->

// Import the Postmark Client Class:
require_once('./vendor/autoload.php');
use Postmark\PostmarkClient;

$client = new PostmarkClient("3888dfce-8681-405c-b0f0-0b4aecd461e8");
$fromEmail = "1ms20is094@msrit.edu";
$toEmail = "1ms20is094@msrit.edu";
$subject = "Hello from Postmark";
$htmlBody = "<strong>Hello</strong> this is a Test.";
$textBody = "Hello dear Postmark user.";
$tag = "example-email-tag";
$trackOpens = true;
$trackLinks = "None";
$messageStream = "outbound";

// Send an email:
$sendResult = $client->sendEmail(
  $fromEmail,
  $toEmail,
  $subject,
  $htmlBody,
  $textBody,
  $tag,
  $trackOpens,
  NULL, // Reply To
  NULL, // CC
  NULL, // BCC
  NULL, // Header array
  NULL, // Attachment array
  $trackLinks,
  NULL, // Metadata array
  $messageStream
);

?> 