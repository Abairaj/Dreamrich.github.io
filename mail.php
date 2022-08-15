<?php

// VALUES FROM THE FORM

$name      = $_POST['name'];
$number      = $_POST['number'];
$email      = $_POST['email'];
$message        = $_POST['message'];


// CREATE THE EMAIL

$headers    = "Content-Type: text/plain; charset=iso-8859-1\n";

$headers    = "From: $email\n";

$recipient  = "abairajpoinachi@gmail.com";

$subject    = "form";

$message    = wordwrap($name, $number, $email, $message , 1024);



// SEND THE EMAIL TO YOU

mail($recipient, $subject, $message, $headers);



// REDIRECT TO THE THANKS PAGE

header("location: thanks.php");

?>
