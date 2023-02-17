<?php
  $receiving_email_address = 'virponugoti@gmail.com';

 

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];


$contact->if( empty($errors))

{

$to = $receiving_email_address;

$email_subject = "Contact form submission: $from_name";

$email_body = "You have received a new message. ".

" Here are the details:\n Name: $from_name \n ".

"Email: $from_email \n Message \n $subject";

$headers = "From: $from_email\n";

$headers .= "Reply-To: $receiving_email_address";

mail($to,$email_subject,$email_body,$headers);

}
?>
