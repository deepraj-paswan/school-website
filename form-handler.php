<?php
$name =$_POST['name'];
$visitor_email =$_POST['email'];
$subject = $_POST['subject'];
$message =$_POST['message'];

$email_form ='deeprajpaswan841@gmail.com';

$email_subject ='New Form Submission';

$email_body ="User Name: $name./n".
             "User Name: $visitor_email ./n". 
             "User Name: $subject./n".
             "User Name: $message./n";

$to ='deeprajpaswan841@gmail.com';

$headers ="From:$email_form \r\n";

$headers .="Reply-To: $visitor_email \r\n";

email($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>