<?php
require '../DatabaseConnections/connectionOOP.php'; //Db Connection Path

//Specifiko secilen kolone te tabeles, perveq Primary Key nese e kemi Autoincrement (ID)
$sql = "INSERT INTO TableName (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";

//Mundem mos me perdor '=== TRUE' pasiqe $conn->query($sql) osht Truthy ose Falsy Value
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>