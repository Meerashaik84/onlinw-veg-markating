<?php
//get data from form  
$name= $_POST['name'];
$email= $_POST['email'];
$number= $_POST['mobile'];
$message= $_POST['message'];
$to = "meeravalimahmadvali@gmail.com";
$subject = "Mail From website";
$txt ="name = ". $name . "\r\n  Email = " . $email . "\r\nmobile number = " . $number . "\r\nMessage =" . $message;
$headers = "From: noreply@misters.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    
}
//redirect
header("Location:thankyou.html");
?>