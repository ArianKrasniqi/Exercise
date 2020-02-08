<?php
require '../DatabaseConnections/connectionOOP.php'; //Db Connection Path

$sql = "UPDATE TableName SET lastname='Doe' WHERE id=2"; //WHERE - Cfardo kushti qe na nevojitet

// Mundet mu perdor pa '===TRUE' - $conn->query($sql)
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>