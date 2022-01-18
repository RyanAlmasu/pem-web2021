<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];
if ($name === ''){
readfile("cantrun.html");
die();
}
if ($email === ''){
readfile("cantrun.html");
die();
} else {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
readfile("cantrun.html");
die();
}
}
if ($subject === ''){
readfile("cantrun.html");
die();
}
if ($message === ''){
readfile("cantrun.html");
die();
}
$content="From: $name \nEmail: $email \nMessage: $message";
$recipient = "ryanalimasud3@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
readfile("thankyou.html");
?>