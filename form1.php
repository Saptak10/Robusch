<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['text'];

$to = "saptak.bugatti20@gmail.com";
$subject = "Mail From website";

$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;

$headers = "From: noreply@robusch.com" . "\r\n" .
"CC: 1929114@kiit.ac.in";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>