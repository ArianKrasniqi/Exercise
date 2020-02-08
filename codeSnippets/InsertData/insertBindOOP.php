<?php
require '../DatabaseConnections/connectionOOP.php'; //Db Connection Path

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);
// The argument may be one of four types:
// i - integer
// d - double
// s - string
// b - BLOB


// set parameters and execute
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
?>