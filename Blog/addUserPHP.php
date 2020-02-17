<?php 
require 'connection.php';

$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$role = $_POST['role'];

$passHash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password, email, role) VALUES ('$name', '$passHash', '$email', '$role')";

//Mundem mos me perdor '=== TRUE' pasiqe $conn->query($sql) osht Truthy ose Falsy Value
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>