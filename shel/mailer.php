<?php
if(isset($_POST['submit'])) {
$to = "hello@petragulicher.com";
$subject = "Suggestion box submission!";
 
// data the visitor provided
$name_field = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
//$email_field = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
 
//constructing the message
$body = " From: $name_field\n\n Suggestion:\n\n $comment";
 
// ...and away we go!
mail($to, $subject, $body);
 
// redirect to confirmation
header('Location: index.html?suggestion=success');
} else {
header('Location: index.html?suggestion=fail');
}
?>