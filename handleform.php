<?php 

$workkkk = "";

$firstname = $_POST['name'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$profession = $_POST['profession'];
$workkkk = $_POST['work'];
$gender = $_POST['gender'];
$graduate = $_POST['gender'];

echo $gender . "<br>";
echo $graduate . "<br>";
return;

echo $firstname;

$to = "ariiankrasniqi@gmail.com";
$subject = "New message";
$body = "New message from " . $firstname . " " . $lastname;
$headers = "ariiankrasniqi@gmail.com";

mail($to, $subject, $body, $headers);

?>