<?php
require '../DatabaseConnections/connectionOOP.php'; //Db Connection Path

//Specifiko secilen kolone te tabeles, perveq Primary Key nese e kemi Autoincrement (ID)
$sql = "INSERT INTO TableName (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>