<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['number']
$subject=$_POST['subject'];
$message= $_POST['message'];
$to = "info@habracha-events.com";
$subject = "Mail From habracha-events.com";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Number = " . $number . "\r\n  Subject = " . $subject . "\r\n  Message =" . $message;
$headers = "From: noreply@habracha-events.com" . "\r\n" .
"CC: highoakltd@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
} else{
    echo 'Thank you for contacting us';
 }
?>