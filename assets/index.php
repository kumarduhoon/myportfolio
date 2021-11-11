<?php
//get data from form  
$name = $_POST['sender-name'];
$email= $_POST['sender-email'];
$message= $_POST['message'];
$to = "kumarduhoon97@gmail.com";
$subject = "Mail From Portfolio";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: akashduhoon1997@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>