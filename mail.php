<?php
//get data from form  
$name = $_POST['name'];
$number= $_POST['number'];
$email= $_POST['email address'];
$message= $_POST['message'];
$to = "abairajpoinachi@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n Mobile number=".$number. "\r\n Email = " . $email . "\r\n Message =" . $message;

$headers = "From:https://abairaj.github.io/dreamrich.github.io/" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>
