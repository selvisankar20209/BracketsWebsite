<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='abc@gmail.com';
$email_subject='New Submission Form';
$email_body="User-Name      :$name.\n".
             "Visitor-Email :$email.\n".
             "Subject       :$subject.\n".
             "Message       :$message.\n";

$to='selvisankar20209@gmail.com';
$headers="From $email_from \r\n";
$headers.="Reply To $email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html");
?>